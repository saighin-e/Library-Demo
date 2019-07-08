<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateAuthorsTable extends Migration
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
                INSERT INTO `authors` (
                    `id`,
                    `name`,
                    `pseudonim`,
                    `year_of_birth`
                )
                VALUES
                    (1, 'Jack London', ' ', 1875),
                    (2, 'Somerset Maugham', ' ', 1834),
                    (3, 'Samuel Langhorn Clemens', 'Mark Twain', 1800),
                    (4, 'Jorge Luis Borges', ' ', 1900),
                    (5, 'Lewis Carrol', ' ', 1878),
                    (6, 'Mary Westmacott', 'Agatha Christie', 1910 ),
                    (7, 'Stephen King', 'Richard Bachman', 1945),
                    (8, 'William Schakespeare', ' ', 1564),
                    (9, 'Charles Dickens', ' ', 1812),
                    (10, 'George Orwell', ' ', 1912)
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
                DELETE FROM `authors` WHERE `id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }
}
