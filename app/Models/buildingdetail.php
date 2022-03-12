<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buildingdetail extends Model
{
    use HasFactory;
    protected $primarykey='buildingCode';
    protected $keytype='string';
    public $timestamps=false;

}
