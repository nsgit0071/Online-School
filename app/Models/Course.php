<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['photo' , 'heading' , 'paragraph_view' , 'phone' , 'title' , 'category_id' , 'content_main' , 'youTube_link' , 'prise' , 'telegram_link' , 'telegram_admin' ,  'book_page' , 'pro' , 'lesson_time' , 'block_icon' , 'status' , 'display'  ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
