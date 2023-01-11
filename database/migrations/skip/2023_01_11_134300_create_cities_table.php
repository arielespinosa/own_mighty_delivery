<?php

use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Country::class)->onDelete("cascade")->constrained();
            $table->text('address');
            $table->double('fixed_charges')->default('0');
            $table->double('cancel_charges')->default('0');
            $table->double('min_distance')->default('0');
            $table->double('min_weight')->default('0');
            $table->double('per_distance_charges')->default('0');
            $table->double('per_weight_charges')->default('0');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('cities');
    }
}
