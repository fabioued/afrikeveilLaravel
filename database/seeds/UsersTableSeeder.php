<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

      $user=  App\User::create([
        
            'name'      => 'afrik Eveil',
            'email'     => 'afrikeveil@yahoo.fr',
            'password'  => bcrypt('afrikeveil'),
            'admin'     => 1
        
        ]);

        App\Profile::create([

            'user_id'   => $user->id,
            'avatar'    => 'uploads/avatar/avatar.png',
            'about'     => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eveniet facere nisi velit voluptatem! Assumenda cupiditate deleniti enim, eum illum iste minus neque perferendis praesentium quas ratione repellendus veritatis vero?',
            'facebook'  => 'facebook.com'

        ]);
    }
}
