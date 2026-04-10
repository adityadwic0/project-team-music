<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeavyController extends Controller
{
    public function index()
    {
        // 1. CPU STRESS: Hashing super berat (Cost 12)
        // Kita paksa CPU mikir keras selama 2 detik
        $start = microtime(true);
        while (microtime(true) - $start < 2.0) { 
            password_hash("beban_rakyat", PASSWORD_BCRYPT, ['cost' => 12]);
        }

        // 2. RAM STRESS: Alokasi Memory Agresif
        ini_set('memory_limit', '512M');
        $storage = [];
        // Kita isi RAM sampai sekitar 400MB+
        for ($i = 0; $i < 45; $i++) {
            $storage[] = str_repeat(bin2hex(random_bytes(1024)), 5000); 
        }

        $kasusKorupsi = [
            ['nama' => 'Syahrul Yasin Limpo', 'nominal' => 'Rp 44,5 M', 'status' => '🔴 KRITIS'],
            ['nama' => 'Harvey Moeis (Timah)', 'nominal' => 'Rp 300 T', 'status' => '🔴 OVERLOAD'],
            ['nama' => 'Setya Novanto (E-KTP)', 'nominal' => 'Rp 2,3 T', 'status' => '🔴 LAG'],
            ['nama' => 'Rafael Alun', 'nominal' => 'Rp 53,7 M', 'status' => '🔴 MEMORY LEAK'],
        ];

        // Ambil pemakaian memori saat ini dalam MB
        $mem_usage = round(memory_get_usage(true) / 1024 / 1024, 2);

        // BALIKKAN KE VIEW (Pastikan variabel $mem_usage ada di sini!)
        return view('landing_heavy', compact('kasusKorupsi', 'mem_usage'));
    }
}