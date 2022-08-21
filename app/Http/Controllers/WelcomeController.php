<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Place;
use App\Models\Course;
use App\Models\Favorite;

use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    public function index()
    {
        $places = Place::orderBy('place_id')->get();
        return view('welcome', ['places' => $places]);
    }

    public function result(Request $request)
    {
        $place_id = $request->input('place');
        $outside_flg = $request->input('outside_flg');
        $car_flg = $request->input('car_flg');

        $course = Course::inRandomOrder();

        if($place_id != 0)
        {
            $course = $course->where('place_id', $place_id);
        }

        if($outside_flg != 2)
        {
            $course = $course->where('outside_flg', $outside_flg);
        }

        if($car_flg == "no")
        {
            $course = $course->where('car_flg', 0);
        }

        $course = $course->first();

        $favorite_flg = Favorite::where('user_id', Auth::id())->where('course_id', $course->course_id)->exists();

        return view('result', ['course' => $course, 'favorite_flg' => $favorite_flg]);
  }

  public function return_welcome()
  {
      return redirect()->route('welcome')->with('flash_message', 'もう一度検索してください');
  }
}