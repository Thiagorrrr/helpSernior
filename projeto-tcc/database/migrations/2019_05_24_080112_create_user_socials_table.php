<?php

use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('user_socials', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('user_id')->unsined();
            $table->string('social_network');
            $table->string('social_id');
            $table->string('social_email');
            $table->string('social_avatar');

            $table->timestamps();

            $table->foreing('user_id')->references('id')->on('users');
            $table->foreing('social_email')->references('email')->on('users');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('user_socials', function (Blueprint $table) {
          $table->dropForeign('user_socials_user_id_foreign');
          $table->dropForeign('user_socials_user_email_foreign');
        });
        Schema::dropIfExists('user_socials');
        */
    }
}
