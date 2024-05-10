<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katdip extends Model
{
    use HasFactory, Sluggable;

    protected $table='katdips';

    protected $fillable=['title', 'slug'];

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

    //RELATION
    public function dips(): HasMany
    {
        return $this->hasMany(Dip::class);
    }
}