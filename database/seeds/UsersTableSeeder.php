<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Seeder for the user table
     *
     * @return void
     *
     * @throws Exception
     */
    public function run(): void
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `users` (
                    `id`,
                    `name`,
                    `last_name`, 
                    `email`,
                    `address`,
                    `phone`,
                    `year_of_birth`
                )
                VALUES
                    (1, 'Vasea', 'Pupkin', 'vasea_pupkin@email.com', 'Northumberlend Str, 22', '+123456789', 1972),
                    (2, 'Alina', 'Mergula', 'alina_mergula@email.com', 'Strpos Str, 34', '+123456789', 1973),
                    (3, 'Allan', 'Woods', 'allan_woods@gmail.com', 'New Hampshire Str, 42', '+123456789', 1990),
                    (4, 'Nostra', 'Damus', 'nostra_damus@email.com', 'Nostradamus Str, 91', '+123456789', 1987),
                    (5, 'Petr', 'Ivanov', 'petr_ivanov@email.com', 'Ivanovskaia Str, 12', '+123456789', 1984),
                    (6, 'Alex', 'Zver', 'alex_zver@gmail.com', 'Angreop Str, 11', '123456789', 1991),
                    (7, 'Stella', 'Artois', 'stella_artois@email.com', 'Chisinaului Str, 613', '+123456789', 1978),
                    (8, 'Jean', 'Vlajean', 'jean_vlajean@email.com', 'Ooops French Str, 1', '+123456789', 1954),
                    (9, 'Fiodor', 'Dvineatin', 'fiodor_dvineatin@email.com', 'Where When Who Str, 666', '+123459', 1962),
                    (10, 'Edgar', 'Poe', 'edgar_poe@email.com', 'Stories Str, 72', '', 1951)
            ";

        DB::statement($queryString);
    }
}
