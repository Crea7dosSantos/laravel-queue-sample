@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-6xl">Create Post</h1>

    <div class="mt-10">
        <a class="bg-gray-600 text-white text-base p-2 rounded-md" href="{{ route('post.create') }}">Create post</a>
    </div>
</div>
@endsection