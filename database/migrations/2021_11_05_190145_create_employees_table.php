<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
          
            $table->id();
            $table->char('pno' , '8')->unique();
            $table->char('employeecnic','15')->nullable();
            $table->string('employeename')->nullable();
            $table->string('fathername')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('department')->nullable();
            $table->char('designation')->nullable();;
            $table->char('grade' , '2')->nullable();
            $table->char('gitype' , '2')->nullable();
            $table->string('retirementdate')->nullable();
            $table->string('dateofdeath')->nullable();
            $table->char('legalheirs', '2')->nullable();
            $table->string('status')->nullable();
            $table->biginteger('contribution')->nullable();
            $table->string('entryuser')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
