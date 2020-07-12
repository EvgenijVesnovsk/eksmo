<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_statuses')->insert([
            ['id' => 1, 'name' => 'Черновик'],
            ['id' => 2, 'name' => 'Производство'],
            ['id' => 3, 'name' => 'Печать'],
            ['id' => 4, 'name' => 'Выпущена'],
        ]);
    }
}
