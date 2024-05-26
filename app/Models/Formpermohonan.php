<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formpermohonan extends Model
{
    use HasFactory, Sluggable;

    protected $table='formpermohonans';

    protected $fillable=
        ['name', 'slug', 'katdip_id', 'alamat', 'email', 'phone', 'pekerjaan', 'rincian', 'tujuan', 'memperoleh', 
        'mendapatkan', 'salinan'];

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

    //RELATION
    public function katdips(): BelongsTo
    {
        return $this->belongsTo(Katdip::class);
    }
}
