<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Teacher};

class TeacherController extends Controller
{
    private function phone($phone)
    {
        $p = is_null($phone) ? '0000000000' : $phone;
        $im = imagecreate(90, 15);
        $bg = imagecolorallocate($im, 0xF1, 0xFA, 0xEE);
        $textcolor = imagecolorallocate($im, 0x1D, 0x35, 0x57);
        imagestring($im, 5, 0, 0, $p, $textcolor);
        ob_start();
        imagepng($im);
        $bin = ob_get_clean();
        imagedestroy($im);
        return base64_encode($bin);
    }
    public function index(Request $request)
    {
        $Teachers = Teacher::getAll();
        return view('teachers.index', ['teachers' => $Teachers]);
    }
    public function courses($id)
    {
        if (SearchController::exists($id, 'teachers', 'id')->fails()) {
            $this->error();
        }
        $Teacher = Teacher::getOne($id)[0];
        return view('teachers.courses', ['teacher' => $Teacher, 'phone' => $this->phone($Teacher['phone'])]);
    }
    public function downloads($id)
    {
        if (SearchController::exists($id, 'teachers', 'id')->fails()) {
            $this->error();
        }
        $Teacher = Teacher::getOne($id)[0];
        return view('teachers.downloads', ['teacher' => $Teacher, 'phone' => $this->phone($Teacher['phone'])]);
    }
}
