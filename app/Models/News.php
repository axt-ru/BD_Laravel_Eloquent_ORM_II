<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class News extends Model
{
    protected $fillable = ['title', 'text', 'isPrivate', 'category_id'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function rules() {
      //  $tableNameCategory = (new Category())->getTable();
        return [
            'title' => 'required|min:5|max:30',
            'text' => 'required|min:10',
            'category_id' => "required|exists:App\Models\Category,id",
            'image' => 'mimes:jpeg,bmp,png|max:2000'
        ];
    }

    public function attributeNames() {
        return [
            'title' => 'Заголовок',
            'text' => 'Содержание',
            'category_id' => 'Категория',
            'image' => 'Картинка'
        ];
    }

    public function getNews()
    {
        return json_decode(File::get(storage_path() . '/news.json'), true);
    }

}
