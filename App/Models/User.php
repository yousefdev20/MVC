<?php

use Illuminate\Database\Eloquent\Model as Model;
class User extends Model
{
    public $name;
    protected $fillable = [
        'email',
        'name',
        'password'
    ];

}