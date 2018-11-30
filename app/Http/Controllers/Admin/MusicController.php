<?php

namespace App\Http\Controllers\Admin;

use App\Music;
use App\Services\MusicService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class MusicController extends Controller
{
    protected $musivService;

    public function __construct(MusicService $musicService)
    {
        $this->musivService = $musicService;
    }

    public function index()
    {
        $musics = $this->musivService->index();

        return view('admin.index')->with([
            'musics'=>  $musics['musics']
        ]);

    }

    public function create()
    {
        return view('admin.create')->with([
            'musics' => null,
            'urlSubmit' => 'admin/store',
            'method'    => 'POST'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->musivService->save($data);

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $editMusic = $this->musivService->edit($id);

        return view('admin.create')->with([
            'music'     =>  $editMusic,
            'urlSubmit' => 'admin/update/',
            'method'    => 'PUT'
        ]);
    }

    public function update($id, Request $request)
    {
        $update = $request->all();

        $return = $this->musivService->update($id, $update);

        if ($return){
            return redirect()->route('admin.index');
        }
        else
        {
            return redirect()->route('admin.edit');
        }
    }

    public function delete($id)
    {
        DB::table('musics')->delete($id);

        return redirect()->route('admin.index');
    }

}

