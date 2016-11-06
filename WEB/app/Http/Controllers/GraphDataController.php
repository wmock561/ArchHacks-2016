<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \stdClass;

class GraphDataController extends Controller
{
    public function locationChart(){
    	$user = Auth::user();
    	$count = DB::table('surveys')
    			->where('surveys.user_id', '=', $user->id)
    			->join('question1_answers', 'question1_answers.survey_id', '=', 'surveys.id')
    			->count();
    	$locations = DB::table('surveys')
    			->select(DB::raw('count(*) as count, answer'))
    			->where('surveys.user_id', '=', $user->id)
    			->join('question1_answers', 'question1_answers.survey_id', '=', 'surveys.id')
    			->groupBy('answer')
    			->get();
    	$rejected = $locations->filter(function($value, $key){
    		return $value->count == 1;
    	});
    	$other = count($rejected);
    	$good = $locations->filter(function($value, $key){
    		return $value->count > 1;
    	});
        $good = array_values($good->toArray());
    	$array = array();
    	//$good[] = $other;
        $array["other"] = $other;
    	$array["data"] = $good;
    	$array["count"] = $count;
    	return view('vis2', compact('array'));
    }

    public function triggerChart(){
    	$user = Auth::user();
    	$count = DB::table('surveys')
    			->where('surveys.user_id', '=', $user->id)
    			->join('question2_answers', 'question2_answers.survey_id', '=', 'surveys.id')
    			->count();
    	$locations = DB::table('surveys')
    			->select(DB::raw('count(*) as count, answer'))
    			->where('surveys.user_id', '=', $user->id)
    			->join('question2_answers', 'question2_answers.survey_id', '=', 'surveys.id')
    			->groupBy('answer')
    			->get();
    	$rejected = $locations->filter(function($value, $key){
    		return $value->count == 1;
    	});
    	$other = count($rejected);
    	$good = $locations->filter(function($value, $key){
    		return $value->count > 1;
    	});
        $good = array_values($good->toArray());
    	$array = array();
    	//$good[] = $other;
        $array["other"] = $other;
    	$array["data"] = $good;
    	$array["count"] = $count;
        return view('vis3', compact('array'));
    }

    public function symptomChart(){
    	$user = Auth::user();
    	$count = DB::table('surveys')
    			->where('surveys.user_id', '=', $user->id)
    			->join('question3_answers', 'question3_answers.survey_id', '=', 'surveys.id')
    			->count();
    	$locations = DB::table('surveys')
    			->select(DB::raw('count(*) as count, question3_answers.answer as symptom, avg(question5_answers.answer) as severity'))
    			->where('surveys.user_id', '=', $user->id)
    			->join('question3_answers', 'question3_answers.survey_id', '=', 'surveys.id')
    			->join('question5_answers', 'question5_answers.survey_id', '=', 'surveys.id')
    			->groupBy('symptom')
    			->get();
    	$rejected = $locations->filter(function($value, $key){
    		return $value->count == 1;
    	});
    	$other = count($rejected);
    	$otherDuration = 0;

    	if($other > 0){
    		$otherDuration = $rejected->sum('severity');
    		$otherDuration = ((int)$otherDuration/$other);
    	}

    	$good = $locations->filter(function($value, $key){
    		return $value->count > 1;
    	});
        $good = array_values($good->toArray());
    	$otherArray = array();
    	$otherArray['count'] = $other;
    	$otherArray['severity'] = $otherDuration;

		$array = array();
    	//$good[] = $otherArray;
        $array["other"] = $otherArray;
    	$array["data"] = $good;
    	$array["count"] = $count;
        return view('vis4', compact('array'));
    }

    public function calmingChart(){
    	$user = Auth::user();
    	$count = DB::table('surveys')
    			->where('surveys.user_id', '=', $user->id)
    			->join('question4_answers', 'question4_answers.survey_id', '=', 'surveys.id')
    			->count();
    	$locations = DB::table('surveys')
    			->select(DB::raw('count(*) as count, question4_answers.answer as technique, avg(question6_answers.answer) as duration'))
    			->where('surveys.user_id', '=', $user->id)
    			->join('question4_answers', 'question4_answers.survey_id', '=', 'surveys.id')
    			->join('question6_answers', 'question6_answers.survey_id', '=', 'surveys.id')
    			->groupBy('technique')
    			->get();
    	$rejected = $locations->filter(function($value, $key){
    		return $value->count == 1;
    	});

    	$other = count($rejected);
    	$otherDuration = 0;
    	if($other > 0){
    		$otherDuration = $rejected->sum('duration');
    		$otherDuration = ((int)$otherDuration/$other);
    	}

    	$good = $locations->filter(function($value, $key){
    		return $value->count > 1;
    	});
    	$good = array_values($good->toArray());
    	$otherArray = array();
    	$otherArray['count'] = $other;
    	$otherArray['duration'] = $otherDuration;

    	$array = array();
    	//$good[] = $otherArray;
        $array["other"] = $otherArray;
    	$array["data"] = $good;
    	$array["count"] = $count;
    	return $array;
    }
}
