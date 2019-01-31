<?php

namespace ritik\dynamicgraphs\models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id','ques_id','option_id'];

    public function questionings()
    {
        return $this->belongsTo('ritik\dynamicgraphs\models\Questioning','ques_id');
    }
}
