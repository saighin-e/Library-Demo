<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `authors_books` (
                    `author_id`,
                    `book_id`
                )
                VALUES
                    (1, 1),
                    (1, 2),
                    (4, 14),
                    (5, 15),
                    (10, 33),
                    (7, 33),
                    (4, 33),
                    (7, 34),
                    (9, 29),
                    (6, 17)
            ";

        DB::statement($queryString);
    }
}
