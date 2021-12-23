<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bloodbanks extends Migration
{
   
    public function up()
    {
        Schema::create('bloodbanks',function (Blueprint $table){
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->char('name',50);
            $table->char('email',30)->unique();
            $table->char('contactno',10);
            $table->char('address',100);
            $table->string('password');
            $table->char('contact_person_name',30);
            $table->char('contact_person_mobile_no',10);
            $table->longText('description');
            $table->string('image');
            $table->boolean('status');
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
        Schema::dropIfExists('bloodbanks');
    }
}
