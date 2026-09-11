<?php

use App\Models\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('status')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Explicitly pass 'projeckts' to constrained() so MySQL builds the correct foreign key
            $table->foreignId('projeckt_id')->constrained('projeckts')->onDelete('cascade');
            
            $table->timestamps();
        });

        Task::create([
            'title' => 'első feladat',
            'description' => 'első feladat elvégzése',
            'user_id' => 1,
            'projeckt_id' => 1,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};