<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    // Add user_id to the fillable array
    protected $fillable = [
        'user_id',
        'question_id',
        'value',
    ];
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
