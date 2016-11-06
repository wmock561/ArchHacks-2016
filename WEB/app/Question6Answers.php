<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question6Answers extends Model
{
     protected $table = 'question6_answers';

    protected $fillable = ['answer'];

    protected $casts = [
    	'answer' => 'integer'
    ];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
