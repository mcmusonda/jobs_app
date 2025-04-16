<?php 

namespace App\Models;

class Job {
    public static function all(): array {
        return  [
            [
                "id" => 1,
                "title" => "Software Engineer",
                'description' => "Software engineering is the branch of computer science that deals with the design, development, testing, and maintenance of software applications. Software engineers apply engineering principles and knowledge of programming languages to build software solutions for end users.",
            ],
            [
                "id" => 2,
                "title" => "Senior Database Administrator",
                'description' => "A Senior database administrator (DBA) is the information technician responsible for directing and performing all activities related to maintaining and securing a successful database environment.",
            ],

            [
                "id" => 3,
                "title" => "Junior Backend Developer",
                'description' => "Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers.",
            ],
            [
                "id" => 4,
                "title" => "Data Engineer",
                'description' => "A data engineer is a type of software engineer who creates big data ETL pipelines to manage the flow of data through the organization. This makes it possible to take huge amounts of data and translate it into insights. They are focused on the production readiness of data and things like formats, resilience, scaling, and security. Data engineers usually hail from a software engineering background and are proficient in programming languages like Java, Python, Scala, and Rust. They will be more familiar with databases, architecture, cloud computing, and Agile software development",
            ]
        ];
    }
}