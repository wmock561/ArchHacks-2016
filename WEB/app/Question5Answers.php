<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question5Answers extends Model
{
    protected $table = 'question5_answers';

    protected $fillable = ['answer'];

    protected $casts = [
    	'answer' => 'integer'
    ];

    public function survey(){
    	return $this->belongsTo('App\Survey');
    }
}
