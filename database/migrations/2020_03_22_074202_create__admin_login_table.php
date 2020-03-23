<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AdminLogin', function (Blueprint $table) {
            $table->bigIncrements('UserId');
            $table->string('Username');
            $table->string('Password');
            $table->string('Status');
            $table->bigInteger('StaffId')->unsigned()->nullable();
            $table->foreign('StaffId')
                  ->references('StaffId')->on('staff');
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
        Schema::dropIfExists('AdminLogin');
    }
}
