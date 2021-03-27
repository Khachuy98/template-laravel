<?php

namespace App\Repositories;

use App\Models\Document;
use Config;

class ProductRepository extends Repository
{
    public function getProductList()
    {
        return $this->responseStatus(Document::where('language', Config::get('constants.default_language'))->orderBy('created_at', 'desc')->paginate());
    }
}
