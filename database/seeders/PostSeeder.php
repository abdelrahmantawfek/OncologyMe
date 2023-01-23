<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            //news seeders
            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-1', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-2', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-3', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-4', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-5', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-6', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-7', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-8', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-9', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slug-10', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),
            
            // videos seeder
            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-1', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-2', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-3', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-4', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-5', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugv-6', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'videos',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            //articles seeders
            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-1', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-2', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-3', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-4', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-5', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-6', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-7', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-8', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-9', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-10', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'sluga-11', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'articles',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            // posdcasts
            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-1', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-2', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-3', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-4', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-5', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-6', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-7', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-8', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-9', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-10', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'slugp-11', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'podcasts',
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),


        
        );

        // highlights

        $highlights = array(
            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'high-1', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'highlights' => true,
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'high-2', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'highlights' => true,
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),

            array(
                'title' => 'Switch to Fulvestrant Palbociclib With Rising ESR1 Mutation Level in Blood During Aromatase Inhibitor Palbociclib Therapy in Patients With Advanced Breast Cancer',
                'slug' => 'high-3', 
                'excerpt' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib...',
                'content' => 'As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..

                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..
                
                As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib... As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib.. As reported in The Lancet Oncology by François-Clément Bidard, MD, and colleagues, the French phase III PADA-1 trial has shown that switching to fulvestrant/palbociclib..',
                'author' => 'Matthew Stenger',
                'post_type' => 'news',
                'highlights' => true,
                'created_at' => '2022-08-19 04:07:05', 
                'updated_at' => '2022-08-19 05:32:27'
            ),
        );
        

        $post_meta = array(
            array(
                'post_id' => 1,
                'meta_key' => '_pdf',
                'meta_value' => 'hamda.pdf'
            ),
            array(
                'post_id' => 1,
                'meta_key' => '_key_points',
                'meta_value' => 'Trastuzumab deruxtecan significantly prolonged progression-free survival vs trastuzumab emtansine.
                Progression-free survival at 1 year was 75.8% vs 34.1%.'
            ),
            array(
                'post_id' => 1,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 2,
                'meta_key' => '_pdf',
                'meta_value' => 'hamda.pdf'
            ),
            array(
                'post_id' => 2,
                'meta_key' => '_key_points',
                'meta_value' => 'Trastuzumab deruxtecan significantly prolonged progression-free survival vs trastuzumab emtansine.
                Progression-free survival at 1 year was 75.8% vs 34.1%.'
            ),
            array(
                'post_id' => 2,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            //videos meta
            array(
                'post_id' => 11,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 12,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 11,
                'meta_key' => '_video',
                'meta_value' => 'video.mp4'
            ),

            array(
                'post_id' => 12,
                'meta_key' => '_video',
                'meta_value' => 'video.mp4'
            ),

            array(
                'post_id' => 28,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 29,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 30,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 31,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 32,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

            array(
                'post_id' => 33,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 34,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 35,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 36,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 37,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),
            array(
                'post_id' => 38,
                'meta_key' => '_featured_image',
                'meta_value' => 'post.jpg'
            ),

        );

        $topics = array(
            array('post_id' => 1, 'topic_id' => 5),
            array('post_id' => 2, 'topic_id' => 6),
            array('post_id' => 3, 'topic_id' => 7),
            array('post_id' => 4, 'topic_id' => 9),
            array('post_id' => 5, 'topic_id' => 10),
            array('post_id' => 6, 'topic_id' => 5),
            array('post_id' => 7, 'topic_id' => 6),
            array('post_id' => 8, 'topic_id' => 7),
            array('post_id' => 9, 'topic_id' => 9),
            array('post_id' => 10, 'topic_id' => 10),
            array('post_id' => 11, 'topic_id' => 7),
            array('post_id' => 12, 'topic_id' => 9),
            array('post_id' => 13, 'topic_id' => 10),
            array('post_id' => 14, 'topic_id' => 10),
            array('post_id' => 15, 'topic_id' => 5),
            array('post_id' => 16, 'topic_id' => 6),
            array('post_id' => 17, 'topic_id' => 7),
            array('post_id' => 18, 'topic_id' => 9),
            array('post_id' => 19, 'topic_id' => 10),
            array('post_id' => 20, 'topic_id' => 5),
            array('post_id' => 21, 'topic_id' => 6),
            array('post_id' => 22, 'topic_id' => 7),
            array('post_id' => 23, 'topic_id' => 9),
            array('post_id' => 24, 'topic_id' => 10),
            array('post_id' => 25, 'topic_id' => 7),
            array('post_id' => 26, 'topic_id' => 9),
            array('post_id' => 27, 'topic_id' => 10),
            array('post_id' => 28, 'topic_id' => 10),
            array('post_id' => 29, 'topic_id' => 5),
            array('post_id' => 30, 'topic_id' => 6),
            array('post_id' => 31, 'topic_id' => 7),
            array('post_id' => 32, 'topic_id' => 9),
            array('post_id' => 33, 'topic_id' => 10),
            array('post_id' => 34, 'topic_id' => 5),
            array('post_id' => 35, 'topic_id' => 6),
            array('post_id' => 36, 'topic_id' => 7),
            array('post_id' => 37, 'topic_id' => 9),
            array('post_id' => 38, 'topic_id' => 10),
            array('post_id' => 39, 'topic_id' => 7),
            array('post_id' => 40, 'topic_id' => 10),
            array('post_id' => 41, 'topic_id' => 10),

        );

        $categories = array(
            // news categoreis
            array('post_id' => 1, 'category_id' => 1),
            array('post_id' => 1, 'category_id' => 2),
            array('post_id' => 1, 'category_id' => 3),
            array('post_id' => 2, 'category_id' => 2),
            array('post_id' => 2, 'category_id' => 3),

            // articles categories
            array('post_id' => 17, 'category_id' => 9),
            array('post_id' => 17, 'category_id' => 7),
            array('post_id' => 18, 'category_id' => 9),
            array('post_id' => 18, 'category_id' => 7),
            array('post_id' => 19, 'category_id' => 9),
            array('post_id' => 20, 'category_id' => 9),
            array('post_id' => 21, 'category_id' => 9),
            array('post_id' => 22, 'category_id' => 9),
            array('post_id' => 23, 'category_id' => 9),
            array('post_id' => 34, 'category_id' => 7),
            array('post_id' => 25, 'category_id' => 7),
            array('post_id' => 26, 'category_id' => 8),
            array('post_id' => 27, 'category_id' => 8),


            // videos categories

            array('post_id' => 11, 'category_id' => 10),
            array('post_id' => 11, 'category_id' => 11),
            array('post_id' => 12, 'category_id' => 11),
            array('post_id' => 13, 'category_id' => 12),
            array('post_id' => 14, 'category_id' => 13),
            array('post_id' => 15, 'category_id' => 10),
            array('post_id' => 16, 'category_id' => 11),
            array('post_id' => 11, 'category_id' => 17),
            array('post_id' => 11, 'category_id' => 16),


            // array('post_id' => 6, 'category_id' => 7),
            // array('post_id' => 7, 'category_id' => 8),
            // array('post_id' => 8, 'category_id' => 9),

            // array('post_id' => 9, 'category_id' => 5),
            // array('post_id' => 10, 'category_id' => 4),
        );


        $users = array([
            'first_name' => 'user first name',
            'last_name' => 'user last name',
            'email' => 'kemy489@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '0120102022',
            'country' => 'Egypt',
            'status' => true,
            'governorate' => 'cairo',
            'affiliation' => 'affiliation',
            'speciality' => 'speciality',
            'accept_newsletter_emails' => true,
            'created_at' => '2022-08-19 04:07:05', 
            'updated_at' => '2022-08-19 05:32:27'
        ]);

        $announcements = array(
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '1', 'desktop_image' => 'bnr1.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '2', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '3', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '3', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '3', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '3', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
            array('title' => 'one', 'url' => 'google.com', 'place' => '3', 'desktop_image' => 'bnr2.jpg', 'mob_image' => 'bnr2.jpg', 'created_at' => '2022-08-19 04:07:05', 'updated_at' => '2022-08-19 05:32:27'),
        );

        DB::table('users')->insert($users);

        DB::table('posts')->insert($posts);
        DB::table('posts')->insert($highlights);
        DB::table('postmetas')->insert($post_meta);
        DB::table('post_topic')->insert($topics);
        DB::table('category_post')->insert($categories);
        DB::table('announcements')->insert($announcements);


    }

}
