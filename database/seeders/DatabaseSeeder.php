<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => "Dimas Caka",
        //     'email' => 'dimascakaramanda01@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => "Daniel Dwi",
        //     'email' => 'daniel@gmail.com',
        //     'password' => bcrypt('45678')
        // ]);
        // User::create([
        //     'name' => "Surya Winata",
        //     'email' => 'surya@gmail.com',
        //     'password' => bcrypt('09876')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus, inventore sit tenetur aut, maxime distinctio, harum iusto adipisci velit quibusdam excepturi hic? Accusantium assumenda quisquam sapiente consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt provident ut id nisi magnam ad, numquam maiores veritatis dolorum odio, omnis vel voluptas facilis illum deleniti, excepturi atque. Reiciendis eveniet voluptates quasi possimus voluptatem, optio temporibus maxime commodi labore hic ea nesciunt, alias delectus eius quisquam odit nam aspernatur id expedita harum beatae pariatur autem tenetur fugit? Repellat, natus! Asperiores quos exercitationem nesciunt ab perferendis et eius quo accusantium voluptas illo mollitia, dolores consequatur architecto. Sint ratione natus, blanditiis officia, nam omnis nesciunt quas eligendi similique aliquam rem illo quod. Ex laudantium deleniti commodi. Dignissimos magni omnis optio dolores necessitatibus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus, inventore sit tenetur aut, maxime distinctio, harum iusto adipisci velit quibusdam excepturi hic? Accusantium assumenda quisquam sapiente consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt provident ut id nisi magnam ad, numquam maiores veritatis dolorum odio, omnis vel voluptas facilis illum deleniti, excepturi atque. Reiciendis eveniet voluptates quasi possimus voluptatem, optio temporibus maxime commodi labore hic ea nesciunt, alias delectus eius quisquam odit nam aspernatur id expedita harum beatae pariatur autem tenetur fugit? Repellat, natus! Asperiores quos exercitationem nesciunt ab perferendis et eius quo accusantium voluptas illo mollitia, dolores consequatur architecto. Sint ratione natus, blanditiis officia, nam omnis nesciunt quas eligendi similique aliquam rem illo quod. Ex laudantium deleniti commodi. Dignissimos magni omnis optio dolores necessitatibus?',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus, inventore sit tenetur aut, maxime distinctio, harum iusto adipisci velit quibusdam excepturi hic? Accusantium assumenda quisquam sapiente consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt provident ut id nisi magnam ad, numquam maiores veritatis dolorum odio, omnis vel voluptas facilis illum deleniti, excepturi atque. Reiciendis eveniet voluptates quasi possimus voluptatem, optio temporibus maxime commodi labore hic ea nesciunt, alias delectus eius quisquam odit nam aspernatur id expedita harum beatae pariatur autem tenetur fugit? Repellat, natus! Asperiores quos exercitationem nesciunt ab perferendis et eius quo accusantium voluptas illo mollitia, dolores consequatur architecto. Sint ratione natus, blanditiis officia, nam omnis nesciunt quas eligendi similique aliquam rem illo quod. Ex laudantium deleniti commodi. Dignissimos magni omnis optio dolores necessitatibus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus, inventore sit tenetur aut, maxime distinctio, harum iusto adipisci velit quibusdam excepturi hic? Accusantium assumenda quisquam sapiente consectetur,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt provident ut id nisi magnam ad, numquam maiores veritatis dolorum odio, omnis vel voluptas facilis illum deleniti, excepturi atque. Reiciendis eveniet voluptates quasi possimus voluptatem, optio temporibus maxime commodi labore hic ea nesciunt, alias delectus eius quisquam odit nam aspernatur id expedita harum beatae pariatur autem tenetur fugit? Repellat, natus! Asperiores quos exercitationem nesciunt ab perferendis et eius quo accusantium voluptas illo mollitia, dolores consequatur architecto. Sint ratione natus, blanditiis officia, nam omnis nesciunt quas eligendi similique aliquam rem illo quod. Ex laudantium deleniti commodi. Dignissimos magni omnis optio dolores necessitatibus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
