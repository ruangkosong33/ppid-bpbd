<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory, Sluggable;

    protected $table='partners';

    protected $fillable=['title', 'slug', 'image', 'link'];

    protected $hidden=[];

    //SLUG
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
