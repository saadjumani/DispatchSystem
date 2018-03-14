<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Load#')->unique();
            $table->date('pickup')->nullable($value = false) ;
            $table->date('delivery')->nullable($value = false) ;
            $table->string('customerName')->nullable($value = false) ;
            $table->string('driverName')->nullable($value = false) ;
            $table->string('truckNo')->nullable($value = false) ;
            $table->string('from')->nullable($value = false);
            $table->string('to')->nullable($value = false);
            $table->string('bol')->nullable($value = false)->default('N/A') ;
            $table->mediumText('comments');
            $table->bigInteger('weight')->unsigned()->default(0) ;
            $table->bigInteger('quantity')->unsigned()->default(0) ;
            $table->string('unit')->nullable($value = false)->default('N/A')  ;
            $table->string('consignee')->nullable($value = false)  ;
            $table->string('shipper')->nullable($value = false)  ;
            $table->bigInteger('fee')->nullable($value = false)->default(0) ;
            $table->bigInteger('feeType')->nullable($value = false)->default(0) ;
            $table->bigInteger('fsc')->nullable($value = false)->default(0) ;
            $table->bigInteger('fscType')->nullable($value = false)->default(0) ;
            $table->bigInteger('additional')->nullable($value = false)->default(0) ;
            $table->bigInteger('detention')->nullable($value = false)->default(0) ;
            $table->bigInteger('lumper')->nullable($value = false)->default(0) ;
            $table->bigInteger('topoff')->nullable($value = false)->default(0) ;
            $table->bigInteger('tarp')->nullable($value = false)->default(0) ;
            $table->bigInteger('invoiceAdvance')->nullable($value = false)->default(0) ;
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
        Schema::dropIfExists('loads');
    }
}
