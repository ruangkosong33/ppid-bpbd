<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $table='posts';

    protected $fillable=['title', 'slug', 'kategori_id', 'image', 'body', 'date', 'status'];

    protected $hidden=[];

    //Status Color
    public function statusColor()
    {
       $color = '';

       switch ($this->status) {
           case 'Publish':
               $color = 'success';
               break;
           case 'Draft':
               $color = 'danger';
               break;
           default:
               break;
       }
       return $color;
    }

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
    public function kategoris(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
