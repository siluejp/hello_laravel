<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['name' => 'John Doe', 'mail' => 'taro@example.com', 'age' => 35, ];
        DB::table('people')->insert($param);
        $param = ['name' => 'Yamda ', 'mail' => 'yamada@example.com', 'age' => 12, ];
        DB::table('people')->insert($param);
        $param = ['name' => 'hanako', 'mail' => 'hanako@example.com', 'age' => 54, ];
        DB::table('people')->insert($param);

    }
}
