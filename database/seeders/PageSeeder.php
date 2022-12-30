<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pages = array(
            array('id' => '1', 'title' => 'Home', 'slug' => 'home', 'meta_title' => 'Home', 'meta_keywords' => 'Home', 'meta_desc' => 'Home', 'is_main' => '1', 'status' => '1', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('id' => '2', 'title' => 'About OncologyMe', 'slug' => 'about-oncology-me', 'meta_title' => 'About OncologyMe', 'meta_keywords' => 'About OncologyMe', 'meta_desc' => 'About OncologyMe', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('id' => '3', 'title' => 'Contact Us', 'slug' => 'contact-us', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '4', 'title' => 'Editorial Board', 'slug' => 'Editorial', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '5', 'title' => 'Rights and permissions', 'slug' => 'rights', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '6', 'title' => 'Privacy Policy', 'slug' => 'privacy-policy', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '7', 'title' => 'All topics', 'slug' => 'all-topics', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '8', 'title' => 'Recent topics', 'slug' => 'recent-topics', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '9', 'title' => 'news', 'slug' => 'news', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '10', 'title' => 'watch', 'slug' => 'watch', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '11', 'title' => 'articles', 'slug' => 'articles', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '12', 'title' => 'Podcasts', 'slug' => 'podcasts', 'meta_title' => 'Contact Us', 'meta_keywords' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),

        );


        $sections = array(
            array('id' => '69', 'page_id' => '1', 'title' => 'Millions of jobs. ', 'subtitle' => 'Find the one that’s right for you.', 'plain_text' => 'Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.', 'rich_text' => NULL, 'img' => '8B0CrEohl5DvmxJFbID37B1XKyXDcji9l2hMeVQ8.jpg', 'cta_text' => 'Search Jobs', 'cta_link' => '#', 'layout' => '1', 'status' => '1', 'sort' => '1'),
            array('id' => '70', 'page_id' => '1', 'title' => 'Featured Jobs Listings', 'subtitle' => 'A Better Career is Out There', 'plain_text' => 'We\'ll help you find it. We\'re your first step to becoming everything you want to be.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => 'View All Jobs', 'cta_link' => '#', 'layout' => '0', 'status' => '1', 'sort' => '2'),
            array('id' => '71', 'page_id' => '1', 'title' => 'Top Candidates', 'subtitle' => NULL, 'plain_text' => 'We\'ll help you find it. We\'re your first step to becoming everything you want to be.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '3'),
            array('id' => '72', 'page_id' => '1', 'title' => 'How it Works', 'subtitle' => NULL, 'plain_text' => 'Medlur is packed with features that make finding, hiring and working with the best talent effortless and secure.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '4'),
            array('id' => '73', 'page_id' => '1', 'title' => 'Sign up', 'subtitle' => NULL, 'plain_text' => 'Over the coming years Ismail worked with a number of remittance businesses as well as international policy makers.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '5'),
            array('id' => '74', 'page_id' => '1', 'title' => 'Post a job', 'subtitle' => NULL, 'plain_text' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '75', 'page_id' => '1', 'title' => 'Hire a talent', 'subtitle' => NULL, 'plain_text' => 'Millions of us now rely on Mobile Money services instead of bank accounts, so we offer transfers directly to them.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '7'),
            array('id' => '76', 'page_id' => '1', 'title' => 'Latest News', 'subtitle' => 'Stay Updated with our', 'plain_text' => NULL, 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '8'),
            array('id' => '77', 'page_id' => '1', 'title' => 'Our Partners', 'subtitle' => NULL, 'plain_text' => NULL, 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '9'),
            array('id' => '46', 'page_id' => '7', 'title' => 'About Our Company', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'plain_text' => 'In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.', 'rich_text' => NULL, 'img' => '7wcS0PFLQ49064EMUyIWYGyij9I0wsjdwhWd123e.png', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '1'),
        );

        DB::table('pages')->insert($pages);
        DB::table('sections')->insert($sections);
    }
}
