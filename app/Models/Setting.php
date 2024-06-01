<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table='settings';

    protected $fillable=['link_ig', 'link_fb', 'link_x', 'phone', 'address', 'email'];

    protected $hidden=[];
}
