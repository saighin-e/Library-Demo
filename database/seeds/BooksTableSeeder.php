<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
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
                INSERT INTO `books` (
                    `id`,
                    `title`,
                    `condition`,
                    `date_added`
                )
                VALUES
                    (1, 'White Fang', 'mint', '{$this->generateAddedDate()}'),          
                    (2, 'The Call of the Wild ', 'new', '{$this->generateAddedDate()}'),
                    (3, 'Martin Eden', 'new', '{$this->generateAddedDate()}'),
                    (4, 'The Bishops Apron', 'poor', '{$this->generateAddedDate()}'),
                    (5, 'Six Stories Written in the First Person Singular', 'new', '{$this->generateAddedDate()}'),
                    (6, 'Judgment Seat', 'mint', '{$this->generateAddedDate()}'),
                    (7, 'Princess September and the Nightingale', 'poor', '{$this->generateAddedDate()}'),
                    (8, 'Adventures of Huckleberry Finn', 'poor', '{$this->generateAddedDate()}'),
                    (9, 'Adventures of Huckleberry Finn', 'poor', '{$this->generateAddedDate()}'),
                    (10, 'Adventures of Huckleberry Finn', 'poor', '{$this->generateAddedDate()}'),
                    (11, 'The Prince and the Pauper', 'new', '{$this->generateAddedDate()}'),
                    (12, 'The Aleph and Other Stories', 'poor', '{$this->generateAddedDate()}'),
                    (13, 'A Universal History of Iniquity', 'new', '{$this->generateAddedDate()}'),
                    (14, 'Dreamtigers', 'new', '{$this->generateAddedDate()}'),
                    (15, 'Alices Adventures in Wonderland', 'new', '{$this->generateAddedDate()}'),
                    (16, 'Through the Looking-Glass, and What Alice Found There', 'poor', '{$this->generateAddedDate()}'),
                    (17, 'The Secret Adversary', 'poor', '{$this->generateAddedDate()}'),
                    (18, 'Murder on the Orient Express', 'poor', '{$this->generateAddedDate()}'),
                    (19, 'Unfinished Portrait', 'needs replacement', '{$this->generateAddedDate()}'),
                    (20, 'The Shining', 'mint',  '{$this->generateAddedDate()}'),
                    (21, 'The Running Man', 'medium', '{$this->generateAddedDate()}'),
                    (22, 'The Running Man', 'medium', '{$this->generateAddedDate()}'),
                    (23, 'The Running Man', 'medium', '{$this->generateAddedDate()}'),
                    (24, 'The Talisman', 'mint', '{$this->generateAddedDate()}'),
                    (25, 'Hamlet', 'poor', '{$this->generateAddedDate()}'),
                    (26, 'MacBeth', 'medium', '{$this->generateAddedDate()}'),
                    (27, 'Romeo and Juliet', 'medium', '{$this->generateAddedDate()}'),
                    (28, 'Oliver Twist', 'medium', '{$this->generateAddedDate()}'),
                    (29, 'The Pickwick Papers', 'medium', '{$this->generateAddedDate()}'),
                    (30, 'David Copperfield', 'mint', '{$this->generateAddedDate()}'),
                    (31, 'Down and Out in Paris and London', 'needs replacement', '{$this->generateAddedDate()}'),
                    (32, 'Animal Farm', 'medium', '{$this->generateAddedDate()}'),
                    (33, 'Nineteen Eighty-Four', 'medium', '{$this->generateAddedDate()}'),
                    (34, 'Nineteen Eighty-Four', 'medium', '{$this->generateAddedDate()}'),
                    (35, 'Nineteen Eighty-Four', 'medium', '{$this->generateAddedDate()}'),
                    (36, 'Burmese Days', 'mint', '{$this->generateAddedDate()}')
            ";

        DB::statement($queryString);
    }

    /**
     * Generates expiry date
     *
     * @return string
     */
    public function generateAddedDate(): string
    {
        return date('Y-m-d', strtotime('-1 year'));
    }
}
