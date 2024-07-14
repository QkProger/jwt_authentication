<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Repositories\NoteRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NoteController extends Controller
{
    protected $noteRepository;

    public function __construct(NoteRepositoryInterface $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        $userId = Auth::id();
        $notes = Cache::remember("user:{$userId}:notes", 60, function () {
            return $this->noteRepository->all()->getData(true)['notes'];
        });

        return response()->json([
            'notes' => $notes,
        ], 200);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:25',
                'description' => 'required|string|min:5|max:100',
            ]);
        } catch (ValidationException $e) {
            $validationErrors = $e->errors();

            $errorMessage = "Пользователь с ID " . Auth::id() . " Не прошел валидацию создания новой заметки. Ошибки валидации: ";
            foreach ($validationErrors as $field => $messages) {
                $errorMessage .= "Поле \"$field\": " . implode(', ', $messages) . ". ";
            }

            Log::error($errorMessage);
            return response()->json(['error' => $e->validator->errors()->all()], 400);
        }

        $note = $this->noteRepository->create($data);

        // Инвалидация кэша
        Cache::forget("user:" . Auth::id() . ":notes");

        return $note;
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:25',
                'description' => 'required|string|min:5|max:100',
            ]);
        } catch (ValidationException $e) {
            $validationErrors = $e->errors();

            $errorMessage = "Пользователь с ID " . Auth::id() . " Не прошел валидацию обновления заметки. Ошибки валидации: ";
            foreach ($validationErrors as $field => $messages) {
                $errorMessage .= "Поле \"$field\": " . implode(', ', $messages) . ". ";
            }

            Log::error($errorMessage);
            // return response()->json(['error' => $validationErrors], 400);
            return response()->json(['error' => $e->validator->errors()->all()], 400);
        }

        $note = $this->noteRepository->update($id, $data);

        // Инвалидация кэша
        Cache::forget("user:" . Auth::id() . ":notes");

        return $note;
    }

    public function show($id)
    {
        return $this->noteRepository->findById($id);
    }

    public function destroy($id)
    {
        $response = $this->noteRepository->delete($id);

        // Инвалидация кэша
        Cache::forget("user:" . Auth::id() . ":notes");

        return $response;
    }
}
