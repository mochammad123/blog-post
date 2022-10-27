<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();
        Post::factory(100)->create();

        User::create([
            'name' => 'Faisal',
            'username' => 'faisal',
            'email' => 'faisal@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Mochammad',
        //     'email' => 'mochammad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolores labore enim reiciendis deserunt. Perspiciatis accusamus minus, dicta dolores nemo molestiae porro est aspernatur consequuntur at totam accusantium aut aliquid nostrum ipsam quisquam harum blanditiis, numquam repudiandae voluptate sequi nobis rem unde. excepturi recusandae quasi, hic magni ex. Quis dolor dolore exercitationem explicabo harum, reprehenderit esse aliquid voluptas nam omnis repudiandae totam. Eos sapiente, quo culpa ratione qui iusto, ullam doloribus maxime omnis quia accusantium laborum itaque minus eligendi ab quisquam eaque molestiae est? Quos dolorem itaque voluptate. Nostrum minima tempora consequatur quasi quas, vel tempore eius sequi beatae, odit explicabo laboriosam accusamus? Fugit vero culpa dolore, soluta voluptatum corporis exercitationem temporibus at obcaecati itaque vel optio assumenda sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias reiciendis veritatis similique porro qui, sequi perspiciatis nisi alias, et mollitia praesentium consequuntur eveniet, id fuga. Amet, enim est! Omnis quisquam sequi cum, nemo quis doloremque culpa placeat harum ratione dolore iusto numquam vitae quae libero modi perspiciatis commodi illo sint natus temporibus qui soluta aspernatur mollitia. Fugiat sint quisquam, a consequatur, itaque at officiis provident vel enim illo quam, reiciendis facere! Illum cupiditate repudiandae, nostrum molestias minus id ea quaerat iusto aliquam, omnis eligendi porro ipsam quisquam perferendis tenetur voluptas quibusdam optio asperiores corporis voluptates. Sint illo nisi possimus minus, officia laudantium ullam, nihil iure facilis provident velit perspiciatis sed dolore animi in fugiat voluptatum, corporis dolorem tempora. Eaque veniam repellat corporis distinctio deserunt maxime fuga minima! Voluptate in fuga eum maxime quidem, ipsum, quisquam omnis sint qui iusto similique tempora eius! Nisi enim aspernatur consequuntur beatae pariatur eius corporis debitis voluptatem aut saepe voluptatibus dolores rerum quia eum quos ea obcaecati cupiditate, non doloremque placeat eveniet, quasi culpa eos. Incidunt sequi, pariatur quam commodi minus iste! Quaerat vitae iure similique tenetur quos molestiae aspernatur rerum, quibusdam, quo doloremque rem, totam enim aliquid officia necessitatibus magni nobis est consectetur a.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolores labore enim reiciendis deserunt. Perspiciatis accusamus minus, dicta dolores nemo molestiae porro est aspernatur consequuntur at totam accusantium aut aliquid nostrum ipsam quisquam harum blanditiis, numquam repudiandae voluptate sequi nobis rem unde. excepturi recusandae quasi, hic magni ex. Quis dolor dolore exercitationem explicabo harum, reprehenderit esse aliquid voluptas nam omnis repudiandae totam. Eos sapiente, quo culpa ratione qui iusto, ullam doloribus maxime omnis quia accusantium laborum itaque minus eligendi ab quisquam eaque molestiae est? Quos dolorem itaque voluptate. Nostrum minima tempora consequatur quasi quas, vel tempore eius sequi beatae, odit explicabo laboriosam accusamus? Fugit vero culpa dolore, soluta voluptatum corporis exercitationem temporibus at obcaecati itaque vel optio assumenda sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias reiciendis veritatis similique porro qui, sequi perspiciatis nisi alias, et mollitia praesentium consequuntur eveniet, id fuga. Amet, enim est! Omnis quisquam sequi cum, nemo quis doloremque culpa placeat harum ratione dolore iusto numquam vitae quae libero modi perspiciatis commodi illo sint natus temporibus qui soluta aspernatur mollitia. Fugiat sint quisquam, a consequatur, itaque at officiis provident vel enim illo quam, reiciendis facere! Illum cupiditate repudiandae, nostrum molestias minus id ea quaerat iusto aliquam, omnis eligendi porro ipsam quisquam perferendis tenetur voluptas quibusdam optio asperiores corporis voluptates. Sint illo nisi possimus minus, officia laudantium ullam, nihil iure facilis provident velit perspiciatis sed dolore animi in fugiat voluptatum, corporis dolorem tempora. Eaque veniam repellat corporis distinctio deserunt maxime fuga minima! Voluptate in fuga eum maxime quidem, ipsum, quisquam omnis sint qui iusto similique tempora eius! Nisi enim aspernatur consequuntur beatae pariatur eius corporis debitis voluptatem aut saepe voluptatibus dolores rerum quia eum quos ea obcaecati cupiditate, non doloremque placeat eveniet, quasi culpa eos. Incidunt sequi, pariatur quam commodi minus iste! Quaerat vitae iure similique tenetur quos molestiae aspernatur rerum, quibusdam, quo doloremque rem, totam enim aliquid officia necessitatibus magni nobis est consectetur a.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolores labore enim reiciendis deserunt. Perspiciatis accusamus minus, dicta dolores nemo molestiae porro est aspernatur consequuntur at totam accusantium aut aliquid nostrum ipsam quisquam harum blanditiis, numquam repudiandae voluptate sequi nobis rem unde. excepturi recusandae quasi, hic magni ex. Quis dolor dolore exercitationem explicabo harum, reprehenderit esse aliquid voluptas nam omnis repudiandae totam. Eos sapiente, quo culpa ratione qui iusto, ullam doloribus maxime omnis quia accusantium laborum itaque minus eligendi ab quisquam eaque molestiae est? Quos dolorem itaque voluptate. Nostrum minima tempora consequatur quasi quas, vel tempore eius sequi beatae, odit explicabo laboriosam accusamus? Fugit vero culpa dolore, soluta voluptatum corporis exercitationem temporibus at obcaecati itaque vel optio assumenda sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias reiciendis veritatis similique porro qui, sequi perspiciatis nisi alias, et mollitia praesentium consequuntur eveniet, id fuga. Amet, enim est! Omnis quisquam sequi cum, nemo quis doloremque culpa placeat harum ratione dolore iusto numquam vitae quae libero modi perspiciatis commodi illo sint natus temporibus qui soluta aspernatur mollitia. Fugiat sint quisquam, a consequatur, itaque at officiis provident vel enim illo quam, reiciendis facere! Illum cupiditate repudiandae, nostrum molestias minus id ea quaerat iusto aliquam, omnis eligendi porro ipsam quisquam perferendis tenetur voluptas quibusdam optio asperiores corporis voluptates. Sint illo nisi possimus minus, officia laudantium ullam, nihil iure facilis provident velit perspiciatis sed dolore animi in fugiat voluptatum, corporis dolorem tempora. Eaque veniam repellat corporis distinctio deserunt maxime fuga minima! Voluptate in fuga eum maxime quidem, ipsum, quisquam omnis sint qui iusto similique tempora eius! Nisi enim aspernatur consequuntur beatae pariatur eius corporis debitis voluptatem aut saepe voluptatibus dolores rerum quia eum quos ea obcaecati cupiditate, non doloremque placeat eveniet, quasi culpa eos. Incidunt sequi, pariatur quam commodi minus iste! Quaerat vitae iure similique tenetur quos molestiae aspernatur rerum, quibusdam, quo doloremque rem, totam enim aliquid officia necessitatibus magni nobis est consectetur a.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolores labore enim reiciendis deserunt. Perspiciatis accusamus minus, dicta dolores nemo molestiae porro est aspernatur consequuntur at totam accusantium aut aliquid nostrum ipsam quisquam harum blanditiis, numquam repudiandae voluptate sequi nobis rem unde. excepturi recusandae quasi, hic magni ex. Quis dolor dolore exercitationem explicabo harum, reprehenderit esse aliquid voluptas nam omnis repudiandae totam. Eos sapiente, quo culpa ratione qui iusto, ullam doloribus maxime omnis quia accusantium laborum itaque minus eligendi ab quisquam eaque molestiae est? Quos dolorem itaque voluptate. Nostrum minima tempora consequatur quasi quas, vel tempore eius sequi beatae, odit explicabo laboriosam accusamus? Fugit vero culpa dolore, soluta voluptatum corporis exercitationem temporibus at obcaecati itaque vel optio assumenda sequi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias reiciendis veritatis similique porro qui, sequi perspiciatis nisi alias, et mollitia praesentium consequuntur eveniet, id fuga. Amet, enim est! Omnis quisquam sequi cum, nemo quis doloremque culpa placeat harum ratione dolore iusto numquam vitae quae libero modi perspiciatis commodi illo sint natus temporibus qui soluta aspernatur mollitia. Fugiat sint quisquam, a consequatur, itaque at officiis provident vel enim illo quam, reiciendis facere! Illum cupiditate repudiandae, nostrum molestias minus id ea quaerat iusto aliquam, omnis eligendi porro ipsam quisquam perferendis tenetur voluptas quibusdam optio asperiores corporis voluptates. Sint illo nisi possimus minus, officia laudantium ullam, nihil iure facilis provident velit perspiciatis sed dolore animi in fugiat voluptatum, corporis dolorem tempora. Eaque veniam repellat corporis distinctio deserunt maxime fuga minima! Voluptate in fuga eum maxime quidem, ipsum, quisquam omnis sint qui iusto similique tempora eius! Nisi enim aspernatur consequuntur beatae pariatur eius corporis debitis voluptatem aut saepe voluptatibus dolores rerum quia eum quos ea obcaecati cupiditate, non doloremque placeat eveniet, quasi culpa eos. Incidunt sequi, pariatur quam commodi minus iste! Quaerat vitae iure similique tenetur quos molestiae aspernatur rerum, quibusdam, quo doloremque rem, totam enim aliquid officia necessitatibus magni nobis est consectetur a.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
