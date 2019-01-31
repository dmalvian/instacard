<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey ='id';
    public $autoincrement = true;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transtype', 'waktu', 'refno' , 'formtag', 'totag','nominal'
    ];
}
