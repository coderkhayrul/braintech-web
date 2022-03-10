<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSkill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'ts_creator', 'id');
    }

    public function team()
    {
        return $this->belongsTo(TeamMember::class, 'team_id', 'team_id');
    }
}
