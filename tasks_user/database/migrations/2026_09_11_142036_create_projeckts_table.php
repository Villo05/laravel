<?php

use App\Models\Projeckt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projeckts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('costs')->nullable();
            $table->integer('time')->nullable();
            $table->unsignedBigInteger('manager_id') -> constraint('users');
            $table->timestamps();
        });

        Projeckt::create([
            'name' => 'Admin',
            'costs' => 50000,
            'time' => 20,
            'manager_id' => 2,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeckts');
    }
};
