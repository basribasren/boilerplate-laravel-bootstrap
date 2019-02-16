<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{

    // Table Name
    protected $table = 'materies';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'duration', 'description',
    ];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}
