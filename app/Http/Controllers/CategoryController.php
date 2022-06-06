<?php

namespace App\Http\Controllers;


use App\Models\Category;use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories', [
            'categories' => Category::all()
        ]);
    }

    public function show($slug) {

        $category = Category::query()->where('slug', $slug)->first();

       // $news = News::query()->where('category_id', $category->id)->get();

        return view('news.category', [
            'category' => $category->title,
            'news' => $category->news
        ]);
    }
}
