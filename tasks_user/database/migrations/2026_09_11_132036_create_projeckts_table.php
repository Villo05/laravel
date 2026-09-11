<?php

use App\Models\Projeckt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projeckts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('costs')->nullable();
            $table->integer('time')->nullable();
            
            // Explicitly reference the 'users' table
            $table->foreignId('manager_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();
        });

        Projeckt::create([
            'name' => 'Admin',
            'costs' => 50000,
            'time' => 20,
            'manager_id' => 1, // Ensure user ID 1 exists (from users migration)
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('projeckts');
    }
};