<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName')->nullable($value=false) ;
            $table->string('lastName')->nullable($value=false) ;
            $table->string('streetNo')->nullable($value=false) ;
            $table->string('city')->nullable($value=false) ;
            $table->string('state')->nullable($value=false) ;
            $table->string('aptOrSuiteOrOther')->default('N/A') ;
            $table->bigInteger('zipCode')->default(00000) ;
            $table->string('phoneNo')->default('N/A') ;
            $table->string('email')->nullable($value=false)->unique()->default('N/A') ;
            $table->string('paymentType')->nullable($value=false) ;
            $table->string('licenseNo')->nullable($value=false)->unique() ;
            $table->date('licenseExpireDate')->nullable($value=false) ;
            $table->string('licenseIssuingState')->nullable($value=false) ;
            $table->date('medicalCardRenewal')->nullable($value=false) ;
            $table->date('hireDate')->nullable($value=false) ;
            $table->date('terminationDate')->nullable($value=false) ;
            $table->string('emergencyContactName')->nullable($value=false);
            $table->string('emergencyPhoneNo')->nullable($value=false) ;

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
        Schema::dropIfExists('drivers');
    }
}
