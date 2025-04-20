<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // - Buat variabel nama, jam, waktu
        $nama = 'Altaf'; 
        $jam = date('H');
        $waktu = date('H:i');

        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        if ($jam >= 5 && $jam < 12) {
            $salam = 'Selamat Pagi';
        } elseif ($jam >= 12 && $jam < 15) {
            $salam = 'Selamat Siang';
        } elseif ($jam >= 15 && $jam < 18) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }

        // - Panggil fungsi getTanggal()
        $tanggal = $this->getTanggal();

        // - Kirim data ke view 'dashboard' 
        return view('dashboard', compact('nama', 'jam', 'waktu', 'salam', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
