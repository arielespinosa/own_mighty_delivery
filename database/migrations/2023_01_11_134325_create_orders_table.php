<?php

use App\Models\City;
use App\Models\Country;
use App\Models\DeliveryManDocument;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable()->constrained();
            $table->json('pickup_point')->nullable();
            $table->json('delivery_point')->nullable();
            $table->foreignIdFor(Country::class)->nullable()->constrained();
            $table->foreignIdFor(City::class)->nullable()->constrained();
            $table->string('parcel_type')->nullable();
            $table->double('total_weight')->default('0');
            $table->double('total_distance')->default('0');
            $table->dateTime('date')->nullable();
            $table->dateTime('pickup_datetime')->nullable();
            $table->dateTime('delivery_datetime')->nullable();
            $table->foreignIdFor(Order::class, 'parent_order_id')->nullable()->constrained();
            $table->foreignIdFor(Payment::class)->nullable()->constrained();
            $table->text('reason')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_collect_from')->nullable()->comment('on_pickup, on_delivery');
            $table->foreignIdFor(DeliveryManDocument::class)->nullable()->constrained();
            $table->double('fixed_charges')->default('0');
            $table->double('weight_charge')->default('0');
            $table->double('distance_charge')->default('0');
            $table->json('extra_charges')->nullable();
            $table->double('total_amount')->default('0');
            $table->boolean('pickup_confirm_by_client')->default(false);
            $table->boolean('pickup_confirm_by_delivery_man')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
