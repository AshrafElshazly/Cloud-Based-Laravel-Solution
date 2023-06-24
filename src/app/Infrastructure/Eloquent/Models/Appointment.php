<?php

namespace App\Infrastructure\Eloquent\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'date', 'doctor_id', 'message'];
}
