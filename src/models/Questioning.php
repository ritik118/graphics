<?php

namespace ritik\dynamicgraphs\models;

use Illuminate\Database\Eloquent\Model;

class Questioning extends Model
{
    public $timestamps = false;
    protected $fillable = ['label','name'];
     public function comments()
    {
        return $this->hasOne('ritik\dynamicgraphs\models\Comment','ques_id');
    }
	

    public function options()
    {
        return $this->hasMany('ritik\dynamicgraphs\models\Option','ques_id');
    }
   
}
