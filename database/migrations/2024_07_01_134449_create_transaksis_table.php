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
            Schema::create('transaksis', function (Blueprint $table) {
                $table->id();
                $table->date('tanggal');
                $table->dateTime('mulai');
                $table->dateTime('akhir');
                $table->string('keterangan');
                $table->double('biaya');
                $table->unsignedBigInteger('kendaraan_id');
                $table->unsignedBigInteger('area_id');

                $table->timestamps();

            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('kendaraan')->onDelete('cascade');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('transaksis');
        }
    };
