<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Portofolio;
use Inertia\Inertia;
class HomeController extends Controller
{
    public function index(){
       $layanan = Layanan::take(3)->get();
        $portofolio = Portofolio::take(4)->get();
        return Inertia::render('Home',[
            'layanan'=> $layanan,
            'portofolio'=> $portofolio,
        ]);
    }
    public function show($lokasi){
$layanan = Layanan::take(3)->get();
        $portofolio = Portofolio::take(4)->get();
   return Inertia::render('Home', [
        'lokasi' => ucfirst($lokasi), 
           'layanan'=> $layanan,
            'portofolio'=> $portofolio,// contoh: "Kebumen"
    ]);
    }
    //
}
