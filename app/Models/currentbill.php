<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class currentbill extends Model
{
    use HasFactory;
    protected $primarykey='flatnumber';
    protected $keytype='string';
    public $timestamps=false;

}
