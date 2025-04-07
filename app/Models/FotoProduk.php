<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 565bb27 (First commit)
use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
<<<<<<< HEAD
    public $timestamps = true;
    protected $table = 'foto_produk';
    protected $guarded = ['id'];
}
=======
    protected $table = 'foto_produk';
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->belongsTo(Product::class, 'produk_id'); // Relasi balik ke produk
    }
}

>>>>>>> 565bb27 (First commit)
