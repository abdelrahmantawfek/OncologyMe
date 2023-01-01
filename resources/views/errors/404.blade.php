@extends('layouts.app')

@section('meta')

<title> 404  - {{$general_info[0]->tagline}} </title>

@endsection

@section('content')

        <div class="careerfy-errorpage-bg">
            <span class="careerfy-errorpage-transparent"></span>
            <div class="container">
                <div class="careerfy-errorpage">
                    <h2>Ooops! Page Not Found!</h2>
                    <p>Sorry ! We could not Find What You Are Looking For.</p>
                    <a href="/"><span>back To homepage</span></a>
                </div>
            </div>
        </div>

@endsection
