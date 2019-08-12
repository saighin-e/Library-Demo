<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCommentsTable extends Migration
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
                CREATE TABLE `comments` (
                  `book_id` INT(11) UNSIGNED NOT NULL,
                  `summary` VARCHAR(120) NOT NULL,
                  `comment_text` LONGTEXT NOT NULL,
                  `rating` ENUM('excellent', 'very good', 'good or medium', 'boring', 'bad'),
                  `date` DATE NOT NULL,
                  `user_name` VARCHAR(90) NULL,
                  `user_id` INT(11) UNSIGNED NULL,
                  
                CONSTRAINT `fk3_book_books_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) 
                ON UPDATE CASCADE ON DELETE CASCADE, 
                
                CONSTRAINT `fk4_user_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
                ON UPDATE CASCADE ON DELETE CASCADE 
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
                DROP TABLE IF EXISTS `comments`;
            ";

        DB::statement($queryString);
    }
}
