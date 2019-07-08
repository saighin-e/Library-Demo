<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::statement($this->populateBorrowersTable());
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
                DELETE FROM `readers` WHERE `id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Population data
     *
     * @return string
     */
    private function populateBorrowersTable(): string
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `readers` (
                    `id`,
                    `user_id`,
                    `first_name`,
                    `last_name`,
                    `email`,
                    `phone`,
                    `address`,
                    `gender`,
                    `year_of_birth`,
                    `books`
                )
                VALUES
                    (1, 1, 'Jimmy', 'Page', 'jimmy_page@email.com', '+123456789', ' ', 'male', 1920, '1,3,6,9'),
                    (2, 2, 'Floyd', 'Mayweather', 'floyd_mayweather@email.com', '+123456789', ' ', 'male', 1960, '1,2,8,6,9'),
                    (3, 3, 'Elvis', 'Presley', 'elvis_presley@email.com', '+123456789', ' ', 'male', 1826, '2,7,8'),
                    (4, 4, 'Alan', 'Turing', 'alan_turing@email.com', '+123456789', ' ', 'male', 1987, '1,2,8,6,9'),
                    (5, 5, 'Charles', 'Dickens', 'charles_dickens@email.com', '+123456789', ' ', 'male', 1965, '1,2,7,2,6,8,9'),
                    (6, 6, 'Mihai', 'Eminescu', 'mihai_eminescu@email.com', '+123456789', ' ', 'male', 1812, '1,2,3,6'),
                    (7, 7, 'Ion', 'Creanga', 'ion_creanga@email.com', '+123456789', 'male', ' ', 1836, '2'),
                    (8, 8, 'Ion', 'Druta', 'ion_druta@email.com', '+123456789', 'male', 1987, ' ', '2,1,3'),
                    (9, 9, 'Ion', 'Neculcea', 'ion_neculcea@email.com', '+123456789', 'male', ' ', 1287, '3'),
                    (10, 10, 'Mark', 'Manson', 'mark_manson@email.com', '+123456789', 'male', ' ', 1697, '')
            ";

        return $queryString;
    }
}
