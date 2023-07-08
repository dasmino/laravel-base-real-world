<?php

namespace App\Repositories;

abstract class BaseRepository
{
    public $model;

    abstract public function setModel(): string;

    public function __construct()
    {
        $this->model = app($this->setModel());
    }

    public function all()
    {
        return $this->model->get();
    }
    
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
}