<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required' , 'min:4' , 'max:100' , 'unique:posts,title'],
            'sub_title' => ['required' , 'min:4' , 'max:100'],
            'slug' => ['required' , 'min:4' , 'max:100' , 'unique:posts,slug'],
            'category_id' => ['required' , 'exists:categories,id'],
            'content' => ['required' , 'min:20'],
            'image' => ['required']
        ];
    }
}
