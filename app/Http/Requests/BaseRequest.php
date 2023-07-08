<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    { 
        return false;
    }

    public function rules(): array
    {
        switch($this->method()) {
            case 'GET':
                return $this->rulesGet();
            case 'POST':
                return $this->rulesPost();
            case 'PUT':
                return $this->rulesPut();
            default:
                throw new Exception('Not define');
        }
    }

    public function rulesGet()
    {
        return [];
    }

    public function rulesPost()
    {
        return [];
    }

    public function rulesPut()
    {
        return [];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'is_success' => true,
            'message' => 'validation errors',
            'status_code' => Response::HTTP_BAD_REQUEST,
            'results'    => $validator->errors()
        ]));

    }
}
