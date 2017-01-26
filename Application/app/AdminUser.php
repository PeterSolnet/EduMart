<?php

namespace EduMart;

use Illuminate\Database\Eloquent\Model;
use EduMart\Notifications\UserAdminResetPasswordNotification;


class AdminUser extends Model
{
    protected $table ="admin_users";


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }

}
