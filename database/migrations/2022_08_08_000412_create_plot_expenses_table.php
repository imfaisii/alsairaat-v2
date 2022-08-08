<?php

use App\Models\Expense;
use App\Models\Plot;
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
        Schema::create('plot_expenses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount');
            $table->foreignIdFor(Plot::class)->constrained();
            $table->foreignIdFor(Expense::class)->constrained();
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
        Schema::dropIfExists('plot_expenses');
    }
};
