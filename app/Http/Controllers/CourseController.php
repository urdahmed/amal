<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request, $phase = NULL, $level = NULL)
    {
        $phases = array_column(config('amal.levels'), 'phase');
        if (is_null($phase)) {
            return view('courses.index', ['phase' => 'all', 'level' => 'all']);
        } elseif (in_array($phase, $phases)) {
            if (is_null($level)) {
                return view('courses.index', ['phase' => $phase, 'level' => 'all']);
            } else {
                $levels = config('amal.levels')[array_search($phase, $phases)]['levels'];
                if (in_array($level, $levels)) {
                    return view('courses.index', ['phase' => $phase, 'level' => $level]);
                } else {
                    $this->error();
                }
            }
        } else {
            $this->error();
        }
    }
    public function show(Request $request)
    {
    }
}
