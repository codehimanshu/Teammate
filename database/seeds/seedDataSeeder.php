<?php

use App\Game;
use App\User;
use Illuminate\Database\Seeder;

class seedDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dd('test');
        factory(User::class, 10)->create()->each(function ($u) {
            $u->games()->save(factory(Game::class)->make());
        });
    }
}
