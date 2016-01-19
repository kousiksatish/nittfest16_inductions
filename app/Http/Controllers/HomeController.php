<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AmbienceTeam as AmbienceTeam;
use App\OcTeam as OcTeam;
use App\PrTeam as PrTeam;
class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function oc()
    {
    	return view('oc');
    }

    public function ambience()
    {
    	return view('ambience');
    }

    public function pr()
    {
        return view('pr');
    }

    public function oc_store(Request $request)
    {
    	$oc = new OcTeam();
    	$oc->name = $request->name;
    	$oc->dept = $request->dept;
    	$oc->rollno = $request->rollno;
    	$oc->phoneno = $request->phoneno;
    	$oc->ques1 = $request->ques1;
    	$oc->ques2 = $request->ques2;
    	$oc->ques3 = $request->ques3;
    	$oc->ques4 = $request->ques4;
    	$oc->ques5 = $request->ques5;
    	$oc->ques6 = $request->ques6;
    	$oc->save();

    	return view('finish', array("team"=>"Organising Committee", "name"=>$oc->name));

    }

    public function ambience_store(Request $request)
    {
    	$oc = new AmbienceTeam();
    	$oc->name = $request->name;
    	$oc->dept = $request->dept;
    	$oc->rollno = $request->rollno;
    	$oc->phoneno = $request->phoneno;
    	$oc->ques1 = $request->ques1;
    	$oc->ques2 = $request->ques2;
    	$oc->ques3 = $request->ques3;
    	$oc->ques4 = $request->ques4;
    	$oc->ques5 = $request->ques5;
    	$oc->save();

    	return view('finish', array("team"=>"Ambience", "name"=>$oc->name));
    }

    public function pr_store(Request $request)
    {
        $oc = new PrTeam();
        $oc->name = $request->name;
        $oc->dept = $request->dept;
        $oc->rollno = $request->rollno;
        $oc->phoneno = $request->phoneno;
        $oc->ques1 = $request->ques1;
        $oc->ques2 = $request->ques2;
        $oc->ques3 = $request->ques3;
        $oc->ques4 = $request->ques4;
        $oc->ques5 = $request->ques5;
        $oc->ques6 = $request->ques6;
        $oc->ques7 = $request->ques7;
        $oc->save();

        return view('finish', array("team"=>"Public Relations", "name"=>$oc->name));
    }


}
