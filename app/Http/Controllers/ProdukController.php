<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Produk;
use App\Models\transaction;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Nette\Schema\Helpers;

class ProdukController extends Controller
{
    //Fungsi dashboard menampilkan view dashboard
    public function dashboard(){
        return view('dashboard');
    }
    
    public function index(Request $request){
        // Ambil semua data produk
        $data = Produk::all();
        $data = new Produk;

        // Lakukan pencarian jika query pencarian ada
        if ($request->has('search')) {
            $search = $request->input('search');
            $data->where('nama_produk', 'like', "%$search%")
            ->orWhere('detail', 'like', "%$search%");
        }
    
        // Ambil data setelah filter atau tanpa filter jika tidak ada pencarian
        $data = $data->get();
    
        return view('produk.index', compact('data', 'request'));
    }
    
    //Fungsi create menampilkan form untuk membuat produk baru.
    public function create(){
        return view('produk.create');
    }

    //Fungsi store menyimpan data produk baru yang divalidasi.
    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'detail' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Mengambil file yang diunggah
        $image = $request->file('image');
        // Mendapatkan nama file asli dari input pengguna
        $originalName = $image->getClientOriginalName();
        // Membersihkan nama file dari karakter yang tidak diinginkan
        $cleanedName = preg_replace("/[^A-Za-z0-9\\-\\.]/", '', $originalName);
        // Menyimpan gambar dengan nama asli yang telah dibersihkan
        $imagePath = $image->storeAs('produk', $cleanedName, 'public');
        
        // Periksa apakah penyimpanan file berhasil
        if (!$imagePath) {
            return redirect()->back()->withInput()->withErrors(['image' => 'Failed to upload image.']);
        }
        
        $idProduk = Helper::IDGenerator(new Produk(), 'idProduk', 3, 'PRD');
    
        Produk::create([
            'idProduk' => $idProduk,
            'nama_produk' => $validatedData['nama_produk'],
            'image' => $imagePath,
            'detail' => $validatedData['detail'],
            'harga' => $validatedData['harga']
        ]);
    
        return redirect()->route('produk.index');
    }
    
    public function update(Request $request, $id) {
        // Temukan data produk berdasarkan ID
        $produk = Produk::findOrFail($id);
    
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string',
            'detail' => 'required|string',
            'harga' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048', // Ubah menjadi nullable agar tidak wajib diubah
        ]);
    
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan gambar ke penyimpanan yang ditentukan
            $filename = date('Y-m-d') . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('produk', $filename, 'public'); // Simpan file ke disk 'public'
    
            // Hapus gambar lama jika ada dan simpan gambar baru
            if ($produk->image) {
                Storage::disk('public')->delete($produk->image); // Hapus gambar lama dari disk 'public'
            }
            $produk->image = $path; // Simpan jalur gambar ke basis data
        }
    
        // Update data produk
        $produk->nama_produk = $request->nama_produk;
        $produk->detail = $request->detail;
        $produk->harga = $request->harga;
    
        // Simpan perubahan data
        $produk->save();
    
        // Redirect ke halaman produk index
        return redirect()->route('produk.index');
    }         

    public function edit($id) {
        // Temukan data produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        
        // Tampilkan view formulir edit dengan data produk yang ditemukan
        return view('produk.edit', compact('produk'));
    }

    public function delete(Request $request,$id){
        $data = produk::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('produk.index');
    }

    public function datatransaksi(){

        $data = transaction::get();
    
        return view('transaksi.datatransaksi', compact('data'));
    }

}