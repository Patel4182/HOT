<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('organrequest',function (Blueprint $table){
            $table->increments('id');
            $table->char('organ_name',20);
            $table->char('status');
            $table->char('name',20);
            $table->char('email',50);
            $table->char('contact_no',20);
            $table->longText('description');
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
        Schema::dropIfExists('organrequest');
    }
}
