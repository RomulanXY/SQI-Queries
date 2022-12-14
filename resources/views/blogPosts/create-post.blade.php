@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('main')
<main class="container" style="background-color: #fff; width: 75%; margin: 0 auto; border-radius: 10px;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Post!</h1>
        
        <!-- Contact Form -->
        <div class="contact-form">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Title -->
                <label for="title"><span>Title</span></label>
                <input type="text" id="title" name="title">

                <!-- Image -->
                <label for="title"><span>Image</span></label>
                <input type="file" id="image" name="image">

                <!-- Body -->
                <label for="body"><span>Body</span></label>
                <textarea id="body" name="body"></textarea>
                
                <!-- Button -->
                <input type="submit" value="submit">
            </form>
        </div>
    </section>
</main>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection