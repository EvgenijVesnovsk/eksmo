<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\BookEnum;

class BookStatusTransitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_status_transitions')->insert([
            ['id' => 1, 'from_id' => BookEnum::DRAFT, 'to_id' => BookEnum::PRODUCTION],
            ['id' => 2, 'from_id' => BookEnum::DRAFT, 'to_id' => BookEnum::PRINT],

            ['id' => 3, 'from_id' => BookEnum::PRODUCTION, 'to_id' => BookEnum::DRAFT],
            ['id' => 4, 'from_id' => BookEnum::PRODUCTION, 'to_id' => BookEnum::PRINT],

            ['id' => 5, 'from_id' => BookEnum::PRINT, 'to_id' => BookEnum::DRAFT],
            ['id' => 6, 'from_id' => BookEnum::PRINT, 'to_id' => BookEnum::PRODUCTION],
            ['id' => 7, 'from_id' => BookEnum::PRINT, 'to_id' => BookEnum::RELEASED],

            ['id' => 8, 'from_id' => BookEnum::RELEASED, 'to_id' => BookEnum::DRAFT],
            ['id' => 9, 'from_id' => BookEnum::RELEASED, 'to_id' => BookEnum::PRODUCTION],
            ['id' => 10, 'from_id' => BookEnum::RELEASED, 'to_id' => BookEnum::PRINT],
        ]);
    }
}
