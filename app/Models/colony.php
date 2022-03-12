<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colony extends Model
{
    use HasFactory;
    protected $table='colonys';
    protected $primarykey='colonyCode';
    protected $keytype='string';
    public $timestamps=false;

}
