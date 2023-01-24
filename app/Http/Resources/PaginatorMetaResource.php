<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class PaginatorMetaResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'current_page' => $this->currentPage(),
            'from'         => $this->firstItem(),
            'last_page'    => $this->lastPage(),
            'per_page'     => $this->perPage(),
            'to'           => $this->lastItem(),
            'total'        => $this->total(),
        ];
    }
}
