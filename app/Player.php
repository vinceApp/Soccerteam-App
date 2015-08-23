<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'player';
    
    public $timestamps = false;
    
    public function nbplayers()
    {
        $nbplayers = DB::table('team')->pluck('id_team');
        
        
    }
}
