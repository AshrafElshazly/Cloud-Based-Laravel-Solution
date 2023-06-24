<?php

namespace App\Application\Http\Traits;


trait ApiResponseTrait
{

    public function apiResponse($code = 200, $message = null, $errors = null, $data = null)
    {

        $array = [
            'stauts' => $code,
            'message' => $message,
        ];

        if (is_null($data) && !is_null($errors))
            $array['errors'] = $errors;
        elseif (is_null($errors) && !is_null($data))
            $array['data'] = $data;
        else {
            $array['errors'] = $errors;
            $array['data'] = $data;
        }

        return response($array, $code);
    }
}
