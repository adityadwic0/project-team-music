<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StressTestController extends Controller
{
    public function index()
    {
        // Target size (MB)
        $sizeInMB = 250;

        // Convert ke bytes
        $bytes = $sizeInMB * 1024 * 1024;

        // Generate string besar (random)
        $largeString = str_repeat(bin2hex(random_bytes(1024)), $bytes / 2048);

        // Simulasi CPU load tambahan
        $hash = '';
        for ($i = 0; $i < 5000; $i++) {
            $hash = hash('sha256', $largeString . $i);
        }

        return view('stress-test', [
            'data' => $largeString,
            'hash' => $hash,
            'size' => $sizeInMB
        ]);
    }
}

