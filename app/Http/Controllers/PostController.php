<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Symfony\Component\HttpFoundation\Response as ResponseStatus;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;

class PostController extends BaseController
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function getRules(): string
    {
        return PostRequest::class;
    }

    public function index()
    {
        return $this->success( $this->service->all() );
    }

    public function show($id)
    {
        return $this->success( 
            $this->service->find($id),
            ResponseStatus::HTTP_OK
         );
    }

    public function store(): JsonResponse
    {
        return $this->success(
            $this->service->create(
                $this->validated()
            ),
            ResponseStatus::HTTP_OK
        );
    }
}
