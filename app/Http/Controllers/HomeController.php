<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Portofolio;
use Inertia\Inertia;
class HomeController extends Controller
{
    public function index(){
        $layanan = Layanan::get();
        $portofolio = Portofolio::get();
        return Inertia::render('Home',[
            'layanan'=> $layanan,
            'portofolio'=> $portofolio,
        ]);
    }
    public function show($lokasi){
          $layanan = Layanan::get();
        $portofolio = Portofolio::get();
   return Inertia::render('Home', [
        'lokasi' => ucfirst($lokasi), 
           'layanan'=> $layanan,
            'portofolio'=> $portofolio,// contoh: "Kebumen"
    ]);
    }
    //
}
