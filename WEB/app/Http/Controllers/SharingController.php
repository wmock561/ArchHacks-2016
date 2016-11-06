<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function shareSurvey(Request $request){
    	$user = $request->user;
    	$survey = $user->surveys()->latest()->first();
    	$shareTo = User::where('email', '=', $request->input('email'))->first();
    	if(!$shareTo->exists){
    		return response('', 404);
    	}
    	$survey->users()->attach($shareTo);
    	return response('', 200);
    }

    public function revokeAccess(Request $request){
    	dd($request);
    }
}
