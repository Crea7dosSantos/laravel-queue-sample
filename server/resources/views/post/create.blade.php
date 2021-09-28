@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-6xl">Create Post</h1>

    @if (count($errors) != 0)
    <div class="pt-4">
        <h3 class="text-lg text-red-400 py-3">Faild create post</h3>
        @foreach ($errors->all() as $error)
        <li class="pt-1">{{ $error }}</li>
        @endforeach
    </div>
    @endif

    <form id='form' action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mt-10">
            <label for="">Notification email address for post creation</label>
            <input class="ml-3 border-2 border-blue-500 rounded" type="text" name="email">
        </div>
        <div class="mt-7">
            <label for="">Post title</label>
            <input class="ml-3 border-2 border-blue-500 rounded" type="text" name="title">
        </div>
        <div class="mt-7">
            <label for="">Post content</label>
            <input class="ml-3 border-2 border-blue-500 rounded" type="text" name="content">
        </div>
        <div class="mt-10">
            <button class="bg-gray-600 text-white text-base py-2 px-4 rounded-md" type=”submit” id=”button”>Post</button>
        </div>
    </form>
</div>
@endsection