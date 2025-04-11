<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <ul>
        @forelse($jobs as $job)
            <li>{{ $job['job_title'] }}</li>
            <li>{{ Str::limit($job['description'], 40)}}</li>
        @empty 
            <li style="color: #f00;">There are no jobs available at the moment.</li>
        @endforelse
    </ul>

</body>
</html>