<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyAnswers extends Model
{
    protected $fillable = [
    	'question1Answer',
    	'question2Answer',
    	'question3Answer',
    	'question4Answer',
    	'question5Answer',
    ];

    protected $table = "SurveyAnswers";

    public function user(){
    	return $this->hasOne("App\User");
    }
}
