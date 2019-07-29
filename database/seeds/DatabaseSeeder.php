<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PermitsTable::class);
         $this->call(AuthorsTableSeeder::class);
         $this->call(BooksTableSeeder::class);
         $this->call(AuthorsBooksTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
    }
}
