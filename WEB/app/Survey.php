<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
    ];

    protected $table = "surveys";

    protected $relations = [
	    'question1_answers',
	    'question2_answers',
	    'question3_answers',
	    'question4_answers',
	    'question5_answers',
	    'user'
    ];

    public function user(){
    	return $this->hasOne("App\User");
    }

    public function question1_answers(){
    	return $this->hasMany('App\Question1Answers');
    }

    public function question2_answers(){
    	return $this->hasMany('App\Question2Answers');
    }

    public function question3_answers(){
    	return $this->hasMany('App\Question3Answers');
    }

    public function question4_answers(){
    	return $this->hasMany('App\Question4Answers');
    }

    public function question5_answers(){
    	return $this->hasMany('App\Question5Answers');
    }

    public function users(){
    	return $this->belongsToMany("App\User");
    }
}
