<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Place;
use App\Models\Course;

use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
  /**
   * トップページ を表示する
   * 
   * @return \Illuminate\View\View
   */
  public function index()
  {
    $places = Place::orderBy('place_id')->get();
    return view('welcome', ['places' => $places]);
  }
  public function result_hoge()
  {
      $course = Course::where('course_id', 301)->first();
      return view('result', ['course' => $course]);
  }
  public function favorite()
  {
      return view('favorite');
  }
  public function test()
  {
      return view('test');
  }
  public function input2(Request $request)
  {
      //
      $place = $request->input('place');
      $outside_flg = $request->input('outside_flg');
      $car_flg = $request->input('car_flg');
      var_dump($place, $outside_flg, $car_flg); exit;
      
      //return view('test.input');
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
      return view('result', ['course' => $course]);
  }
}