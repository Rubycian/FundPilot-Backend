<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'paymentlinks';
    protected $fillable = [
        'userid',
        'formid',
        'title',
        'description',
        'price',
        'duedate'
    ];
}