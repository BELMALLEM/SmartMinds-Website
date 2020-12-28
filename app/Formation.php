<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public $timestamp = false;
    protected $table = "formations";
    protected $fillable = ['client', 'session', 'ccna', 'phpsy', 'comptta', 'java'];
}
