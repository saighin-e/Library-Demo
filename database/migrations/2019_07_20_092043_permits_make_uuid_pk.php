<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PermitsMakeUuidPk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $this->dropId();
        $this->makeUUIDpk();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $this->dropUUIDpk();
        $this->addId();
    }


    /**
     * Drops `id` column
     */
    protected function dropId(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `permits`
                DROP COLUMN `id`;
            ";

        DB::statement($queryString);
    }

    /**
     * Makes `uuid_code` primary key
     */
    protected function makeUUIDpk(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `permits`
                ADD CONSTRAINT uuid_pk primary key(`code_uuid`);
            ";

        DB::statement($queryString);
    }

    /**
     * Makes `id` column primary key
     */
    protected function dropUUIDpk(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `permits`
                DROP PRIMARY KEY;
            ";

        DB::statement($queryString);
    }

    /**
     * Adds `id` column
     */
    protected function addId(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `permits`
                ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;
            ";

        DB::statement($queryString);
    }
}
