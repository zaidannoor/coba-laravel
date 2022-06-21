<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        
        // User::create([
        //     'name' => 'Zaidan Noor Irfan' ,
        //     'email' => 'zaidannoor@gmail.com' ,
        //     'password'=> bcrypt('123')
        // ]);

        Category::create([
            'name' => 'Programing' ,
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Design' ,
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Personal' ,
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur' ,
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur id distinctio illo dolor aliquid adipisci. Fugiat rem necessitatibus architecto ut illum enim tempora debitis accusantium aut repellendus dolorem animi deserunt sit officia ducimus, quasi maiores omnis repudiandae, provident</p><p>ab nemo nostrum quos. Harum praesentium ratione id, provident quibusdam autem labore voluptatibus quisquam expedita eos voluptas dignissimos molestias doloremque fugiat dolorem itaque tenetur temporibus fuga, natus adipisci voluptate sequi amet! Quod doloribus recusandae aspernatur beatae delectus, nisi nesciunt voluptate ut necessitatibus reiciendis dolore aperiam corrupti libero voluptas quibusdam minus reprehenderit excepturi! Minima consectetur et aut nisi optio.</p>',
        //     'category_id' => 1 ,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur' ,
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur id distinctio illo dolor aliquid adipisci. Fugiat rem necessitatibus architecto ut illum enim tempora debitis accusantium aut repellendus dolorem animi deserunt sit officia ducimus, quasi maiores omnis repudiandae, provident</p><p>ab nemo nostrum quos. Harum praesentium ratione id, provident quibusdam autem labore voluptatibus quisquam expedita eos voluptas dignissimos molestias doloremque fugiat dolorem itaque tenetur temporibus fuga, natus adipisci voluptate sequi amet! Quod doloribus recusandae aspernatur beatae delectus, nisi nesciunt voluptate ut necessitatibus reiciendis dolore aperiam corrupti libero voluptas quibusdam minus reprehenderit excepturi! Minima consectetur et aut nisi optio.</p>',
        //     'category_id' => 1 ,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur' ,
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores, ad blanditiis consequatur id distinctio illo dolor aliquid adipisci. Fugiat rem necessitatibus architecto ut illum enim tempora debitis accusantium aut repellendus dolorem animi deserunt sit officia ducimus, quasi maiores omnis repudiandae, provident</p><p>ab nemo nostrum quos. Harum praesentium ratione id, provident quibusdam autem labore voluptatibus quisquam expedita eos voluptas dignissimos molestias doloremque fugiat dolorem itaque tenetur temporibus fuga, natus adipisci voluptate sequi amet! Quod doloribus recusandae aspernatur beatae delectus, nisi nesciunt voluptate ut necessitatibus reiciendis dolore aperiam corrupti libero voluptas quibusdam minus reprehenderit excepturi! Minima consectetur et aut nisi optio.</p>',
        //     'category_id' => 3 ,
        //     'user_id' => 1
        // ]);
        
    }
}
