<?php

namespace App\Services;

use App\Repositories\MusicRepositories;


class MusicService
{
    protected $musicRepositories;

    public function __construct(MusicRepositories $musicRepositories)
    {
        $this->musicRepositories = $musicRepositories;
    }

    public function index()
    {
        $allMusic = $this->musicRepositories->allMusic();

        return array('musics' => $allMusic);
    }

    public function save($data)
    {
        $insertMusic = $this->musicRepositories->insertMusic($data);

        return $insertMusic;
    }

    public function edit($id)
    {
        $editMusic = $this->musicRepositories->editMusic($id);

        return $editMusic;
    }

    public function update($id, $update)
    {
        $result = $this->musicRepositories->updateMusic($id, $update);

        return $result;

    }
}