<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *'TenantName','TenantURL','TenantEmail','TenantPhone','FirsName','LastName','SubscriptionID'
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_address')->unique();
            $table->string('name');
            $table->string('school_URL');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('school_phone');
            $table->integer('subscription_id');
            $table->boolean('is_enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('school');
    }
}
