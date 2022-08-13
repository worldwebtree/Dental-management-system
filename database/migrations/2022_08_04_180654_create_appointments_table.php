<?php

use App\Models\Dentist;
use App\Models\Patient;
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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignIdFor(Patient::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignIdFor(Dentist::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->string('patient-name');
            $table->dateTime('appointment-dateTime');
            $table->string('dentist_service');
            $table->enum('status', ['Active', 'Completed', 'Canceled']);

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
        Schema::dropIfExists('appointments');
    }
};
