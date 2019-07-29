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
                CREATE TABLE `user_orders` (
                    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    `user_id` INT(11) UNSIGNED NOT NULL,
                    `start_date` DATETIME DEFAULT CURRENT_TIMESTAMP,
                    `due_date` DATE NULL,
                    
                   CONSTRAINT `fk_user_orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) 
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
                DROP TABLE IF EXISTS `user_orders`;
            ";

        DB::statement($queryString);
    }
}
