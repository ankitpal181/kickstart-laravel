<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 1; $i <= 12; $i ++ ) {
            Blog::create( [
                'title'                => 'Title For The Post - ' . $i,
                'slug'                 => 'blog-post-' . $i,
                'content'              => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit lectus. Nam tincidunt elit dui, vel aliquet magna hendrerit at. Aenean vel suscipit nun <h2>The Heading Two </h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit lectus. Nam tincidunt elit dui, vel aliquet magna hendrerit at. Aenean vel suscipit nun<h3>The Heading Three </h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit lectus. Nam tincidunt elit dui, vel aliquet magna hendrerit at. Aenean vel suscipit nunc. Maecenas dignissim dui nunc, ac finibus odio blandit eu. Sed aliquam dui condimentum fermentum consequat. Aliquam erat volutpat',
                'excerpt'              => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit lectus. Nam tincidunt elit dui, vel aliquet magna hendrerit at',
            ] );
        }
    }
}
