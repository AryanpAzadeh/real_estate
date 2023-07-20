<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function store_category(Request $request)
    {
        Category::create([
            'name' => $request->input('name')
        ]);
        Session::flash('success',' با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function update_category(Category $category , Request $request)
    {
        $category->update($request->all());
        Session::flash('success',' با موفقیت ویرایش شد');
        return redirect()->back();
    }

    public function delete_category(Category $category)
    {
        $category->delete();
        Session::flash('success',' با موفقیت حذف شد');
        return redirect()->back();
    }

//    Articles

    public function add()
    {
        return view('pages.admin.add.article');
    }

    public function edit(Article $article)
    {
        return view('pages.admin.edit.article' , compact('article'));
    }

    public function store(ArticleRequest $request)
    {
        $validate = $request->validated();
        $article = Article::create([
            'title' => $validate['title'],
            'category_id' => $validate['category_id'],
            'body' => $validate['body'],
        ]);
        $name = 'article-'.$article->id.'.'.$request->file('image')->getClientOriginalExtension();
        if ($request->file('image')->move(storage_path('app/public/article_images'), $name)) {

            $article->image = $name;
        }
        $article->save();
        Session::flash('success',' با موفقیت انجام شد');
        return redirect()->route('admin.article');
    }

    public function update(Article $article , ArticleRequest $request)
    {
        $validate = $request->validated();
        $article->update($validate);
        if ($article->title != $validate['title'])
        {
            $article->slug =  $article->replicate()->slug;
        }
        $article->save();
        if ($request->hasFile('image'))
        {
//            unlink(public_path('images/articles-image/'.$article->image));
            $name = 'article-'.$article->id.'.'.$request->file('image')->getClientOriginalExtension();
            if ($request->file('image')->move(storage_path('app/public/article_images'), $name)) {

                $article->image = $name;
                $article->save();
            }
        }
        Session::flash('success',' با موفقیت ویرایش شد');
        return redirect()->route('admin.article');
    }

    public function delete(Article $article)
    {
        unlink(storage_path('/app/public/article_images/' . $article->image));
        $article->delete();
        Session::flash('success',' با موفقیت حذف شد');
        return redirect()->route('admin.article');
    }
}
