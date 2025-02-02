<?php

namespace App\Repositories;

interface NoteRepositoryInterface
{
    public function all();

    public function findById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}
