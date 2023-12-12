<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
    protected $fillable = ['logo' , 'first_link' ,'second_link' , 'third_link' , 'fourth_link' , 'fifth_link' , 'sixth_link' , 'phone_number' , 'display' ];
protected $guarded = ['id'];
}
