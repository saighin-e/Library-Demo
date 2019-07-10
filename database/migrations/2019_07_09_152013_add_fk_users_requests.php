<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddFkUsersRequests extends Migration
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
                ALTER TABLE `borrowing_requests` ADD CONSTRAINT users_fk FOREIGN KEY (`user_id`) 
                REFERENCES `users`(`user_id`) 
                ON DELETE NO ACTION ON UPDATE NO ACTION
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
                ALTER TABLE `borrowing_requests` DROP FOREIGN KEY users_fk;
            ";

        DB::statement($queryString);
    }
}
