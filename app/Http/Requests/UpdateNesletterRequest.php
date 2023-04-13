<?php

namespace App\Http\Requests;

use App\Models\Nesletter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNesletterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('nesletter_edit');
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
