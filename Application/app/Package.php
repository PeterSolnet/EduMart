<?php
/**
 * Created by PhpStorm.
 * User: Peter Oladipo
 * Date: 1/17/17
 * Time: 10:24 PM
 * Subscription model that refers to the 'subscription' table in the database.
 * Database operations can be performed using the model without calling the table directly.

 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model{

    //assigning the table to the model
    protected $table      = 'package';
    //fillable columns in the database
    protected $fillable   = ['name', 'description', 'type', 'price', 'no_of_students'];
} 