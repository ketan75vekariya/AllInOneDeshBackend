<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $guarded=[];

    public function members(){

        return $this->hasOne(Member::class,'id');
    }
}
