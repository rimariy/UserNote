<?php

namespace App\Http\Resources\Note;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;
use App\Models\Note\note;
use Shamaseen\Repository\Utility\Resource as JsonResource;

/**
 * Class noteResource.
 * @mixin note
 */
class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable<string, mixed>|JsonSerializable
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return parent::toArray($request);
    }
}
