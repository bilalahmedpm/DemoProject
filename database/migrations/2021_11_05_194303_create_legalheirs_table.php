<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalheirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalheirs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('empid')->unsigned();
            $table->foreign('empid')->references('id')->on('employees')->onupdate('cascade')->ondelete('cascade');
            $table->string('heircnic')->nullable();
            $table->string('heirname')->nullable();
            $table->string('relation')->nullable();
            $table->string('bankname')->nullable();
            $table->string('bankbranch')->nullable();
            $table->biginteger('accountno')->nullable();
            $table->biginteger('amount')->nullable();
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
        Schema::dropIfExists('legalheirs');
    }
}
