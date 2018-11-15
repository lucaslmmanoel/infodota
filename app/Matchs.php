<?php

namespace InfoDota;

use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    //

    protected $fillable = ['first_team', 'second_team', 'match_date', 'match_time'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'matchs';
}
