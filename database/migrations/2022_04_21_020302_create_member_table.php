<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('memberid')->nullable();
            $table->bigInteger('membercode')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('businessunitid')->nullable();
            $table->text('address')->nullable();
            $table->enum('city',['Batam', 'Bintan', 'Karimun', 'Kepulauan Anambas',
            'Lingga', 'Natuna', 'Tanjung Pinang'])->nullable();
            $table->enum('a_state', ['Indonesia'])->nullable();
            $table->bigInteger('postcode')->nullable();
            $table->enum('country', ['Indonesia'])->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('inactive')->nullable();
            $table->date('firstcontract')->nullable();
            $table->date('endcontract')->nullable();
            $table->bigInteger('npwp')->nullable();                                                                             
            $table->enum('membertype', ['Member', 'Non-Member'])->nullable();
            $table->string('username')->nullable();
            $table->bigInteger('idcardnumber')->nullable();
            $table->string('sponsorid')->nullable();
            $table->enum('memstatus', ['Confirmed', 'Not-Confirmed'])->nullable();
            $table->date('confirmationdate')->nullable();
            $table->date('expireddate')->nullable();
            $table->string('avatarphoto')->nullable();
            $table->date('lastlogin')->nullable();
            $table->string('refreshtoken')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('userid')->nullable();
            $table->string('imgsignature')->nullable();
            $table->string('productid')->nullable();
            $table->string('ktpphoto')->nullable();
            $table->bigInteger('accountno')->nullable();
            $table->enum('bankname', ['Bank BCA', 'Bank BII', 'Bank BJB', 'Bank BNI',
            'Bank BRI', 'Bank Mandiri'])->nullable();
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
        Schema::dropIfExists('member');
    }
};
