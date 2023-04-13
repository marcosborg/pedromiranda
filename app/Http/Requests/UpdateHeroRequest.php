<?php

namespace App\Http\Requests;

use App\Models\Hero;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateHeroRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('hero_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'subtitle' => [
                'string',
                'nullable',
            ],
            'images' => [
                'array',
            ],
            'button_text' => [
                'string',
                'nullable',
            ],
            'button_link' => [
                'string',
                'nullable',
            ],
        ];
    }
}