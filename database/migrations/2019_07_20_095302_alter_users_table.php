<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $this->renameNameKey();
        $this->changeEmailLength();
        $this->changeAddressDataType();
        $this->changeYearDataType();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $this->rollbackRenameNameKey();
        $this->rollbackChangeEmailLength();
        $this->rollbackChangeAddressDataType();
        $this->rollbackChangeYearDataType();
    }

    /*
     * Renames `name` to `first_name`
     */
    protected function renameNameKey(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users`
                CHANGE `name` `first_name` VARCHAR(100);
            ";

        DB::statement($queryString);
    }

    /**
     * Changes `email` column length
     */
    protected function changeEmailLength(): void
    {
        $queryString = /** @lang text */
            "           
                ALTER TABLE `users` MODIFY `email` VARCHAR(256);
            ";

        DB::statement($queryString);
    }

    /**
     * Changes the datattype of `address` column to TEXT
     */
    protected function changeAddressDataType(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users` MODIFY `address` TEXT NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Changes `year_of_birth` type to DATE
     */
    protected function changeYearDataType(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users` MODIFY `year_of_birth` DATE NOT NULL;
            ";

        DB::statement($queryString);
    }

    /*
     * Renames `first_name` to `name`
     */
    protected function rollbackRenameNameKey(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users`
                CHANGE `first_name` `name` VARCHAR(100) NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Changes `email` column length
     */
    protected function rollbackChangeEmailLength(): void
    {
        $queryString = /** @lang text */
            "           
                ALTER TABLE `users` MODIFY `email` VARCHAR(30) NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Changes the datattype of `address` column to VARCHAR
     */
    protected function rollbackChangeAddressDataType(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users` MODIFY `address` VARCHAR(100) NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Changes `year_of_birth` type to INT(4) NOT NULL
     */
    protected function rollbackChangeYearDataType(): void
    {
        $queryString = /** @lang text */
            "
                ALTER TABLE `users` MODIFY `year_of_birth` INT(4) NOT NULL;
            ";

        DB::statement($queryString);
    }
}
