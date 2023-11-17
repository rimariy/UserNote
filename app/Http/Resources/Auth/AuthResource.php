<?php

namespace App\Http\Resources\Auth;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use JsonSerializable;
use App\Models\Auth\auth;
use Shamaseen\Repository\Utility\Resource as JsonResource;

/**
 * Class authResource.
 * @mixin auth
 */
class AuthResource extends JsonResource
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
