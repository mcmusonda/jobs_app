<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT Jobs App - Create a Job</title>
</head>
<body>
    <h1>Add a job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" placeholder="Enter job description">
        <input type="text" name="description" placeholder="Enter job title">
        <button type="submit">Submit</button>
        {{-- <textarea name="description" id="description" placeholder="Enter job description"></textarea> --}}
    </form>
</body>
</html>
