<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class MusicRepositories
{
    public function allMusic()
    {
        $musics = DB::table('musics')
                    ->get();

        return $musics;
    }

    public function insertMusic($data = null)
    {
        $result = DB::table('musics')->insert([
            'date_music'    =>  $data['date_music'],
            'author'        =>  $data['author'],
            'title'         =>  $data['title'],
            'genre'         =>  $data['genre'],
            'record_company'=>  $data['record_company'],
            'interprete'    =>  $data['interprete'],
            'album'         =>  $data['album']
        ]);

        return $result;
    }

    public function editMusic($id)
    {
        $result = DB::table('musics')
                    ->find($id);

        return $result;
    }

    public function updateMusic($id, $update)
    {
        $result = DB::table('musics')
                ->where('id', $id)
                ->update([
                    'date_music'    =>  $update['date_music'],
                    'author'        =>  $update['author'],
                    'title'         =>  $update['title'],
                    'genre'         =>  $update['genre'],
                    'record_company'=>  $update['record_company'],
                    'interprete'    =>  $update['interprete'],
                    'album'         =>  $update['album']
                ]);

        return $result;
    }

}