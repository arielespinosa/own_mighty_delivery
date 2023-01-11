<?php

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_charges', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('charges_type')->comment('fixed, percentage');
            $table->double('charges')->default('0');
            $table->foreignIdFor(Country::class)->nullable()->constrained();
            $table->foreignIdFor(City::class)->nullable()->constrained();
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
        Schema::dropIfExists('extra_charges');
    }
}
