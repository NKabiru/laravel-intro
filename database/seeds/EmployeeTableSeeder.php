<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add one Employee
        DB::table('employees')->insert([
            'fname' => 'John',
            'lname' => 'Doe',
            'job' => 'Developer',
            'income' => 50000
        ]);
    }
}
