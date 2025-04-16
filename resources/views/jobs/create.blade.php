<x-layout>  
    <x-slot name="title">Add a Job Listing</x-slot>
    <h1>Add a job</h1>
    <form action="/jobs" method="post">
        @csrf
        <div class="my-5">
            <input type="text" name="title" placeholder="Enter job description" value="{{old('title')}}">
            @error('title')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <div class="my-5">
        <input type="text" name="description" placeholder="Enter job title" value="{{old('description')}}">
            @error('description')
                <div class="text-red-500">{{$message}}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
        {{-- <textarea name="description" id="description" placeholder="Enter job description"></textarea> --}}
    </form>
</x-layout>