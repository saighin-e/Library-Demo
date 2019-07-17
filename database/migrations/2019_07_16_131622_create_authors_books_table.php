<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAuthorsBooksTable extends Migration
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
                CREATE TABLE `authors_books` (
                  `author_id` INT(11) UNSIGNED NOT NULL,
                  `book_id` INT(11) UNSIGNED NOT NULL,
                PRIMARY KEY (`author_id`, `book_id`),
                  
                CONSTRAINT `authors_books_unique` UNIQUE (`author_id`, `book_id`),
                  
                CONSTRAINT `fk1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) 
                ON UPDATE NO ACTION ON DELETE NO ACTION, 
                
                CONSTRAINT `fk2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) 
                ON UPDATE NO ACTION ON DELETE NO ACTION
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
                DROP TABLE IF EXISTS `authors_books`;
            ";

        DB::statement($queryString);
    }
}
