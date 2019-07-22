<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * @throws Exception
     */
    public function run(): void
    {
        $comment1 = 'Если опция выбора кодировки подключения есть в компонентах которые вы используете для подключения к MySQL, то задайте cp1251.';
        $comment2 = 'UTF8 и только UTF8 - всегда и во всем!';
        $comment3 = 'The table character set and collation are used as default values for column definitions if the column character set and collation are not specified in individual column definitions. The table character set and collation are MySQL extensions; there are no such things in standard SQL.';
        $comment4 = 'A character set is a set of symbols and encodings. A collation is a set of rules for comparing characters in a character set. Let make the distinction clear with an example of an imaginary character set.';
        $comment5 = 'But what if we want to say that the lowercase and uppercase letters are equivalent? Then we would have at least two rules: (1) treat the lowercase letters a and b as equivalent to A and B; (2) then compare the encodings. We call this a case-insensitive collation. It is a little more complex than a binary collation.';
        $comment6 = 'Для того чтобы посмотреть к какой кодировке привязана структура данных можно воспользоваться оператором SHOW CREATE:';
        $comment7 = 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UsersTableSeeder , etc';
        $comment8 = 'Любой mysql-клиент при соединении с сервером может установить несколько переменных:';
        $comment10 = 'Христина лише недавно відійшла від тих років, коли в найсолодших мріях їй все хотілося кудись летіти. Ото, бувало, тільки сплющить очі, а руки її враз легшають, стають крильми, і вона в радісному переляці підіймається над хатами, летить понад левадами, проноситься над ріками, лісами.';
        $comment11 = 'Для того чтобы посмотреть к какой кодировке привязана структура данных можно воспользоваться оператором SHOW CREATE:';
        $comment9 = 'Любой mysql-клиент при соединении с сервером может установить несколько переменных:';
        $comment12 = 'Для корректной работы клиента с сервером следует установть как минимум character_set_client, character_set_connection, character_set_results при помощи оператора SET:';
        $comment13 = 'Любой mysql-клиент при соединении с сервером может установить несколько переменных:';
        $comment14 = 'To use these features effectively, you must know what character sets and collations are available, how to change the defaults, and how they affect the behavior of string operators and functions.';
        $comment15 = 'Для того чтобы посмотреть к какой кодировке привязана структура данных можно воспользоваться оператором SHOW CREATE:';
        $comment16 = 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UsersTableSeeder , etc';
        $comment17 = 'Христина лише недавно відійшла від тих років, коли в найсолодших мріях їй все хотілося кудись летіти. Ото, бувало, тільки сплющить очі, а руки її враз легшають, стають крильми, і вона в радісному переляці підіймається над хатами, летить понад левадами, проноситься над ріками, лісами.';
        $comment18 = 'But what if we want to say that the lowercase and uppercase letters are equivalent? Then we would have at least two rules: (1) treat the lowercase letters a and b as equivalent to A and B; (2) then compare the encodings. We call this a case-insensitive collation. It is a little more complex than a binary collation.';
        $comment19 = 'Для корректной работы клиента с сервером следует установть как минимум character_set_client, character_set_connection, character_set_results при помощи оператора SET:';
        $comment20 = 'But what if we want to say that the lowercase and uppercase letters are equivalent? Then we would have at least two rules: (1) treat the lowercase letters a and b as equivalent to A and B; (2) then compare the encodings. We call this a case-insensitive collation. It is a little more complex than a binary collation.';

        $queryString = /** @lang text */
            "
                INSERT INTO `comments` (
                    `book_id`,
                    `summary`,
                    `comment_text`,
                    `rating`,
                    `date`,
                    `user_name`
                )
                VALUES
                    (1, 'Liked the book!', '{$comment1}', 'excellent', '{$this->generateRandomDate()}', 'Anonymous'),          
                    (7, 'Enjoyed it. ', '{$comment2}', 'good or medium', '{$this->generateRandomDate()}', 'El Barto'),
                    (13, 'Boring, do not attempt reading.', '{$comment3}',  'excellent', '{$this->generateRandomDate()}', 'Vasea Pupkin'),
                    (24, 'Too heavy on the mind.', '{$comment4}', 'bad', '{$this->generateRandomDate()}', 'Allan Woods'),
                    (5, 'Super book.', '{$comment5}', 'very good', '{$this->generateRandomDate()}', 'Edgar Poe'),
                    (1, 'Recommended for reading!', '{$comment6}', 'very good', '{$this->generateRandomDate()}', 'No Nick'),
                    (7, 'The best book I have ever read.', '{$comment7}', 'bad', '{$this->generateRandomDate()}', 'Anonymous'),
                    (8, 'Will read it to my children.', '{$comment8}', 'very good', '{$this->generateRandomDate()}', 'Stella Artois'),
                    (9, 'Recommend to read to any school boy or girl.', '{$comment9}', 'excellent', '{$this->generateRandomDate()}', 'Jean Vlajean'),
                    (10, 'Great plot, unexpected turns.', '{$comment10}', 'bad', '{$this->generateRandomDate()}', 'Random Name'),
                    (1, 'Best book in my life.', '{$comment11}', 'very good', '{$this->generateRandomDate()}', 'Anonymous'),
                    (12, 'My favorite author and his masterpiece.', '{$comment12}', 'excellent', '{$this->generateRandomDate()}', 'Test'),
                    (13, 'Looking for more.', '{$comment13}', 'boring', '{$this->generateRandomDate()}', 'Test2'),
                    (14, 'Like it a lot.', '{$comment14}', 'bad', '{$this->generateRandomDate()}', 'Anonymous'),
                    (19, 'My preferred book during childhood.', '{$comment15}', 'good or medium', '{$this->generateRandomDate()}', 'Name1'),
                    (16, 'Check it out for sure.', '{$comment16}', 'good or medium', '{$this->generateRandomDate()}', 'Name2'),
                    (17, 'You must read this one.', '{$comment17}', 'good or medium', '{$this->generateRandomDate()}', 'Name3'),
                    (18, 'Fall asleep during reading.', '{$comment18}', 'excellent', '{$this->generateRandomDate()}', 'Name4'),
                    (19, 'Very difficult to understand and focus upon.', '{$comment19}', 'boring', '{$this->generateRandomDate()}', 'Name5'),
                    (20, 'In one word - just shining', '{$comment20}', 'boring',  '{$this->generateRandomDate()}', 'Anonymous')
            ";

        DB::statement($queryString);
    }

    /**
     * Generates random date between two dates
     *
     * @param string $format
     *
     * @return bool|string
     *
     * @throws Exception
     */
    protected function generateRandomDate($format = 'Y-m-d')
    {
        $min = strtotime(1993-07-22);
        $max = strtotime(2017-07-22);

        $date = random_int($min, $max);

        return date($format, $date);
    }
}
