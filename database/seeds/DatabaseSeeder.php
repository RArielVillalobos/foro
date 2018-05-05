<?php

use Illuminate\Database\Seeder;
use App\Forum;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Forum::class,100)->create();
    }
}
