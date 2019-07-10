<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $queryString = /** @lang text */
            "
                CREATE TABLE `authors` (
                  `author_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `author_name` VARCHAR(50) NOT NULL,
                  `author_pseudonim` VARCHAR(50) DEFAULT NULL,
                  `author_yob` INT(10) DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ";

        DB::statement($queryString);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $queryString = /** @lang text */
            "
                DROP TABLE IF EXISTS `authors`;
            ";

        DB::statement($queryString);
    }
}
