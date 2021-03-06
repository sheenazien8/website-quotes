@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome <em>{{ $user->name }}</em></h1>
            <h3>List Forum</h3>
            <ul class="list-group">
                @foreach ($user->quotes as $quote)
                    <li class="list-group-item"><a href="/forum/{{ $quote->slug }}">{{ $quote->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
