<?php

namespace App\Models;

use App\Models\Gym;
use App\Models\Attendance;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingSession extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'name',
        'day',
        'started_at',
        'finished_at',
    ];

    public function coaches()
    {
        return $this->belongsToMany(Coach::class, 'coach_sessions', 'training_session_id', 'coach_id');
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'training_session_id');
    }
}
