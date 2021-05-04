<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('failed_jobs')->insert([
            'user_id' => '2',
            'subject1' => 'english',
            'subject2' => 'mathes',
            'subject3' => 'yoruba',

        ]);
    }
}
