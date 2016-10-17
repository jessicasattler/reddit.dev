<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{	
	   //  public function setCreatedAt($value)
    // {
    // 	$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
    //     return $utc->setTimezone('America/Chicago');
    // }

    // public function setUpdatedAt($value)
    // {
    // 	 $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
    //     return $utc->setTimezone('America/Chicago');
    // }


    public function getCreatedAt($value)
    {
    	$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }

    public function getUpdatedAt($value)
    {
    	 $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
}
