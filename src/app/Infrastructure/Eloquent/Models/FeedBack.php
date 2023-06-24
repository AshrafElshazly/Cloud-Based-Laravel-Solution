<?php

namespace App\Infrastructure\Eloquent\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = ['name', 'email', 'image', 'feedback'];
}
