<?php

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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('nik');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('ttl');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('ibu_istri');
            $table->string('ayah_suami');
            $table->string('suku_bangsa');
            $table->string('agama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('goldar');
            $table->string('bahasa');
            $table->string('keluhan');
            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('antrean_id')->constrained('antreans')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('berobat_id')->constrained('berobats')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('patients');
    }
};
