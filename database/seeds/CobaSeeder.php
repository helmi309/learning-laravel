<?php

use Illuminate\Database\Seeder;

class CobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('TCoba')->truncate();


        DB::table('TCoba')->insert([
            'name' => str_random(35)

        ]);

    }

}
