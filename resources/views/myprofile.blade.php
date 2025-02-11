@extends('layouts.app')
@section('content')
<h1>Percival F. Callos</h1>
    <style>
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        p { font-size: 18px; line-height: 1.6; margin-bottom: 20px; text-align: center; }
        img { display: block; max-width: 300px; margin: 20px auto; border-radius: 10px; }
        h2 { color: #444; margin: 20px 0; text-align: center; }
        ul.custom-list { list-style-type: square; padding-left: 40px; margin: 0 auto; width: fit-content; }
        li { margin: 10px 0; font-size: 16px; }
    </style>
    <img src="\build\assets\img\image1.jpg" alt="My Photo">
    <p>A student from Southern Leyte State University studying Bachelor of Science in Information Technology Major in Programming <br>
    I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read,<br>
     eat, sleep, and play video games.
    </p>
    
    <h2>My Hobbies</h2>
    <ul class="custom-list">
        <li>Video Games</li>
        <li>Basketball</li>
    </ul>
@endsection