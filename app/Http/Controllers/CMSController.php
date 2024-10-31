<?php

namespace App\Http\Controllers;

use App\Models\M_CarouselHome;
use App\Models\M_News;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class CMSController extends Controller
{

    public function login()
    {
        return view("cms.auth.sign-in");
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'))->with('success', 'Logout Berhasil');
    }
    public function login_auth(Request $request)
    {
        $username = htmlspecialchars($request->username);
        $password = htmlspecialchars($request->password);

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Username field is required!',
            'password.required' => 'Password field is required',
        ]);

        $infoLogin = [
            'username' => $username,
            'password' => $password
        ];

        if (Auth::attempt($infoLogin)) {
            $dataUser = User::where('username','=',$infoLogin['username'])->first();
            session()->put($infoLogin);
            session()->put('akses', $dataUser->akses_level);
            if($dataUser->akses_level == 'hco'){
                return redirect("/cms-hco")->with('success', 'Login Berhasil!');
            }elseif($dataUser->akses_level == 'qs'){
                return redirect("/cms-qs")->with('success', 'Login Berhasil!');
            }elseif($dataUser->akses_level == 'admin'){
                return redirect("/cms")->with('success', 'Login Berhasil!');
            }
        }else{
            return redirect(route('login'))->with('error', 'Username dan Password tidak cocok!');
        }
    }

    public function master_cms()
    {
        if(session('akses') == 'admin'){
            $dataCarousel = M_CarouselHome::orderBy('created_at','desc')->get();
            $data['dataCarousel'] = $dataCarousel;   
            $dataNews = M_News::orderBy('created_at', 'desc')->get();
            $data['dataNews'] = $dataNews;   
            return view("cms.page.page-admin", $data);
        } else {
            if (session('akses') == 'hco') {
                return redirect(url('/cms-hco'));
            } else {
                return redirect(url('/cms-qs'));
            }
        }
    }
    public function master_cms_hco()
    {
        if(session('akses') == 'hco'){
            $dataCarousel = M_CarouselHome::orderBy('created_at','desc')->get();
            $data['dataCarousel'] = $dataCarousel; 
            return view("cms.page.page-hco", $data);
        }else{
            if(session('akses') == 'admin'){
                return redirect(url('/cms'));
            }else{
                return redirect(url('/cms-qs'));
            }
        }
    }
    public function master_cms_qs()
    {
        if (session('akses') == 'qs') {
            $dataNews = M_News::orderBy('created_at', 'desc')->get();
            $data['dataNews'] = $dataNews;   
            return view("cms.page.page-qs", $data);
        }else{
            if(session('akses') == 'admin'){
                return redirect(url('/cms'));
            }else{
                return redirect(url('/cms-hco'));
            }
        }
    }

    public function add_carousel_home(Request $request)
    {
        $request->validate([
            'carouselhome_img' => 'required',
        ], [
            'carouselhome_img.required' => 'Gambar Wajib diInput',
        ]);

        $carouselhome_img = $request->file('carouselhome_img');
        $ext = $carouselhome_img->extension();
        $name = 'Home-'.date('ymdhis') . "." . $ext;
        $carouselhome_img->move(public_path('assets/img/carousel'), $name);

        $dataSimpan = [
            'carousel_img' => $name,
        ];
        M_CarouselHome::create($dataSimpan);
        return redirect('/cms')->with('success', 'Carousel Berhasil Ditambahkan!');
    }

    public function del_carousel_home($id)
    {
        M_CarouselHome::where('carousel_img', '=', $id)->delete();
        return redirect(url('/cms'));
    }

    public function add_news(Request $request)
    {
        $request->validate([
            'news_img' => 'required',
            'news_caption' => 'required'
        ], [
            'news_img.required' => 'Gambar Wajib diInput',
            'news_caption.required' => 'Caption Wajib diIsi',
        ]);

        $caption = $request->news_caption;
        $news_img = $request->file('news_img');
        $ext = $news_img->extension();
        $name = 'News-' . date('ymdhis') . "." . $ext;
        $news_img->move(public_path('assets/img/carousel'), $name);

        $dataSimpan = [
            'news_img' => $name,
            'caption' => $caption,
        ];
        M_News::create($dataSimpan);
        return redirect('/cms')->with('success', 'News Berhasil Ditambahkan!');
    }
    public function del_news($id)
    {
        M_News::where('news_img', '=', $id)->delete();
        return redirect(url('/cms'));
    }
}
