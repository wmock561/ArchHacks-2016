<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token', 'pin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $relations = ['surveyAnswers', 'personalInformation'];

    public function surveyAnswers(){
        return $this->hasMany('App\SurveyAnswers');
    }

    public function personalInformation(){
        return $this->hasOne('App\PersonalInformation');
    }
}
