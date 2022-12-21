@extends('layouts.admin')


@section('title', 'Recent Posts')

@section('content')
    <div class="container">
        <livewire:posts.recent-post/>
    </div>
@endsection
