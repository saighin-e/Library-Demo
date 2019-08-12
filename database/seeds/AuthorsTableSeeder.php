<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
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
                INSERT INTO `authors` (
                    `id`,
                    `name`,
                    `pseudonim`, 
                    `date_of_birth`
                )
                VALUES
                    (1, 'Jack London', ' ', '1875-01-01'),
                    (2, 'Somerset Maugham', ' ', '1834-01-01'),
                    (3, 'Samuel Langhorn Clemens', 'Mark Twain', '1800-01-01'),
                    (4, 'Jorge Luis Borges', ' ', '1900-01-01'),
                    (5, 'Lewis Carrol', ' ', '1878-01-01'),
                    (6, 'Mary Westmacott', 'Agatha Christie', '1910-01-01' ),
                    (7, 'Stephen King', 'Richard Bachman', '1945-01-01'),
                    (8, 'William Schakespeare', ' ', '1564-01-01'),
                    (9, 'Charles Dickens', ' ', '1812-01-01'),
                    (10, 'George Orwell', ' ', '1912-01-01')
            ";

        DB::statement($queryString);
    }
}
