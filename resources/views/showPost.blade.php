@extends('layouts.app')

@section('showArticle')
    
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('/images/post-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
          <h1>{{ $post->title }}</h1>
            <h2 class="subheading">
                {!! \Illuminate\Support\Str::limit($post->body, 50, '...') !!}
            </h2>
            <span class="meta">Posted by
              <a href="#">{{ $post->user->name  }}</a>
              on {{ $post->updated_at->format('M d, Y')}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>
                {!! $post->body !!}              
          </p>
        </div>
      </div>
    </div>
  </article>

  @include('comments')
  <hr>

  @endsection