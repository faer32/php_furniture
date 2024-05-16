<?php

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
        Schema::table('products', function (Blueprint $table) {
            // Удаление столбца discount
            $table->dropColumn('discount');

            // Изменение столбца url_picture
            $table->string('url_picture', 300)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Восстановление столбца discount
            $table->integer('discount')->nullable();

            // Восстановление исходных параметров столбца url_picture
            $table->string('url_picture', 100)->nullable(false)->change();
        });
    }
};
