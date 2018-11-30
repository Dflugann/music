<?php

namespace App\Http\Controllers\Site;

use App\Repositories\MusicRepositories;
use Illuminate\Http\Request;
use App\Services\MusicService;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $musicService = new MusicRepositories();
        $musics = $musicService->allMusic();

        return view('site.index')->with([
            'musics'=>  $musics
        ]);
    }
}
