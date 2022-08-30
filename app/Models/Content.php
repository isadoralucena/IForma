<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
    ];
    //one-to-one relationship between models
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
