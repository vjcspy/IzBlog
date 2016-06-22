<?php namespace Modules\IzBlog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
use Modules\IzBlog\Entities\Post;

/**
 * Class IzBlogPostSeederTableSeeder
 *
 * @package Modules\Izblog\Database\Seeders
 */
class IzBlogPostSeederTableSeeder extends Seeder {

    /**
     * @var \Modules\IzBlog\Entities\Post
     */
    protected $post;

    /**
     * IzBlogPostSeederTableSeeder constructor.
     *
     * @param \Modules\IzBlog\Entities\Post $post
     */
    public function __construct(Post $post) {
        $this->post = $post;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = \Faker\Factory::create();
        Model::unguard();

        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            $this->post->create(
                [
                    'post_author'    => $faker->randomDigit,
                    'post_date'      => $faker->dateTime,
                    'post_content'   => $faker->text,
                    'post_title'     => $faker->text,
                    'post_status'    => $faker->text(5),
                    'post_password'  => $faker->text(5),
                    'post_name'      => $faker->text(100),
                    'post_type'      => $faker->text(5),
                    'post_parent_id' => $faker->randomDigit,
                    'comment_count'  => $faker->randomNumber(2),
                ]);
        }
        Model::reguard();
    }

}