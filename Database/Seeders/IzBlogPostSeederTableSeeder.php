<?php namespace Modules\Izblog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class IzBlogPostSeederTableSeeder extends Seeder {

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
            DB::table('izblog_post')->insert(
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