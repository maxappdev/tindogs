<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    
    protected $fillable = ['dog_id', 'doglooker_id', 'status'];

}
