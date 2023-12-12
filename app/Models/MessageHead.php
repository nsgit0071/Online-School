<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageHead extends Model
{
    use HasFactory;
    protected $fillable = [ 'main_paragraph' , 'heading','paragraph','message_heading' , 'btn_text' ,'status'];
}
