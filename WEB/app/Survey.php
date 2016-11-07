<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
    ];

    protected $table = "surveys";

    protected $with = [
	    'question1_answers',
	    'question2_answers',
	    'question3_answers',
	    'question4_answers',
	    'question5_answers',
	    'question6_answers',
	    'user',
        'users'
    ];

    public function user(){
    	return $this->belongsTo("App\User");
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

    public function question6_answers(){
    	return $this->hasMany('App\Question6Answers');
    }

    public function users(){
    	return $this->belongsToMany("App\User");
    }

    public function scopeLatest($query){
        return $query->orderBy('created_at');
    }
}
