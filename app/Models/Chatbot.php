<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    use HasFactory;
    protected $fillable = [
        'rule_name', 'intent', 'example'
    ];

    protected $casts = [
        'intent' => 'json',
        'example' => 'json'
    ];    
}
