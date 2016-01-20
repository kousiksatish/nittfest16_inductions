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
        $oc->preference = $request->preference;
    	$oc->ques1 = $request->ques1;
    	$oc->ques2 = $request->ques2;
    	$oc->ques3 = $request->ques3;
    	$oc->ques4 = $request->ques4;
    	$oc->ques5 = $request->ques5;
    	$oc->ques6 = $request->ques6;
        $res = $request->get('g-recaptcha-response');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "secret=6Lfv4hUTAAAAAMAmpU74Xrg5tMo8Cfdq9Vs_RQ78&response=$res");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $api_res = curl_exec ($ch);

        curl_close ($ch);
        $response_arr = json_decode($api_res, true);

        if(!$response_arr['success'])
            return view('oc', array('message'=>'Captcha verification failed...'));

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
        $oc->preference = $request->preference;
        $oc->ques1 = $request->ques1;
        $oc->ques2 = $request->ques2;
        $oc->ques3 = $request->ques3;
        $oc->ques4 = $request->ques4;
        $oc->ques5 = $request->ques5;
        $res = $request->get('g-recaptcha-response');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "secret=6Lfv4hUTAAAAAMAmpU74Xrg5tMo8Cfdq9Vs_RQ78&response=$res");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $api_res = curl_exec ($ch);

        curl_close ($ch);
        $response_arr = json_decode($api_res, true);

        if(!$response_arr['success'])
            return view('oc', array('message'=>'Captcha verification failed...'));

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
        $oc->preference = $request->preference;
        $oc->ques1 = $request->ques1;
        $oc->ques2 = $request->ques2;
        $oc->ques3 = $request->ques3;
        $oc->ques4 = $request->ques4;
        $oc->ques5 = $request->ques5;
        $oc->ques6 = $request->ques6;
        $oc->ques7 = $request->ques7;
        $res = $request->get('g-recaptcha-response');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "secret=6Lfv4hUTAAAAAMAmpU74Xrg5tMo8Cfdq9Vs_RQ78&response=$res");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $api_res = curl_exec ($ch);

        curl_close ($ch);
        $response_arr = json_decode($api_res, true);

        if(!$response_arr['success'])
            return view('oc', array('message'=>'Captcha verification failed...'));
        $oc->save();

        return view('finish', array("team"=>"Public Relations", "name"=>$oc->name));
    }


}
