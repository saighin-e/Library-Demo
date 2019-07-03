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

//        Schema::table('pass_cards', function(`pass_cards`) {
//            $table->foreign('user_id')->references('id')->on('authors');
//        });

        $queryString = "
            CREATE TABLE `pass_cards` (
              `id` INT(11) UNSIGNED NOT NULL PRIMARY KEY,
              `user_id` TINYINT(2) DEFAULT NULL,
              `identifier` VARCHAR(300) DEFAULT NULL,
              ADD FOREIGN KEY (`iuser_id`) REFERENCES `borrowers` (`id`) 
              ON DELETE CASCADE ON UPDATE CASCADE 
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
