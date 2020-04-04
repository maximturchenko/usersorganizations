<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{ 
    protected $fillable = ['firstname','lastname','middlename','email','phone'];
    public $timestamps = false;
    protected $primaryKey = 'id_user';

}
