<?php

namespace ritik\dynamicgraphs\models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public $timestamps = false;
    protected $fillable = ['label','value','ques_id'];
     public function questionings()
    {
        return $this->belongsTo('ritik\dynamicgraphs\models\Questioning','ques_id');
    }
}
