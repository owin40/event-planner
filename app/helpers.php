<?php

use App\Models\event;
use App\Models\teamdirector;
use App\Models\teamfounder;

function get_event(){
    $data = event::all();
    return $data;
}

function get_team_director(){
    $data = teamdirector::all();
    return $data;
}

function get_team_founder(){
    $data = teamfounder::all();
    return $data;
}