<?php

namespace App\Http\Requests;

use App\Rules\Ember;
use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:5', 'max:20', new Ember()],
            'text' => 'required|min:5',
            'category_id' => "required|exists:App\Models\Category,id",
            'image' => 'mimes:jpeg,bmp,png|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ты забыл заполнить :attribute',
            'title.min' => 'Мало буков в поле :attribute',
        ];

    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок новости',
            'text' => 'Текст новости',
            'category_id' => 'Категория новости',
            'image' => 'Изображение'
        ];

    }
}
