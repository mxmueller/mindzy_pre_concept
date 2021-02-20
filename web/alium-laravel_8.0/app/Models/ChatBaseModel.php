<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatBaseModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'log';
    protected $fillable = [
        'chat_id','username', 'massage'
    ];
}
