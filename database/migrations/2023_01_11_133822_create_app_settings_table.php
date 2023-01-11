<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("description")->nullable();
            $table->string("copyright")->nullable();
            $table->string("facebook_url")->nullable();
            $table->string("twitter_url")->nullable();
            $table->string("linkedin_url")->nullable();
            $table->string("instagram_url")->nullable();
            $table->string("support_phone_number")->nullable();
            $table->string("support_email");
            $table->json('notification_settings')->nullable();
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
        Schema::dropIfExists('app_settings');
    }
}
