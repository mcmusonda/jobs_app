<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load job listings from the file
        $jobListings = include database_path('seeders/data/job_listings.php');

        // Get user ids from user model
        $userIds = User::pluck('id')->toArray();

        foreach($jobListings as $jobListing) {
            
            // Assign user id to listing
            $jobListing['user_id'] = $userIds[array_rand($userIds)];

            // Add timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert job listings
        DB::table('job_listings')->insert($jobListings);

        echo "New Jobs created successfully";
    }
}
