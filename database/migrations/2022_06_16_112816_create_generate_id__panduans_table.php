<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerateIdPanduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
                CREATE TRIGGER id_secret_panduan BEFORE INSERT ON panduans FOR EACH ROW
                    BEGIN
                        INSERT INTO sequence_tbls VALUES (NULL);
                        SET NEW.id_token_panduan = CONCAT("PA_", LPAD(LAST_INSERT_ID(), 10, "0"));
                    END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER "id_secret_panduan"');
    }
}
