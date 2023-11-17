<?php

namespace App\Http\Controllers\Note;

use App\Models\Note\note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Shamaseen\Repository\Utility\Controller as Controller;
use App\Http\Requests\Note\NoteRequest;
use App\Http\Resources\Note\NoteCollection;
use App\Http\Resources\Note\NoteResource;
use App\Policies\Note\NotePolicy;
use App\Repositories\Note\NoteRepository;

/**
 * Class noteController.
 *
 * @property noteRepository $noteRepository
 */
class NoteController extends Controller
{

    public string $routeIndex = 'notes.index';

    public string $pageTitle = 'note';
    public string $createRoute = 'notes.create';

    public string $viewIndex = 'notes.index';
    public string $viewCreate = 'notes.create';
    public string $viewEdit = 'notes.edit';
    public string $viewShow = 'notes.show';

	public ?string $resourceClass = NoteResource::class;

	public ?string $collectionClass = NoteCollection::class;

	public ?string $policyClass = NotePolicy::class;

	public string $requestClass = NoteRequest::class;


    /**
     * noteController constructor.
     *
     * @param noteRepository $noteRepository
     */
    public function __construct(noteRepository $repository)
    {
        $this->noteRepository=$repository;
        parent::__construct($repository);
    }


    public function store(): JsonResponse|RedirectResponse
    {
        $data = $this->request->validated();
        $data['user_id'] = Auth::id();
        $this->noteRepository->create($data);
        return redirect()->route('notes.index');
    }


    public function update($id): JsonResponse|RedirectResponse
    {
        $note=Note::find($id);
        $data = $this->request->validated();
        $this->noteRepository->update($note->id,$data);
        return redirect()->route('notes.index');
    }





}
