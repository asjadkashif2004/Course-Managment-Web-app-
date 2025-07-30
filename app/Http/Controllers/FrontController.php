<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // ✅ Required for Course::all()

class FrontController extends Controller
{
    public function home() {
        return view('front.home');
    }

    public function about() {
        return view('front.about');
    }

    public function courses() {
        $courses = Course::all();
        return view('front.courses', compact('courses'));
    }
}
