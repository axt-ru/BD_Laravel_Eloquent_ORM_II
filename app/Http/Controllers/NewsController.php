<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {

        //$news = DB::select('SELECT * FROM `news` WHERE 1');
        //$news = DB::table('news')->get(); //getAll


        //$news = News::simplePaginate(5);
        $news = News::paginate(5);

        return view('news.index')->with('news', $news);
    }

    public function show($id)
    {
        //$news = DB::select('SELECT * FROM `news` WHERE id = :id', ['id' => $id]);
        //$news = DB::table('news')->find($id); //getOne($id)
        $news = News::find($id);
        return view('news.one')->with('news', $news);
    }
}
