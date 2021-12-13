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
            $table->string('name');
            $table->string('slug');
            $table->string('phone');
            $table->string('gender');
            $table->string('image')->nullable();
            $table->string('email')->nullable()->unique();
            $table->date('join')->nullable();
            $table->text('address')->nullable();
            $table->integer('emp_number')->nullable();
            $table->string('acc_name', 100)->nullable();
            $table->integer('acc_no')->nullable()->unique();
            $table->string('bank_name', 100)->nullable();
            $table->string('bank_branch', 100)->nullable();
            $table->string('bank_location', 100)->nullable();
            $table->integer('tax_payer')->nullable()->unique();
            $table->foreignId('branch_id')->nullable()->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('designation_id')->nullable()->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
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
