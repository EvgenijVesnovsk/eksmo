<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\BookEnum;

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
            ['id' => BookEnum::DRAFT, 'name' => 'Черновик'],
            ['id' => BookEnum::PRODUCTION, 'name' => 'Производство'],
            ['id' => BookEnum::PRINT, 'name' => 'Печать'],
            ['id' => BookEnum::RELEASED, 'name' => 'Выпущена'],
        ]);
    }
}
