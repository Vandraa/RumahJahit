<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Pagination\Paginator;
use App\Models\Produk;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard'); 
    }

    public function landing(){
        return view('landing'); 
    }

    public function pesan(){
        return view('pesan'); 
    }

    public function contact(){
        return view('contact'); 
    }

    public function kemeja(){
        $data = produk::paginate(100);
        return view('kemeja', compact('data'));
    }

    public function transaksi($id){
        $data = Produk::find($id);

        return view('transaksi', compact('data'));
    }

    public function transaksistore(Request $request){
        $validator = Validator::make($request->all(),[
            'metode'                 => 'required',
            'alamat'                 => 'required',
            'notelp'                 => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $idTransaksi = Helper::IDGenerator(new Transaction(), 'idTransaksi', 3, 'TRNSP');

        $data = [
            'idTransaksi'   => $idTransaksi,
            'name'          => $request->name,
            'idProduk'      => $request->idProduk,
            'image'         => $request->image,
            'size'          => $request->size,
            'name_produk'   => $request->nameproduk,
            'jumlah'        => $request->jumlah,
            'harga'         => $request->harga,
            'metode'        => $request->metode,
            'alamat'        => $request->alamat,
            'notelp'        => $request->notelp,
        ];

        Transaction::create($data);

        return redirect()->route('kemeja');
    }

    public function index(Request $request){
        $data = new User;

        if($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%'.$request->get('search').'%')
                ->orWhere('email', 'LIKE', '%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('index', compact('data', 'request'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'email'     => 'required|email',
            'nama'      => 'required',
            'password'  => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request,$id){
        $data = User::find($id);

        return view('edit',compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'email'     => 'required|email',
            'nama'      => 'required',
            'password'  => 'nullable',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('index');
    }

    public function delete(Request $request,$id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('index');
    }
}
