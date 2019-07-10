<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddFkBooksRequests extends Migration
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
                ALTER TABLE `borrowing_requests` ADD CONSTRAINT books_fk FOREIGN KEY (`book_id`) 
                REFERENCES `books`(`book_id`) 
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
                ALTER TABLE `borrowing_requests` DROP FOREIGN KEY books_fk;
            ";

        DB::statement($queryString);
    }
}
