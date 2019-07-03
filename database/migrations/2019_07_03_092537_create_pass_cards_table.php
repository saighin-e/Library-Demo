<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
//        Schema::create('pass_cards', static function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('user_id');
//            $table->string('identifier');
//        });

        $queryString = "
            CREATE TABLE `pass_cards` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `user_id` TINYINT(2) DEFAULT NULL,
              `identifier` VARCHAR(300) DEFAULT NULL,
              PRIMARY KEY (`id`)
        )";

        DB::statement($queryString);

        $this->populatePassCardsTable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
//        Schema::dropIfExists('pass_cards');

        $queryString = "
             DROP TABLE IF EXISTS pass_cards;
        ";

        DB::statement($queryString);
    }

    /**
     * Populates authors table
     */
    private function populatePassCardsTable(): void
    {
        $queryString = "INSERT INTO `pass_cards` (`id` ,`user_id`, `identifier`)
                            VALUES  (1 , 1, '123456'),
                                    (2 , 2, '234567'),
                                    (3 , 2, '345678')";

        DB::statement($queryString);
    }
}
