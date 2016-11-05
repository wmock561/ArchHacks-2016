<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question2Answers extends Model
{
    protected $table = 'question2_answers';

    protected $fillable = ['answer'];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
