<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question3Answers extends Model
{
    protected $table = 'question3_answers';

    protected $fillable = ['answer'];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
