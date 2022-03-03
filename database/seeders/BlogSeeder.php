<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 12; $i++) {
            Blog::create([
                'title' => 'Quasi vitae vel amet earum aut. Qui eius amet molestias. Cupiditate aut maxime suscipit sint eveniet recusandae dolores illo ut. Libero consequuntur minima necessitatibus eius. Consequatur aperiam odit itaque.',
                'image' => 'none',
                'content' => 'Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et. Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et. Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et.Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et.Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et.Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et.Totam odio quos animi modi quod et quas. Magni ut commodi praesentium ut. Corrupti repudiandae ut asperiores non natus officiis ut omnis. Reprehenderit odio nihil adipisci voluptatem ipsam. Quibusdam fugiat odit. Est aut aut quaerat omnis sapiente eaque ipsam. Rerum aut voluptates deserunt laudantium voluptas ut commodi velit esse. Voluptatem sit quidem vel eius. Nisi unde culpa occaecati sint vel laboriosam. Libero libero esse exercitationem quae nesciunt quisquam nihil et.',
                'blog_category_id' => 1,
                'slug' => Str::slug('Quasi vitae vel amet earum aut. Qui eius amet molestias. Cupiditate aut maxime suscipit sint eveniet recusandae dolores illo ut. Libero consequuntur minima necessitatibus eius. Consequatur aperiam odit itaque.'),
            ]);
        }
    }
}
