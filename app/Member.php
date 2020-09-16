<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'secret',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'secret', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->secret = md5($model->email);
            $model->remember_token = md5($model->name);
        });
    }
}
