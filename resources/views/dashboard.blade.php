@extends('layout.layout')

@section('title','Dashboard')

@section('content')
<div class="row">
            <div class="col-3">
                @include('includes.left-sidebar')
            </div>
            <div class="col-6">
                @include('includes.success-message')
                @include('posts.shared.submit-post')
                <hr>
                @if(count($posts)>0)

                @foreach ($posts as $post)
                <div class="mt-3">
                        
                   @include('posts.shared.post-card')

                </div>
                @endforeach

                @else
                <p class="text-center mt-4">No Results Found.</p>
               
                @endif

                {{-- laravel use tailwindcss by default --}}
                <div class="mt-3">
                {{ $posts->withQueryString()->links() }}
                </div>

            </div>
            <div class="col-3">
            @include('includes.search-bar')
            @include('includes.follow-box')
            </div>
</div>

@endsection
