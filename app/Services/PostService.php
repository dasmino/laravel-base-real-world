<?php 

namespace App\Services;

use App\Repositories\PostRepository;
use App\Services\BaseService;

class PostService extends BaseService
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($data)
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}