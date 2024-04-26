<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Html\Editor\Fields\BelongsTo;

class Barang extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'bareng_id';

    protected $fillable = ['barang_id', 'kategori_id', 'barang_nama', 'harga_beli', 'harga_jual', 'created_at', 'update_at'];

    public function kategori(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'kategori_id');
    }
}
