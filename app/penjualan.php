<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';

     public function buku()
    {
         return $this->belongsTo('App\Buku','buku_id');
    }
    public function kasir()
    {
         return $this->belongsTo('App\Kasir','kasir_id');
    }
}
