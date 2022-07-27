<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKolomGambarOnPaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paket', function (Blueprint $table){
            $table->integer('jml_tamu')->nullable()->after('isi_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket', function (Blueprint $table){
            $table->dropColumn('jml_tamu');
        });
    }
}
