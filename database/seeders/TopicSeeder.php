<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent_topics = array(
            array('title' => 'Solid Tumors', 'slug' => 'solid-tumors', 'is_parent' => true, 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Hematologic', 'slug' => 'hematologic', 'is_parent' => true, 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Issues in Oncology', 'slug' => 'issues-in-oncology', 'is_parent' => true, 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Supportive Care', 'slug' => 'supportive-care', 'is_parent' => true, 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        );

        $topics = array(
            array('title' => 'Bladder Cancer', 'slug' => 'bladder-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors',  'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Colorectal Cancer', 'slug' => 'colorectal-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Pancreatic Cancer', 'slug' => 'pancreatic-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Hepatobiliary Cancer', 'slug' => 'hepatobiliary-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Prostate Cancer', 'slug' => 'prostate-cancer', 'is_main' => true, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Thyroid Cancer', 'slug' => 'thyroid-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Breast Cancer', 'slug' => 'breast-cancer', 'is_main' => true, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Gastroesophageal Cancer', 'slug' => 'gastroesophageal-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Lung Cancer', 'slug' => 'lung-cancer', 'is_main' => true, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Head and Neck Cancer', 'slug' => 'head-and-neck-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Sarcoma', 'slug' => 'sarcoma-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Neuroendocrine Tumors', 'slug' => 'neuroendocrine-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'CNS Cancers', 'slug' => 'cns-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Gastrointestinal Cancer', 'slug' => 'gastrointestinal-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Kidney Cancer', 'slug' => 'kidney-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Gynecologic Cancers', 'slug' => 'gynecologic-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'Skin Cancer', 'slug' => 'skin-cancer', 'is_main' => false, 'is_parent' => false, 'parent_id' => '1', 'parent_name' => 'Solid Tumors', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),

        );

        $categories = array(
        array('title' => 'FDA update', 'slug' => 'fda-update', 'is_main' => true, 'featured_image' => null, 'post_type' => 'news', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Meeting Coverage', 'slug' => 'meeting-coverage', 'is_main' => true, 'featured_image' => null, 'post_type' => 'news', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Journal Spotlight', 'slug' => 'journal-spotlight', 'is_main' => true, 'featured_image' => null, 'post_type' => 'news', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
       
        array('title' => 'Lung Cancer', 'slug' => 'podcasts-1', 'is_main' => true, 'featured_image' => null, 'post_type' => 'podcasts', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Kidney Cancer', 'slug' => 'podcasts-2', 'is_main' => true, 'featured_image' => null, 'post_type' => 'podcasts', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Skin Cancer', 'slug' => 'podcasts-3', 'is_main' => true, 'featured_image' => null, 'post_type' => 'podcasts', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
     
        array('title' => 'Conference summaries', 'slug' => 'conference-summaries', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        // array('title' => 'Conference summaries', 'slug' => 'conference-summaries-1', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        // array('title' => 'Conference summaries', 'slug' => 'conference-summaries-2', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Clinical Trial Summaries', 'slug' => 'clinical-trial-summaries', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Study presentations', 'slug' => 'study-presentations', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        // array('title' => 'articles 5', 'slug' => 'articles-4', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        // array('title' => 'articles 4', 'slug' => 'articles-5', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        // array('title' => 'articles 6', 'slug' => 'articles-6', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'articles', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
     
        array('title' => 'cancer', 'slug' => 'videos-1', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'summaries', 'slug' => 'videos-2', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Trial', 'slug' => 'videos-3', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'presentations', 'slug' => 'videos-4', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Lung Cancer', 'slug' => 'videos-5', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Lung Cancer', 'slug' => 'videos-6', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Spotlight', 'slug' => 'videos-5', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        array('title' => 'Sarcoma', 'slug' => 'videos-6', 'is_main' => true, 'featured_image' => 'post.jpg', 'post_type' => 'videos', 'featured_image' => 'post.jpg', 'meta_title' => null, 'meta_desc' => null, 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
   

        );


        DB::table('topics')->insert($parent_topics);
        DB::table('topics')->insert($topics);
        DB::table('categories')->insert($categories);


    }
}
