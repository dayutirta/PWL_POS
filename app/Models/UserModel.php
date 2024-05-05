<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{

    // use AuthenticatableTrait;
    public function getJWTIdentifier(){
        return $this->getKey();
    }    
    public function getJWTCustomClaims(){
        return [];
    }


    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id','username','nama','password'];

    // public function level() : BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class,'level_id','level_id');
    // }
}

