<?php

use Illuminate\Database\Seeder;
class articleTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $article=factory(App\article::class, 5)->create();
    }
}
