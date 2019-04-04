<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

// ResourceCollection is for collecting all data including id

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'name'=> $this->name,
            'discount'=> $this->discount,
            'totalPrice'=>round((1-($this->discount/100))*$this->price, 2),
            'rating'=> $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count()) : 'not found',
            'href'=> [
                'link'=>route('products.show', $this->id)
            ]
        ];
    }
}
