<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Database;
use App\Helpers\helper;
use App\Models\building;
use App\Models\buildingdetail;
use App\Models\currentbill;
use PDF;

class sbController extends Controller
{
    //
    public function Dashboard()
    {
        return view('single.dashboard');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('homepage');
    }

    public function addbuild()
    {
        $bcode= helper::IDGenerator(new building,'buildingCode',4,'BLD');

        return view('single.addbuilding')
        ->with('bbcode',$bcode);
    }

    public function buildingSubmit(Request $req)
    {
        $rt = new building();
$rt->username = $req->username;
$rt->buildingName = $req->bname;
$rt->buildingCode = $req->bcode;
$rt->colonyCode = $req->ccode;
$rt->save();

return redirect()->route('dbb');
    }

    public function addDB()
    {
        return view('single.addDetails');
    }

    public function BDSubmit(Request $req)
    {
        $rt = new buildingdetail();
$rt->buildingCode = $req->bcode;
$rt->floorDetails = $req->floor;
$rt->flatNo = $req->flat;
$rt->save();
        
return redirect()->route('dbb');
    }

    public function current()
    {
        return view('single.currentbill');
    }

    public function currentSubmit(Request $req)
    {
        $rt = new currentbill();
$rt->buildingCode = $req->bcode;
$rt->flatNumber = $req->flat;
$rt->unit = $req->unit;
$rt->dstart = $req->dates;
$rt->unitAmount = $req->ua;

$rt->totalAmount = $req->ta;
$rt->status = $req->status;
$rt->save();
        
return redirect()->route('dbb');
      }


      public function list()
      {
        $build = building:: all();
          return view('single.list')
          ->with('build',$build);
               
       }

      
      public function details(Request $req)
      {
          $b=building::where('buildingCode',$req->buildingCode)->first();
          
          return view('single.detailslist')
          ->with('details',$b);
      }

      public function searchl(Request $req)
      {
             
        return view('single.searchl');      
      
        }

      public function searchlist(Request $req)
      {
             
        $build = building::where('buildingCode','=',$req->bcode)->first();
        return view('single.searchlist')
        ->with('build',$build);
        
      
        }

        public function printPdf()
        {
            $build = building::all();
            $pdf=PDF::loadview('single.list',compact('build'));
            return $pdf->download('buildinglist.pdf');
        }


}
