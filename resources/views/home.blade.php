{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<body id="page-top">
    <!-- Header -->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center align-middle">
                <h1 class="mx-auto my-0 text-uppercase">【LaraGirls】 Learn Laravel</h1>
                <a href="#title" class="btn btn-primary js-scroll-trigger">Get Started</a>
            </div>
        </div>
    </header>

    <div id="title" style="text-align: center;">
        <h1>【LaraGirls】 Learn Laravel</h1>
        <div style="padding: 5px; font-size: 16px;">搭建自己的部落格</div>
    </div>
    <hr>
    <div id="content">
        <ul>
            @foreach ($articles as $article)
            {{-- <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('article/'.$article->id) }}">
                        <h1 class="text-danger">{{ $article->title }}</h1>
                    </a>
                </div>
                <div class="body">
                    <p>{{ $article->body }}</p>
                </div>
            </li> --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{ $article->title }}</h3>
                </div>
                <div class="panel-body">
                    {{ $article->body }}
                </div>
            </div>
              
            @endforeach
        </ul>
    </div>

</body>
@endsection