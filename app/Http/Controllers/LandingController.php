<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Gallery;
use App\Testimoni;
use App\Team;
use App\Mitra;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $tes = Testimoni::all();
        $mitras = Mitra::all();
        $beritas = Berita::all();
        $profiles = Team::all();
        return view('contents.landing.index', compact('tes', 'beritas', 'profiles', 'mitras'));
        
    }

    public function profil()
    {
        $profile = Team::all();
        return view('contents.landing.profile', compact('profile'));;
        
    }

    public function beritas() 
    {
        $beritas = Berita::all();
        return view('contents.landing.beritas', compact('beritas'));;
    }

    public function gallery()
    {
        $galleri = Gallery::all();
        return view('contents.landing.gallery', compact('galleri'));
    }

    public function testimonis()
    {
        $testimonis = Testimoni::all();
        return view('contents.landing.testimonis', compact('testimonis'));
    }

    public function contact()
    {
        return view('contents.landing.contact');
    }
}
