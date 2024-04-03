<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formpermohonan extends Model
{
    use HasFactory, Sluggable;

    protected $table='formpermohonans';

    protected $fillable=[];

    protected $hidden=[];
}
