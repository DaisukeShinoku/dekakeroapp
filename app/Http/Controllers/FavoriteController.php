<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Course;
use App\Models\Favorite;

use App\Http\Controllers\Controller;


class FavoriteController extends Controller
{
    public function list()
    {
        $favorites = Favorite::with('course')->where('user_id', Auth::id())->orderBy('course_id')->get();
        return view('favorite', ['favorites' => $favorites]);
    }

    public function store(Request $request)
    {
        Favorite::updateOrInsert(
            ['user_id' => Auth::id(), 'course_id' => $request->course_id]
        );

        $course = Course::find($request->course_id);
        $course_name = $course->name;

        return redirect()->route('favorite',[$request->course_id])->with('success_message', "$course_name をお気に入りに登録しました");
  }

    public function destroy(Request $request)
    {
        $favorite = Favorite::where('user_id', Auth::user()->id)->where('course_id', $request->course_id);
        $favorite->delete();

    return redirect()->route('favorite')->with('flash_message', 'お気に入りを削除しました');
  }
}