<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'

        $mahasiswa = (Object)[
            "nama" =>"Ahmad faiz althaf nur",
            "nim" => "102022300377",
            "email" => "ahmadfaizallthaf.com",
            "jurusan" => "S1 Sistem Informasi",
            "fakultas" => "Fakultas Rekayasa Industri",
            "foto" => asset('images/profil.jpg')
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
    
}
