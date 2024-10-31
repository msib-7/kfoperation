<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class M_CarouselHome extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'tbl_carousel_home';

    protected $fillable = [
        'carousel_img',
    ];
}
