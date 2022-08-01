<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ValidatorController
{
    public static function group($request)
    {
        return Validator::make($request->only(["groupname", "color", "program"]), [
            'groupname' => ['required', 'string', 'min:4', 'max:100'],
            'color' => ['required', Rule::in(array_keys(config('sms.styles')))]
        ]);
    }
}
