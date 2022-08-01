<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];
    //  Relationships   ---------------------------------------------------------------------------
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //  Methods -----------------------------------------------------------------------------------
    public static function getAll()
    {
        return Self::with('user')->orderBy('created_at', 'desc')->paginate(config('amal.limits.teachers'))->withQueryString();
    }
    public static function getRandom()
    {
        return Self::inRandomOrder()->limit(config('amal.limits.home.teachers'))->get();
    }
    public static function getOne($id)
    {
        return Self::with('user')->where('id', $id)->get()->toArray();
    }
}
