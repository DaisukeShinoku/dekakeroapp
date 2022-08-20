<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    return view('welcome');
  }
  public function result()
  {
      return view('result');
  }
  public function favorite()
  {
      return view('favorite');
  }
  public function test()
  {
      return view('test');
  }
  public function input(Request $request)
  {
      //
      $place = $request->input('place');
      $outside_flg = $request->input('outside_flg');
      $car_flg = $request->input('car_flg');
      var_dump($place, $outside_flg, $car_flg); exit;
      
      //return view('test.input');
  }
}