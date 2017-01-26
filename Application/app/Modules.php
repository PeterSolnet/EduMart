<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 1/19/17
 * Time: 1:31 AM

* Tenant model that refers to the 'tenant' table in the database.
 * Database operations can be performed using the model without calling the table directly.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    //assigning the table to the model
    protected $table      = 'module';
    //fillable columns in the database
    protected $fillable   = ['name','description','is_enabled'];
}