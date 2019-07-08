<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @throws Exception
     */
    public function up(): void
    {
        DB::statement($this->prepareQueryForAdminsTable());
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
                DELETE FROM `admins` WHERE `id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Prepares query for admins
     *
     * @return string
     */
    private function prepareQueryForAdminsTable(): string
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `admins` (
                    `id`,
                    `user_id`,
                    `position`,
                    `first_name`,
                    `last_name`,
                    `email`,
                    `phone`,
                    `address`
                )
                VALUES
                    (1, 11, 'Director of the Library', 'Mary', 'Poppins', 'email@email.com', ' ', ' '),
                    (2, 12, 'Librarian', 'Mary', 'Shelley', 'email@email.com', ' ', ' '),
                    (3, 13, 'Librarian', 'Virginia', 'Wolf', 'email@email.com', ' ', ' '),
                    (4, 14, 'Administrator', 'Alan', 'Turing', 'email@email.com', ' ', ' ')
            ";

        return $queryString;
    }
}
