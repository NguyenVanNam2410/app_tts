<?php

namespace App\Http\Controllers;

use App\Models\thematic;
use Illuminate\Http\Request;

class ThematicController extends Controller
{
    public function index()
    {
        $post = thematic::get();
        return view('thematic', compact('post'));
    }
}
