<?php

namespace App\Http\Controllers;

use App\Models\M_CarouselHome;
use App\Models\M_News;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function home()
    {
        $dataCarousel = M_CarouselHome::orderBy('created_at', 'desc')->get();
        $data['dataCarousel'] = $dataCarousel;
        $dataNews = M_News::orderBy('created_at', 'desc')->get();
        $data['dataNews'] = $dataNews;
        return view('page.homepage', $data);
    }
    public function detail_news( $id)
    {
        $data = M_News::where('id', '=', $id)->first();
        return response()->json([
            'success' => true,
            'message' => 'Detail Data News',
            'data' => $data
        ]);
    }
}
