<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question6Answers extends Model
{
     protected $table = 'question6_answers';

    protected $fillable = ['answer'];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
