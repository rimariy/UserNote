<?php

namespace App\Http\Requests\Note;

use Shamaseen\Repository\Utility\Request as Request;

/**
 * Class noteRequest.
 */
class NoteRequest extends Request
{
    /**
     * Define all the global rules for this request here.
     *
     * @var array
     */
    protected array $rules = [

    ];

    public function updateRules()
    {
         return [
        'title' => 'required|string|max:255',
        'content' => 'nullable|string',
    ];
    }
    public function storeRules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ];
    }

   }
