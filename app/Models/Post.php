<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //TIme stamps
    public $timestamps = true;
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
