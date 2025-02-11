@extends('layouts.app')
@section('content')
<style>
    .animated-heading {
        font-size: 2.5rem;
        color: #333;
        text-align: center;
        padding: 20px;
        animation: fadeInUp 1.5s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<h1 class="animated-heading">This page is about creating a functional website using HTML, CSS, and JavaScript Code with laravel framework.</h1>
<img src="\build\assets\animations\Happy Great Job GIF by FOMO Duck.gif" alt="okie-duck" class="animated-heading mx-auto d-block">
@endsection