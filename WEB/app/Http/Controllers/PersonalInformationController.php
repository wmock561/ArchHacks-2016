<?php

namespace App\Http\Controllers;

use App\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function store(Request $request){
    	$pf = new PersonalInformation($request->all());
    	$request->user->personalInformation()->save($pf);

    	return response('', 200);
    }
}
