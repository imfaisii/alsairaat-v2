<?php

use App\Models\Customer;
use App\Models\PlotType;
use App\Models\Society;
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
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number');
            $table->string('size');
            $table->string('street')->nullable();
            $table->foreignIdFor(PlotType::class)->constrained();
            $table->foreignIdFor(Society::class)->constrained();
            $table->foreignIdFor(Customer::class)->nullable()->constrained();
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
        Schema::dropIfExists('plots');
    }
};
