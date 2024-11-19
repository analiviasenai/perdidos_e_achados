<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\VoidType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    public function up(): void
    {
        Schema::create('fotos_achadoseperdidos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            // $table->binary('source');
            $table->string('descricao');
            $table->string('airline');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE fotos_achadoseperdidos ADD source LONGBLOB AFTER id");
    }
    public function down(): void
    {
        //
    }
};
