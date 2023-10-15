<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaylistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'image'=>'required|file|image',
            'singerName'=>'required|string'
        ];
    }
    public function messages(){
        return [
            'name'=>'name is required and must be string',
            'singerName'=>'singerName is required and must be string',
            'image'=>'image is required and must be file',
        ];
    }
}

