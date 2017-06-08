<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function percobaan ()
    {
    	$a = "rika";
    	return "Nama Saya Adalah ".$a;
    }


   //passing data show view
   public function percobaan2()
   {
   	return view('about');
   }

   //passing data variable to view
   public function percobaan3()
   {
   	$a = "Rika";
   	return view('latihan.saya', compact('a'));
   }

    public function percobaan4()
   {
   	$a = "Rika";
    $b = "XI RPL3";
   	$c = "SMK Assalaam";
   	return view('latihan.sk', compact('a','b','c'));
   }

     public function percobaan5()
   {
   	$a = 1;
    $b = 2;
   	$c = 3;
   	return view('latihan.seleksi', compact('a','b','c'));
   }

     public function percobaan6($id)
   {
  	$buah = ['Mangga','Jeruk','APel','Anggur'];
  	$makhlukhidup = ['Manusia','Hewan','Tumbuhan'];
  	$komputer = ['Sofware','Cpu','keyboard'];
  	dd($id);
   	return view('latihan.buah', compact('buah','makhlukhidup','komputer'));
   }
}