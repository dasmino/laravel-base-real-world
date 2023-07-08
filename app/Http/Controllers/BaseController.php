<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;

abstract class BaseController extends Controller
{
    use ApiResponse;

    abstract public function getRules(): string;

    /**
     * Get validated data
     *
     * @return array
     */
    public function validated(): array
    {
        return app($this->getRules())->validationData();
    }
}
