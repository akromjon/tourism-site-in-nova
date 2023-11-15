<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Tag;
use App\Models\Tour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $title='Bosh Sahifa';
        return view('pages.home',compact('title'));
    }

    public function tag_show(string $tag){

        $title = $tag;

        $tours = Tour::whereHas('tags', function ($query) use ($tag) {
            $query->where('tag', $tag);
        })->get();

        $tag=Tag::where('tag',$tag)->first();

        return view('pages.tag',compact('title','tours','tag'));
    }

    public function contact()
    {
        $title='Aloqa';
        return view('pages.contact',compact('title'));
    }

    public function tours()
    {
        $title='Turlar';
        $tours = Tour::where('status',1)->get();
        return view('pages.tours',compact('title','tours'));
    }

    public function tour_show(string $slug)
    {

        $tour = Tour::where('slug',$slug)->with('tags')->first();

        if($tour == null){
            abort(404);
        }

        $title = $tour->title;

        return view('pages.tours-show',compact('title','tour'));
    }

    public function gallery()
    {
        $title='Gallereya';
        $galleries = Gallery::all();
        return view('pages.gallery',compact('title','galleries'));
    }
}
