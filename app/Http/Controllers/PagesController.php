<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\City;
use App\Models\Country;
use App\Models\Estate;
use App\Models\Zone;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function deactivate()
    {
        return view('pages.deactivate');
    }

    public function index()
    {
        $estates = Estate::latest()->take(6)->get();
        return view('pages.index' , compact('estates'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function articles()
    {
        $articles = Article::with('category')->latest()->paginate(6);
        return view('pages.articles' , compact('articles'));
    }

    public function single_article(Article $article)
    {
        return view('pages.single_article' , compact('article'));
    }

    public function estate()
    {
        $estates = Estate::latest()->paginate(12);
        $zones = Zone::where('country_id' , 101)->select(['id' , 'name'])->get();
        return view('pages.estate' , compact('estates' , 'zones'));
    }

    public function agency_register()
    {
        $zones = Zone::where('country_id' , 101)->select(['id' , 'name'])->get();
        return view('pages.register_agency' , compact('zones'));
    }

    public function single_estate(Estate $estate)
    {
        return view('pages.single_estate' , compact('estate'));
    }




    public function get_zone($id)
    {
        $c_id = Country::where('id' , $id)->first()->id;
        $zones = Zone::where('country_id' , $c_id)->select(['id' , 'name'])->get();
        return response()->json(['data' => $zones]);
    }

    public function get_city($id)
    {
        $z_id = Zone::where('id' , $id)->first()->id;
        $cities = City::where('zone_id' , $z_id)->select(['id' , 'name'])->get();

        return response()->json(['data' => $cities]);
    }

    public function search_estate(Request $request)
    {
        $query = Estate::where('status' , 0);
        if ($request->has('zone_id'))
        {
            $query->where('zone_id' , $request->zone_id);
        }
        if ($request->has('city_id'))
        {
            $query->where('city_id' , $request->city_id);
        }
        if ($request->has('type_id'))
        {
            $query->where('type_id' , $request->type_id);
        }
        if ($request->has('bedrooms'))
        {
            $query->where('bedrooms' , $request->bedrooms);
        }
        if ($request->has('wc'))
        {
            $query->where('wc' , $request->wc);
        }
        if ($request->area_min != null && $request->area_max != null)
        {
            $query->whereBetween('area' , [$request->area_min , $request->area_max]);
        }
        if ($request->has('pet'))
        {
            $query->where('pet' , $request->pet);
        }
        $estates = $query->paginate(12);

        $zones = Zone::where('country_id' , 101)->select(['id' , 'name'])->get();
        return view('pages.estate' , compact('estates' , 'zones'));


    }
}
