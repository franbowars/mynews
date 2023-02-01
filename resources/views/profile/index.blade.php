@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mx-auto">
                                <div class="title">
                                    <p>名前</p>
                                    <h2>{{ Str::limit($headline->name, 70) }}</h2>
                                    <p></p>
                                    <p>{{ Str::limit($headline->gender, 70) }}</p>
                                </div>
                                {{--<div class="title">
                                    <h1>{{ Str::limit($headline->gender, 70) }}</h1>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto"> 趣味 </p>
                            <p class="body mx-auto">{{ Str::limit($headline->hobby, 650) }}</p>
                        </div>
                        <div class="col-md-10">
                            <p class="body mx-auto">自己紹介</p>
                            <p class="body mx-auto">{{ Str::limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ Str::limit($post->name, 150) }}
                                </div>
                                <div class="name">
                                    {{ Str::limit($post->gender, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->hobby, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection