<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOrderAuthorsUsersBooksTable extends Migration
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
                CREATE TABLE `order_books_authors` (
                    `order_id` INT(11) UNSIGNED NOT NULL,
                    `book_id` INT(11) UNSIGNED NOT NULL,
                    `author_id` INT(11) UNSIGNED NOT NULL,
                    
                   CONSTRAINT `fk_7` FOREIGN KEY (`order_id`) REFERENCES `user_orders` (`id`) 
                   ON UPDATE CASCADE ON DELETE CASCADE,
                   
                   CONSTRAINT `fk_8` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) 
                   ON UPDATE CASCADE ON DELETE CASCADE,
                   
                   CONSTRAINT `fk_9` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) 
                   ON UPDATE CASCADE ON DELETE CASCADE
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
                DROP TABLE IF EXISTS `order_books_authors`;
            ";

        DB::statement($queryString);
    }
}
