<?php
namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];
        $page = (object) [
            'title' => 'Daftar Kategori yang terdaftar dalam sistem',
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

     public function list(Request $request)
     {
        $Kategoris = KategoriModel::select('kategori_kode', 'kategori_nama', 'kategori_id');

        $Kategoris = $Kategoris->get(); // Panggil get() setelah menerapkan filter
        return DataTables::of($Kategoris)
        ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
        ->addColumn('aksi', function ($kategori) {
            $btn = '<a href="'.url('/kategori/' . $kategori->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
            $btn .= '<a href="'.url('/kategori/' . $kategori->kategori_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
            $btn .= '<form class="d-inline-block" method="POST" action="'.url('/kategori/'.$kategori->kategori_id).'">'
                    .csrf_field() .method_field('DELETE') . 
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>'; 
            return $btn;})
        ->rawColumns(['aksi'])
        ->make(true);
     }
    
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kategori',
            'list' => ['Home', 'Kategori', 'Tambah']
        ];
        $page = (object) [
            'title' => 'Tambah Kategori Baru',
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    Public function store(Request $request)
    {
        $request->validate([
            'kategori_kode'  => 'required|string|min:3|unique:m_kategori,kategori_kode',
            'kategori_nama'  => 'required|string|max:100'
        ]);
        KategoriModel::create([
            'kategori_kode'  => $request->kategori_kode,
            'kategori_nama'  => $request->kategori_nama
        ]);
        return redirect('/kategori')->with('success','Data berhasil disimpan');
    }

    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);
        $breadcrumb = (object) [
            'title' => 'Detail kategori',
            'list' => ['Home', 'Kategori', 'Detail']
        ];
        $page = (object) [
            'title' => 'Detail Kategori',
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page,'kategori' => $kategori,'activeMenu' => $activeMenu]);
    }

    public function edit(string $id)
    {
        $kategori = KategoriModel::find($id);
        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list' => ['Home', 'Kategori', 'Edit']
        ];
        $page = (object) [
            'title' => 'Edit Kategori'
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page,'kategori' => $kategori,'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_kode'  => 'required|string|min:3|unique:m_kategori,kategori_kode, '.$id.',kategori_id',
            'kategori_nama'  => 'required|string|max:100'
        ]);

        KategoriModel::find($id)->update([
            'kategori_kode'  => $request->kategori_kode,
            'kategori_nama'  => $request->kategori_nama
        ]);
        return redirect('/kategori')->with('success','Data kategori berhasil diubah');
    }


    //Menghapus data
    public function destroy(string $id)
    {
        $check = KategoriModel::find($id);
        if(!$check){
            return redirect('/kategori')->with('error','Data kategori tidak ditemukan');
        }
        try{
            KategoriModel::destroy($id);
            return redirect('/kategori')->with('succes','Data berhasil dihapus');
        }catch(\Illuminate\Database\QueryException $e){
            //jika terjadi error, redirect kembali ke halaman dengan membawa pesan error
            return redirect('/kategori')->with('error','Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}