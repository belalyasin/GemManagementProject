<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'starts_at',
        'ends_at',
        'session_date'
    ];

    public $timestamps = false;

    public function coaches()
    {
        return $this->belongsToMany('App\Models\CoachSession', 'training_session_id', 'coach_id');
    }

    public function attendance()
    {
        return $this->hasMany('App\Models\SessionAttendance', 'session_id');
    }
}
