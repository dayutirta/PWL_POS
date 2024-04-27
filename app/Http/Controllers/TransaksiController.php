<?php
namespace App\Http\Controllers;

use App\Models\DetailModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\StokModel;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransaksiController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Transaksi',
            'list' => ['Home', 'Transaksi']
        ];
        $page = (object) [
            'title' => 'Daftar transaksi yang terdaftar dalam sistem',
        ];
        $activeMenu = 'transaksi'; 
        $detail = DetailModel::all();
        $barang = BarangModel::all();
        $user = UserModel::all();
        return view('transaksi.index', ['breadcrumb' => $breadcrumb, 'page' => $page,'detail'=> $detail,'barang'=>$barang,'user'=>$user, 'activeMenu' => $activeMenu]);
    }
     
    public function list(Request $request)
    {
        $transaksis = TransaksiModel::select('penjualan_id','user_id','pembeli','penjualan_kode')
        ->with('user')
        ->with('detail');

        if($request->user_id){
            $transaksis->where('user_id', $request->user_id);
        }
        $transaksis = $transaksis->get(); 
        return DataTables::of($transaksis)
        ->addIndexColumn() 
        ->addColumn('aksi', function ($transaksi) {
            $btn = '<a href="'.url('/transaksi/' . $transaksi->penjualan_id).'" class="btn btn-info btn-sm">Detail</a> ';
            return $btn;})
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Transaksi',
            'list' => ['Home', 'Transaksi', 'Tambah']
        ];
        $page = (object) [
            'title' => 'Tambah Transaksi Baru',
        ];
        $detail = DetailModel::all();
        $user = UserModel::all();
        $barang = BarangModel::all();
        $activeMenu = 'transaksi';
        return view('transaksi.create', ['breadcrumb' => $breadcrumb, 'page' => $page,'detail'=>$detail ,'barang'=>$barang,'user'=>$user,'activeMenu' => $activeMenu]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'penjualan_kode'    => 'required|string',
            'user_id'           => 'required|string',
            'pembeli'           => 'required|string',
            'penjualan_tanggal' => 'required|date',
            'barang_id'         => 'required|integer',
            'jumlah'            => 'required|integer'
        ]);
        $penjualan = TransaksiModel::create([
            'penjualan_kode'     => $request->penjualan_kode,
            'user_id'            => $request->user_id,
            'pembeli'            => $request->pembeli,  
            'penjualan_tanggal'  => $request->penjualan_tanggal
        ]);
    
        $barang = BarangModel::findOrFail($request->barang_id);
        $harga_jual = $barang->harga_jual;
        $jumlah = $request->jumlah;
        $total_harga = $harga_jual * $jumlah;
        $penjualan_id = $penjualan->penjualan_id;

        DetailModel::create([
            'penjualan_id' => $penjualan_id,
            'barang_id'    => $request->barang_id,
            'jumlah'       => $request->jumlah,
            'harga'        => $total_harga
        ]);
        // Ambil stok saat ini dari database berdasarkan barang_id
        $stok = StokModel::findOrFail($request->barang_id);
    
        // Ambil jumlah stok yang ada dan jumlah yang akan ditambahkan
        $stok_jumlah = $stok->stok_jumlah;
        $jumlah_tambah = $request->jumlah;
    
        // Hitung total stok baru setelah ditambahkan
        $total_stok_baru = $stok_jumlah - $jumlah_tambah;
    
        // Update stok di database dengan nilai yang baru
        $stok->update(['stok_jumlah' => $total_stok_baru]);
    
        return redirect('/transaksi')->with('success', 'Data transaksi berhasil disimpan');
    }
    

    public function show(string $id)
    {

        $transaksi = TransaksiModel::with('detail')->find($id);
      
        $detail = DetailModel::with('barang')->where('penjualan_id', $id)->get();
        
        $breadcrumb = (object) [
            'title' => 'Detail Transaksi',
            'list' => ['Home', 'Transaksi', 'Detail']
        ];
        $page = (object) [
            'title' => 'Detail Transaksi',
        ];
        $activeMenu = 'transaksi'; 
        return view('transaksi.show', ['breadcrumb' => $breadcrumb,'detail'=>$detail,'page' => $page,'transaksi' => $transaksi,'activeMenu' => $activeMenu]);
    }
}