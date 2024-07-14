<?php

namespace App\Repositories;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NoteRepository implements NoteRepositoryInterface
{
    public function all()
    {
        $notes = Auth::user()->notes;
        Log::info("Пользователь с ID " . Auth::id() . " просмотрел свои заметки");
        return response()->json([
            'notes' => $notes,
        ], 200);
    }

    public function findById($id)
    {
        $note = Auth::user()->notes()->find($id);
        if ($note) {
            Log::info("Пользователь с ID " . Auth::id() . " просмотрел свою заметку с ID {$note->id}");
            return response()->json([
                'note' => $note,
            ], 200);
        } else {
            return response()->json([
                'error' => 'Заметка не найдена',
            ], 404);
        }
    }

    public function create(array $data)
    {
        $data['user_id'] = Auth::id();
        $note = Auth::user()->notes()->create($data);
        
        Log::info("Пользователь с ID " . Auth::id() . " создал заметку с ID {$note->id}");
        
        return response()->json([
            'note' => $note,
        ], 201);
    }

    public function update($id, array $data)
    {
        $note = Auth::user()->notes()->find($id);

        if ($note) {
            $note->update($data);
            Log::info("Пользователь с ID " . Auth::id() . " обновил свою заметку с ID {$note->id}");
            return response()->json([
                'note' => $note,
            ], 200);
        } else {
            return response()->json([
                'error' => 'Заметка не найдена',
            ], 404);
        }
    }

    public function delete($id)
    {
        $note = Auth::user()->notes()->find($id);
        if (!$note) {
            return response()->json([
                'error' => 'Заметка не найдена',
            ], 404);
        }
        $note->delete();
        Log::info("Пользователь с ID " . Auth::id() . " удалил свою заметку с ID {$note->id}");
        return response()->json([], 204);
    }
}