<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return response()->json(['errors' => 'Unauthorized Access'], Response::HTTP_UNAUTHORIZED);
    }
}
