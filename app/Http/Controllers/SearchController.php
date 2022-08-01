<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SearchController
{
    private static function rules($request, $attributes)
    {
        $rules = [
            'gender' => Rule::in(array_keys(config('sms.gender'))),
        ];
        foreach ($attributes as $k => $v) {
            $i[$k] = $request->input($k, NULL);
            $r[$k] = $rules[$v];
        }
        $v = Validator::make($i, array_intersect_key($r, $i))->errors()->toArray();
        return array_merge(array_diff_key($i, $v), array_fill_keys(array_keys($v), NULL));
    }
    public static function exists($value, $table, $col)
    {
        return Validator::make(['record' => $value], [
            'record' => ['exists:' . $table . ',' . $col]
        ]);
    }

}