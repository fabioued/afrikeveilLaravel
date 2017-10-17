<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_numberEn');
            $table->string('contact_numberFr');
            $table->string('contact_emailEn');
            $table->string('contact_emailFr');
            $table->string('addresse');
            $table->string('introductionVideo');
            $table->text('aboutUs');
            $table->text('aboutFr');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('copyrightEn');
            $table->string('copyrightFr');
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
        Schema::dropIfExists('settings');
    }
}
