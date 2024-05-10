<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dip extends Model
{
    use HasFactory, Sluggable;

    protected $table='dips';

    protected $fillable=['title', 'slug', 'katdip_id', 'file'];

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
    public function katdips(): BelongsTo
    {
        return $this->belongsTo(Katdip::class, 'katdip_id');
    }
}
