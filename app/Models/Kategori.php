<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kategori extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = "kategori";
    // protected $fillable = [nama_kategori];
    protected $guarded = ['id'];
=======
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ['nama_kategori'];
    protected $guarded = ['id'];
    //
>>>>>>> 565bb27 (First commit)
}
