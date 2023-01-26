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
            array('id' => '1', 'page_title' => 'Home', 'slug' => 'home', 'meta_title' => 'Home', 'meta_desc' => 'Home', 'is_main' => '1', 'status' => '1', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('id' => '2', 'page_title' => 'About OncologyMe', 'slug' => 'about-oncology-me', 'meta_title' => 'About OncologyMe', 'meta_desc' => 'About OncologyMe', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('id' => '3', 'page_title' => 'Contact Us', 'slug' => 'contact-us', 'meta_title' => 'Contact Us', 'meta_desc' => 'Contact Us', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '4', 'page_title' => 'Editorial Board', 'slug' => 'editorial', 'meta_title' => 'Editorial Board', 'meta_desc' => 'Editorial Board', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '5', 'page_title' => 'Rights and permissions', 'slug' => 'rights-and-permissions', 'meta_title' => 'Rights and permissions', 'meta_desc' => 'Rights and permissions', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '6', 'page_title' => 'Privacy Policy', 'slug' => 'privacy-policy', 'meta_title' => 'Privacy Policy', 'meta_desc' => 'Privacy Policy', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '7', 'page_title' => 'Topics', 'slug' => 'all-topics', 'meta_title' => 'Topics', 'meta_desc' => 'Topics desc', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '8', 'page_title' => 'Oncology News', 'slug' => 'all-news', 'meta_title' => 'News', 'meta_desc' => 'News desc', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '9', 'page_title' => 'Oncology Watch', 'slug' => 'all-videos', 'meta_title' => 'Videos', 'meta_desc' => 'Videos desc', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '10', 'page_title' => 'Articles', 'slug' => 'all-articles', 'meta_title' => 'Articles', 'meta_desc' => 'Articles desc', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
            array('id' => '11', 'page_title' => 'Podcasts', 'slug' => 'all-podcasts', 'meta_title' => 'Podcasts', 'meta_desc' => 'Podcasts desc', 'is_main' => '0', 'status' => '1', 'created_at' => '2022-08-19 05:13:21', 'updated_at' => '2022-08-19 05:13:21'),
        );


        $sections = array(
            array('id' => '1', 'page_id' => '2', 'title' => 'ABOUT ONCOLOGYME', 'subtitle' => NULL, 'content' => '“Oncology Medical Education” is an oncology-specific healthcare education platform that creates a wide spectrum of virtual scientific activities through a user-friendly approach that is culturally adapted to the Middle-East Arab practice Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '2', 'page_id' => '2', 'title' => 'Our Vision', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '3', 'page_id' => '2', 'title' => 'Our Mission', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => 'icon1.png', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '4', 'page_id' => '2', 'title' => 'Our Goal', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => 'icon2.png', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '5', 'page_id' => '2', 'title' => 'Our Services', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => 'vid3.jpg', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '6', 'page_id' => '2', 'title' => 'Our Strategy', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'Millions of us now rely on Mobile Money services instead of bank accounts, so we offer transfers directly to them.', 'rich_text' => NULL, 'img' => 'vid3.jpg', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '7'),
            array('id' => '7', 'page_id' => '4', 'title' => 'ABOUT OUR COMPANY', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'And because we understand the importance of staying connected, Nimble enables people to send mobile airtime top-ups.', 'rich_text' => NULL, 'img' => 'vid3.jpg', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '6'),
            array('id' => '8', 'page_id' => '4', 'title' => 'OUR FEATURED SERVICES', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'Millions of us now rely on Mobile Money services instead of bank accounts, so we offer transfers directly to them.', 'rich_text' => NULL, 'img' => 'vid3.jpg', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '7'),
            array('id' => '9', 'page_id' => '4', 'title' => 'ABOUT OUR COMPANY', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'Millions of us now rely on Mobile Money services instead of bank accounts, so we offer transfers directly to them.', 'rich_text' => NULL, 'img' => 'vid3.jpg', 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '0', 'status' => '1', 'sort' => '8'),
            array('id' => '10', 'page_id' => '5', 'title' => 'About Our Company', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '1'),
            array('id' => '11', 'page_id' => '6', 'title' => 'About Our Company', 'subtitle' => 'Pellentesque accumsan nisl varius risus mollis varius sed eu neque Cras fringilla sagittis rhoncus.', 'content' => 'In accumsan pulvinar maximus. Phasellus elementum rutrum dolor id mollis aece et lectus accumsan ipsum facilisis malesuada vel ut diam. Pellentesque vitae tempus sapien, vel aliquam nulla. In in fringilla massa, id consectetur lacus tibul.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a auctor urna, et porttitor lorem. Fusce at neque et orci rhoncus hendrerit. Praesent nec quam ac orci placerat semper.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '1'),
            array('id' => '12', 'page_id' => '9', 'title' => 'OncologyMe', 'subtitle' => 'Newsreels', 'content' => 'OncologyMe Newsreels help clinicians stay up to date on news in the world of clinical oncology and hematology. Newsreels feature leading authorities presenting high-impact clinical findings from major oncology meetings and on timely topics.', 'rich_text' => NULL, 'img' => NULL, 'cta_text' => NULL, 'cta_link' => NULL, 'layout' => '1', 'status' => '1', 'sort' => '1'),
        );

        $settings = array(
            array(
                'id' => '1', 
                'tagline' => 'For healthcare professionals only',
                'about' => '“Oncology Medical Education” is an oncology-specific healthcare education platform that creates a wide spectrum of virtual scientific activities through a user-friendly approach that is culturally adapted to the Middle-East Arab practice.', 
                'short_Description' => 'For healthcare professionals only.', 
                'location' => '37, Omarat Madinat Al Fath, Al Hadiqah Ad Dawleyah, Embassies District, Nasr City, Cairo Governorate, Egypt', 
                'email' => 'info@oncologyme.com', 
                'phone' => '+2 0155 945 6778', 
                'map_link' => 'https://goo.gl/maps/Sksd4iPevzt5tuiw8', 
                'fb' => 'https://www.facebook.com/oncologyme',
                'youtube' => 'https://www.youtube.com/channel/UC7cUtEq-hpsbmer5nRUOw5A',
                'linkedin' => 'https://www.linkedin.com/company/oncologyme/',
                'feedback' => 'https://docs.google.com/forms/d/e/1FAIpQLSdW2J-vqW8l4YdfTe7zJfwlQp_MGDbqppvDI-MeKn1Wg8Pjqw/viewform',
            ),
        );

        $categories = array(
            array('id' => '1', 'title' => 'Study Presentations', 'slug' => 'study-presentations', 'is_main' => false, 'featured_image' => null, 'post_type' => 'articles', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),

            );
    
    
        
        DB::table('pages')->insert($pages);
        DB::table('sections')->insert($sections);
        DB::table('settings')->insert($settings);
        DB::table('categories')->insert($categories);

    }
}
