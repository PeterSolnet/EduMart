<?php
/*
 * 
 * SystemModule model that refers to the 'system_modules' table in the database.
 * 
 * Database operations can be performed using the model without calling the table directly.
 * 
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemModule extends Model
{
    protected  $table='modules'; //assigning the table to the model
}