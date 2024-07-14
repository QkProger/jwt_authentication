<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email|min:3|max:50',
                'password' => 'required|string|min:8',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()->all()], 400);
        }

        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();

        Log::info("Пользователь с ID " . Auth::id() . " вошел в свой аккаунт");
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ], 200);
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|min:2|max:15',
                'email' => 'required|string|email|min:3|max:50|unique:users',
                'password' => 'required|string|min:8',
            ]);
        } catch (ValidationException $e) {

            $validationErrors = $e->errors();

            $errorMessage = "Кто-то попытался зарегистрироваться но, не прошел валидацию. Ошибки валидации: ";
            foreach ($validationErrors as $field => $messages) {
                $errorMessage .= "Поле \"$field\": " . implode(', ', $messages) . ". ";
            }

            Log::error($errorMessage);
            return response()->json(['error' => $e->validator->errors()->all()], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'real_password' => $request->password,
        ]);

        $token = Auth::login($user);
        Log::info("Зарегестрировался новый пользователь с ID " . $user->id);
        return response()->json([
            'status' => 'success',
            'message' => 'Пользователь создан успешно!',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ], 201);
    }

    public function logout()
    {
        $user_id = Auth::id();
        Auth::logout();
        Log::info("Пользователь с ID " . $user_id . " вышел из своего аккаунта");
        return response()->json([
            'status' => 'success',
            'message' => 'Успешно вышел из аккаунта',
        ], 200);
    }

    public function refresh()
    {
        Log::info("У пользователя с ID " . Auth::id() . " обновился токен");
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ], 200);
    }
}
