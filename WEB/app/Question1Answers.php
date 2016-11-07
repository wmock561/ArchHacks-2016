<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question1Answers extends Model
{
    protected $table = 'question1_answers';

    protected $fillable = ['answer'];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
