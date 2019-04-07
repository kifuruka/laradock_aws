<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donation_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('quantity'); //口数
            $table->string('gift_code')->nullable();
            $table->string('donor_first_name',100);
            $table->string('donor_last_name',100);
            $table->string('donor_first_kana',100);
            $table->string('donor_last_kana',100);
            $table->string('tel',20);
            $table->string('postal_code',10);
            $table->string('d_state',50);
            $table->string('d_city',50);
            $table->string('d_address1',100);
            $table->string('d_address2',100)->nullable();
            $table->boolean('is_admissionyear'); //入学に関わる寄付かの有無
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('donation_id')
            ->references('id')
            ->on('donations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_details');
    }
}
