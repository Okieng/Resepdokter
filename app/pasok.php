<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    protected $table = 'pasok';
    protected $primaryKey = 'id_pasok';

    public function buku()
    {
         return $this->belongsTo('App\Buku','buku_id');
    }
    public function distributor()
    {
         return $this->belongsTo('App\Distributor','distributor_id');
    }
}

