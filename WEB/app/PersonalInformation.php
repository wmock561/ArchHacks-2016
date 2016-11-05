<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable = [
	    'firstName',
	    'lastName',
	    'age',
	    'gender',
	    'ethnicity',
	    'occupation'
    ];

    protected $table = "PersonalInformation";
}
