<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['photo' ,'heading_main' , 'heading' , 'paragraph' , 'about_heading' , 'about_icon' , 'paragraph_about' , 'button_text' , 'display'];
    use HasFactory;
}
