<?php

namespace App\Http\Resources\Auth;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;
use Shamaseen\Repository\Utility\ResourceCollection as ResourceCollection;

/**
 * Class authCollection.
 */
class AuthCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array|Arrayable<string, mixed>|JsonSerializable
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return parent::toArray($request);
    }
}
