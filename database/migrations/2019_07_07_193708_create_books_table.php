<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBooksTable extends Migration
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
                CREATE TABLE `books` (
                  `book_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `title` VARCHAR(100) NOT NULL,
                  `author_id` INT(11) NOT NULL, 
                  `condition` INT(5) NULL
                ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
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
                DROP TABLE IF EXISTS `books`;
            ";

        DB::statement($queryString);
    }
}
