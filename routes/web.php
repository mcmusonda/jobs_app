<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
    $title = 'Latest IT Jobs';
    $jobs = [
        // [
        //     'id' => 1,
        //     'job_title' => 'Web Developer',
        //     'description' => "Web developers create and maintain websites. They are also responsible for the site's technical aspects, such as its performance and capacity, which are measures of a website's speed and how much traffic the site can handle."
        // ],

        // [
        //     'id' => 2,
        //     'job_title' => 'Frontend Developer',
        //     'description' => "A front-end developer is a type of software developer who specializes in creating and designing the user interface (UI) and user experience (UX) of websites and web applications. The primary responsibility of a front-end developer is to ensure that the visual and interactive aspects of a website or application are user-friendly, aesthetically pleasing, and functionally efficient."
        // ],

        // [
        //     'id' => 3,
        //     'job_title' => 'Senior Network Engineer',
        //     'description' => "A network engineer is a technology professional who has the necessary skills to plan, implement and oversee the computer networks that support in-house voice, data, video and wireless network services."
        // ],

        // [
        //     'id' => 4,
        //     'job_title' => 'Database Administrator',
        //     'description' => "A database administrator (DBA) manages computer databases. The role may include capacity planning, installation, configuration, database design, migration, performance monitoring, security, troubleshooting, as well as backup and data recovery."
        // ],

        // [
        //     'id' => 5,
        //     'job_title' => 'Data Engineer',
        //     'description' => "A data engineer is an IT professional whose primary job is to prepare data for analytical or operational uses. This occupation includes duties such as designing and building systems for collecting, storing and analyzing data."
        // ],
    ];

    return view('jobs.index', compact('title', 'jobs'));
});