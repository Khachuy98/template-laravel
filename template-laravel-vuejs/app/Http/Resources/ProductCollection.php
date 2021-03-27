<?php

namespace App\Http\Resources;

class ProductCollection extends BaseCollection
{
    public function toArray($request)
    {
        return $this->map(function ($product) {
            return [
                'product_oid' => $product->product_oid,
                'name' => $product->product_name,
                'created_by' => $product->created_by,
                'updated_by' => $product->updated_by,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
            ];
        });
    }
}
