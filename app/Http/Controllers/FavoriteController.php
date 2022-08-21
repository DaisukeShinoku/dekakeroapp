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
  public function index()
  {
    return view('favorite');
  }
}