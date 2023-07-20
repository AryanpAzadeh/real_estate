<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Article;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function home()
    {
        return view('pages.admin.home');
    }

    public function article_category()
    {
        $categories = Category::latest()->get();
        return view('pages.admin.article_category' , compact('categories'));
    }

    public function articles()
    {
        $articles = Article::with('category')->latest()->get();
        return view('pages.admin.article' , compact('articles'));
    }

    public function agency()
    {
        $agencies = Agency::latest()->with(['zone' , 'city'])->get();
        return view('pages.admin.agencies' , compact('agencies'));
    }

//    Types
    public function types()
    {
        $types = Type::latest()->get();
        return view('pages.admin.type' , compact('types'));
    }

    public function store_type(Request $request)
    {
        Type::create([
            'name' => $request->name
        ]);
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function update_type(Request $request , Type $type)
    {
        $type->update($request->all());
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function delete_type(Type $type)
    {
        $type->delete();
        Session::flash('success' , 'اطلاعات با موفقیت حذف شد');
        return redirect()->back();
    }
}
