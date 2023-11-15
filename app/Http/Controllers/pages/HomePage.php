<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class HomePage extends Controller
{
  public function index()
  {

    $categorias = Category::with('videos')->get();

    /* Ejemplo usuario admin */
    /* $user = \User::find(\Auth::user()->id);

    $user->HasRole('ADMIN'); */

    return view('content.pages.pages-page2', compact('categorias'));
  }
}
