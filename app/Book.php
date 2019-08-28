<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'author', 'accession_number', 'subject_id', 'copyright', 'shelflocation'

    ];

    public function subject() {

        return $this->belongsTo('App\Subject');
    }

}
