@extends('layout')

@section('content')
    <h1>Add a job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" placeholder="Enter job description">
        <input type="text" name="description" placeholder="Enter job title">
        <button type="submit">Submit</button>
        {{-- <textarea name="description" id="description" placeholder="Enter job description"></textarea> --}}
    </form>
@endsection
