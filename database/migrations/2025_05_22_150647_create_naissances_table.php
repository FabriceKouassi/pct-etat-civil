<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaissancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('pere_id')->nullable()->constrained('citoyens')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('mere_id')->nullable()->constrained('citoyens')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('enfant_id')->nullable()->constrained('citoyens')->cascadeOnUpdate()->restrictOnDelete();
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
        Schema::dropIfExists('naissances');
    }
}
