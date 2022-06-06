<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {

        return view('admin.index');
    }


    public function test1(News $news)
    {
        return response()->json($news->getNews())
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function test2()
    {
        return response()->download('info.jpg');
    }

    public function test3(Request $request, Category $categories, News  $news){
        if ($request->isMethod('post')) {
            $data = $request->except('_token');

//            $json = ($data['category_id'] == 0)? $news->getNews() : $news->getNewsByCategoryId($data['category_id']);

            if ($data['formatData'] == 'xlsx') {
                $export = new NewsExport($json);
                return Excel::download($export, 'invoices.xlsx');
            }

            if ($data['formatData'] == 'json') {
                return response()
                    ->json($json)
                    ->header('Content-Disposition', 'attachment; name="json.txt"')
                    ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            }

        }

        return view('admin.test3', [
            'categories' => Category::all()
        ]);
    }

}
