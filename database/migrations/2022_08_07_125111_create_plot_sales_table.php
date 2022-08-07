<?php

use App\Models\Customer;
use App\Models\Plot;
use App\Models\User;
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
        Schema::create('plot_sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('price');
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('total')->nullable();
            $table->string('reference')->nullable();
            $table->foreignIdFor(Plot::class)->constrained();
            $table->foreignIdFor(Customer::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
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
        Schema::dropIfExists('plot_sales');
    }
};
