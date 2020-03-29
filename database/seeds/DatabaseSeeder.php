<?php

use Illuminate\Database\Seeder;
use App\catogary;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(catogary::class,30)->create();
    }
}
