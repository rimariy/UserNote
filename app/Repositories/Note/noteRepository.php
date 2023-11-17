<?php
namespace App\Repositories\Note;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Shamaseen\Repository\Utility\AbstractRepository as AbstractRepository;
use App\Models\Note\note;

/**
 * Class noteRepository.
 *
 * @extends AbstractRepository<note>
 */
class noteRepository extends AbstractRepository
{
    public array $with = [];

    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return note::class;
    }

    public function getUserNotes($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

//    public function create(array $data): EloquentModel
//    {
//
//        return $this->model->create($data);
//    }

//    public function update(array $data, $noteId): int|bool|EloquentModel
//    {
//        $note = $this->model->findOrFail($noteId);
//
//        $note->update($data);
//        return $note;
//    }

//    public function delete(string $noteId): int|bool
//    {
//        return $this->model->destroy($noteId);
//    }

}
