<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = ['heading' , 'paragraph' , 'button_text' , 'youtube_link' , 'display'];
}
