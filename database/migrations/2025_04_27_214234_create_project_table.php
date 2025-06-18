<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function(Blueprint $table){
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("name");
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->string('budget')->default("My Time");
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
