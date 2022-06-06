<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index() {


        return view('admin.index', [
            'news' => News::all()
        ]);
    }

    public function create(News $news) {

        return view('admin.create',[
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    public function store(NewsRequest $request, News $news) {

        $request->validated();

        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/img', $request->file('image'));
            $url = Storage::url($path);
        }

        $news->image = $url;
        $news->fill($request->all())->save();


        return redirect()->route('news.show', $news->id)->with('success', 'Новость добавлена');
    }

    public function update(Request $request, News $news) {
        $request->flash();

        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/img', $request->file('image'));
            $url = Storage::url($path);
        }

        $news->image = $url;
        $news->fill($request->all())->save();


        return redirect()->route('news.show', $news->id)->with('success', 'Новость изменена');
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость удалена');
    }

    public function edit(News $news) {

        return view('admin.create',[
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

}
