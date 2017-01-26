<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 1/16/17
 * Time: 11:45 PM
 * Tenant model that refers to the 'tenant' table in the database.
 * Database operations can be performed using the model without calling the table directly.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //assigning the table to the model
    protected $table      = 'school';
    //fillable columns in the database
    protected $fillable   = ['name','email_address','school_URL','first_name','last_name','school_phone','subscription_id','is_enabled'];
}