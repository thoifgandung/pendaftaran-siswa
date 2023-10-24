<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran_siswa', function (Blueprint $table) {
            $table->increments('no_pendaftaran')->comment('No Pendaftaran Otomatis Auto Increment');
            $table->string('nama', 50)->comment('Nama Siswa');
            $table->string('alamat', 50)->comment('Alamat Siswa');
            $table->date('tanggal_lahir')->comment('Tanggal Lahir');
            $table->char('jenis_kelamin', 1)->comment('L = Laki-laki, P = Perempuan');
            $table->string('asal_sekolah', 50)->comment('Asal Sekolah SD');
            $table->integer('agama_id')->comment('Agama Siswa');
            $table->decimal('nilai_indo', 5, 2)->comment('Nilai Bahasa Indonesia 1-10');
            $table->decimal('nilai_ipa', 5, 2)->comment('Nilai IPA 1-10');
            $table->decimal('nilai_mtk', 5, 2)->comment('Nilai Matematika 1-10');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran_siswa');
    }
}
