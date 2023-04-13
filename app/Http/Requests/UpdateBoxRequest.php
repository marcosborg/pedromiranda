<?php

namespace App\Http\Requests;

use App\Models\Box;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBoxRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('box_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'icon' => [
                'string',
                'nullable',
            ],
        ];
    }
}
