<?php

declare(strict_types=1);

namespace App\Http\User\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Laravel\Sanctum\NewAccessToken;

/**
 * @property NewAccessToken $resource
 */
final class NewAccessTokenResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'access_token' => $this->resource->plainTextToken,
        ];
    }
}
