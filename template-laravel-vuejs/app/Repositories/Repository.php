<?php

namespace App\Repositories;

class Repository
{
    public function responseStatus($resource, $status = '0000')
    {
        $resource->response_status = $status;
        return $resource;
    }
}
