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
                  `author_id` INT(11) UNSIGNED NOT NULL, 
                  `condition` INT(5) NOT NULL,
                  
                CONSTRAINT `authors_books_fk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) 
                ON UPDATE CASCADE ON DELETE CASCADE 
                ) ENGINE=InnoDB AUTO_INCREMENT=23453 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
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
