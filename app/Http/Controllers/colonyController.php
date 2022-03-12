<?php

namespace App\Http\Controllers;
use App\Helpers\helper;
use App\Helpers\autoColony;
use App\Models\colony;
use App\Models\building;

use Illuminate\Http\Request;

class colonyController extends Controller
{
    //
    public function dashboardColony()
    {
        return view('colony.colonyview');
    }
    public function addcolony()
    {
        $bcode= helper::IDGenerator(new building,'buildingCode',4,'BLD');
        $ccode= autoColony::ColonyGenerator(new colony,'colonyCode',3,'COL');


        return view('colony.addcolony')
        ->with('bbcode',$bcode)
        ->with('ccode',$ccode);
        
    }
    

}
