<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('job_categories')-> insert([
            ['id' => 1, 'name' => '事業開発'],
            ['id' => 2, 'name' => 'マーケティング'],
            ['id' => 3, 'name' => '人事'],
            ['id' => 4, 'name' => 'セールス'],
            ['id' => 5, 'name' => '広報'],
        ]);
        \App\Models\Job::factory(100)->create();
    }
}
