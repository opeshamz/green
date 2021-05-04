<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'subject1', 'subject2', 'subject3'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
