<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOrderBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        //        PRIMARY KEY (`order_id`, `book_id`)

        $queryString = /** @lang text */
            "
                CREATE TABLE `orders_books` (
                  `order_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `book_id` INT(11) UNSIGNED NOT NULL,
                  
                CONSTRAINT `order_books_unique` UNIQUE (`order_id`, `book_id`),
                  
                CONSTRAINT `order_books_order_fk_4` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) 
                ON UPDATE CASCADE ON DELETE CASCADE, 
                
                CONSTRAINT `order_books_books_fk_5` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) 
                ON UPDATE CASCADE ON DELETE CASCADE
                ) ENGINE=InnoDB AUTO_INCREMENT=23453 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
                DROP TABLE IF EXISTS `orders_books`;
            ";

        DB::statement($queryString);
    }
}
