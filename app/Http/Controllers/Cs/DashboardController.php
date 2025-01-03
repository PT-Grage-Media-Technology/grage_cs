<?php

namespace App\Http\Controllers\Cs;

use App\Models\Produk;
use App\Models\RekapCs;
use App\Models\Perusahaan;
use App\Models\RekapProduk;
use App\Models\NotifikasiCs;
use App\Models\RekapCsTotal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function indexCs()
    {
        $cs = Auth::guard('cs')->user();
        $jabatan = $cs->jabatan;
        $produkList = Produk::where('karyawan_id', $cs->id_karyawan)->get();
        $perusahaan = Perusahaan::first();

        $kemarin = Carbon::yesterday();

        // Update dan ambil notifikasi yang diupdate
        $updatedNotifications = NotifikasiCs::whereDate('created_at', $kemarin)
            ->update(['is_read' => 1]);

        // dd($updatedNotifications);
        // Ambil notifikasi dari database (contoh menggunakan model Notification)
        // $notifications = NotifikasiCs::latest()->take(5)->get();
        $notifications = NotifikasiCs::where('is_read', '!=', 1)
                ->where('id_karyawan', $cs->id_karyawan) // Sesuaikan dengan kolom relasi jika ada
                ->latest()
                ->take(5)
                ->get();

        // Kirim notifikasi ke view
        // return view('cs.layouts.main', compact('notifications'));
        // dd($cs->id_karyawan);

        return view('cs.layouts.index', compact('cs', 'jabatan', 'produkList', 'perusahaan','notifications'));
    }

    public function getProduct($id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            return response()->json($produk);
        }

        return response()->json(['error' => 'Produk tidak ditemukan.'], 404);
    }

    public function storeRekap(Request $request)
{
    // $rekapCsId = Auth::guard('cs')->user()->id_karyawan;
    $cs = Auth::guard('cs')->user();

    $rekapCsId = RekapCs::where('karyawan_id', $cs->id_karyawan)
                        ->latest('id_rekap_cs')
                        ->value('id_rekap_cs');

    if (!$rekapCsId) {
        return redirect()->back()->with('error', 'Tidak ditemukan data rekap CS untuk karyawan ini');
    }

    $jumlahProduk = $request->input('jumlah', []);
    $totalBotol = array_sum($jumlahProduk);

    $rekapCsTotal = new RekapCsTotal([
        'rekap_cs_id' => $rekapCsId,
        'total_botol' => $totalBotol,
    ]);
    $rekapCsTotal->save();

    foreach ($jumlahProduk as $produkId => $jumlah) {
        if ($jumlah > 0) {
            RekapProduk::create([
                'rekap_cs_id' => $rekapCsId,
                'produk_id' => $produkId,
                'total_produk' => $jumlah,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Data rekap produk berhasil disimpan.');
}


}
