<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOrdersTable extends Migration
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
                CREATE TABLE `orders` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `user_id` INT(11) UNSIGNED NOT NULL,
                  `due_date` INT(11) UNSIGNED NOT NULL,
                  
                CONSTRAINT `users_orders_fk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) 
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
                DROP TABLE IF EXISTS `orders`;
            ";

        DB::statement($queryString);
    }
}
