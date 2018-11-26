<?php

namespace App\Http\Controllers\Admin;

use App\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


}
