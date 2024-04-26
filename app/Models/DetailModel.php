<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetailModel extends Model
{
    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';

    protected $fillable = ['penjualan_id','barang_id','harga','jumlah'];

    public function penjualan() : HasMany
    {
        return $this->hasMany(TransaksiModel::class,'penjualan_id','penjualan_id');
    }
    public function barang() : HasMany
    {
        return $this->hasMany(BarangModel::class,'barang_id','barang_id');
    }
}