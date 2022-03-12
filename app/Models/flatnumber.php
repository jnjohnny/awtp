<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\buildingdetail;

class flatnumber extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'flatNumber';
    public function buildingdetail(){
        return $this->belongsTo(buildingdetail::class,'buildingCode'); // maps student tables d_id with departments id
        //return $this->belongsTo(Department::class,'d_id','another column');
    }
}
