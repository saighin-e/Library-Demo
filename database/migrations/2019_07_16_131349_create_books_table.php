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
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `title` VARCHAR(100) NOT NULL,
                  `condition` ENUM('mint', 'new', 'medium', 'poor', 'needs replacement'),
                  `date_added` DATE 
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
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
