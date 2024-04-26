<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    protected $table = 'm_level'; // Nama tabel yang digunakan oleh model ini

    protected $primaryKey = 'level_id'; // Nama primary key dari tabel yang digunakan oleh model ini

    protected $fillable = [
        'level_kode', // Kolom yang dapat diisi secara massal
        'level_nama',
    ];

    // Jika ada relasi dengan model lain, Anda dapat mendefinisikannya di sini
    public function users(): HasMany
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}
