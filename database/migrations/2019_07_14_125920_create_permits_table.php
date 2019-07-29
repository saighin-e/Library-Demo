<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePermitsTable extends Migration
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
               CREATE TABLE `permits` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `code_uuid` BINARY(32) NOT NULL,
                  `user_id` INT(11) UNSIGNED NOT NULL,
                  `emission_date` DATETIME DEFAULT CURRENT_TIMESTAMP,
                  `expiry_date` DATE,
                  UNIQUE KEY unique_user_id_key (`user_id`),
                  
               CONSTRAINT `users_permits_fk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) 
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
                DROP TABLE IF EXISTS `permits`;
            ";

        DB::statement($queryString);
    }
}
