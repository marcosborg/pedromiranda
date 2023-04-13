<?php

namespace App\Http\Requests;

use App\Models\Nesletter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNesletterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('nesletter_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
            ],
        ];
    }
}
