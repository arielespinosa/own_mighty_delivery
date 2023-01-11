<?php

use App\Models\DeliveryManDocument;
use App\Models\Document;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryManDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_man_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DeliveryManDocument::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Document::class)->constrained()->onDelete('cascade');
            $table->boolean('is_verified')->default(false);
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
        Schema::dropIfExists('delivery_man_documents');
    }
}
