<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateBooksTable extends Migration
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
                INSERT INTO `books` (
                    `book_id`,
                    `book_title`,
                    `author_id`,
                    `book_condition`
                )
                VALUES
                    (1, 'White Fang', 1, 5),
                    (2, 'The Call of the Wild ', 1, 5),
                    (3, 'Martin Eden', 1, 5),
                    (4, 'The Bishops Apron', 2, 5),
                    (5, 'Six Stories Written in the First Person Singular', 2, 3),
                    (6, 'Judgment Seat', 2, 4),
                    (7, 'Princess September and the Nightingale', 2, 5),
                    (8, 'Adventures of Huckleberry Finn', 3, 5),
                    (9, 'The Prince and the Pauper', 3, 5),
                    (10, 'The Aleph and Other Stories', 4, 5),
                    (11, 'A Universal History of Iniquity', 4, 5),
                    (12, 'Dreamtigers', 4, 5),
                    (13, 'Alices Adventures in Wonderland', 5, 5),
                    (14, 'Through the Looking-Glass, and What Alice Found There', 5, 5),
                    (15, 'The Secret Adversary', 6, 5),
                    (16, 'Murder on the Orient Express', 6, 5),
                    (17, 'Unfinished Portrait', 6, 5),
                    (18, 'The Shining', 7, 5),
                    (19, 'The Running Man', 7, 5),
                    (20, 'The Talisman', 7, 5),
                    (21, 'Hamlet', 8, 5),
                    (22, 'MacBeth', 8, 5),
                    (23, 'Romeo and Juliet', 8, 5),
                    (24, 'Oliver Twist', 9, 5),
                    (25, 'The Pickwick Papers', 9, 5),
                    (26, 'David Copperfield', 9, 5),
                    (27, 'Down and Out in Paris and London ', 9, 5),
                    (28, 'Animal Farm', 10, 5),
                    (29, 'Nineteen Eighty-Four', 10, 5),
                    (30, 'Burmese Days', 10, 5)
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
                DELETE FROM `books` WHERE `book_id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }
}
