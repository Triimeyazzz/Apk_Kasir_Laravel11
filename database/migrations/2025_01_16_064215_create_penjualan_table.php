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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->penjualan_id();
            $table->date('tanggal_penjualan');
            $table->decimal('total_harga', 10, 2);
            $table->foreignId('pelanggan_id')           // Foreign Key pelanggan_id
                  ->constrained('pelanggan')            // Referensi tabel pelanggan
                  ->onDelete('cascade');                // Hapus otomatis jika data pelanggan dihapus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};

// id diganti penjualan_id
// tanggal_penjalan date
// total_harga decimal, kalo gk ada double aja
// pelanggan_id pilih foreignId
