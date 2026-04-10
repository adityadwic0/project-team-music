<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HeavyController extends Controller
{
    public function index()
    {
        // 1. CPU Stress: Kalkulasi Fibonacci secara rekursif (Berat!)
        $this->calculateFibonacci(30);

        // 2. Memory Stress: Membuat array raksasa di dalam RAM
        $memoryHog = [];
        for ($i = 0; $i < 500000; $i++) {
            $memoryHog[] = "Data Korupsi Pejabat Ke-" . $i . " - Lorem Ipsum Dolor Sit Amet";
        }

        // 3. Disk I/O Stress: Logging berlebihan
        Log::info("User mengakses data kasus korupsi pada " . now());

        $kasusKorupsi = [
            ['nama' => 'Kasus Bansos', 'aktor' => 'Eks Mensos', 'nominal' => 'Rp 32,4 Miliar'],
            ['nama' => 'Kasus Timah', 'aktor' => 'Harvey Moeis, dkk', 'nominal' => 'Rp 300 Triliun'],
            ['nama' => 'Kasus BLBI', 'aktor' => 'Grup Sjamsul Nursalim', 'nominal' => 'Rp 4,58 Triliun'],
            ['nama' => 'Kasus Jiwasraya', 'aktor' => 'Benny Tjokro, dkk', 'nominal' => 'Rp 16,8 Triliun'],
        ];

        return view('landing_heavy', compact('kasusKorupsi'));
    }

    private function calculateFibonacci($n) {
        if ($n <= 1) return $n;
        return $this->calculateFibonacci($n - 1) + $this->calculateFibonacci($n - 2);
    }
}