<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_relasi extends Model
{
    use HasFactory;
    protected $table = "kategotibuku_relasi";
    protected $primaryKey = "kategoribukuid";
    public $incrementing=false;
   
    protected $guarded=[];
}
