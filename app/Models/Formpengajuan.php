<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formpengajuan extends Model
{
    use HasFactory, Sluggable;

    protected $table='formpengajuans';

    protected $fillable=['name', 'slug', 'ktp', 'phone', 'alamat', 'rincian', 'keterangan', 'salinan'];

    protected $hidden=[];

    //SLUG
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
