<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('activite_eleve', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activite_id')->constrained("activites")->onDelete('cascade');
            $table->foreignId('eleve_id')->constrained('eleves')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activite_eleve');
    }
};
