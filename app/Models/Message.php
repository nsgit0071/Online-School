<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'name' , 'last_name' , 'subject' , 'body' , 'status'];
    public function message(){
        return $this->hasMany(Message::class);
    }
}
