@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $thread->title }}</div>

                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach ($thread->replies as $reply)
                    <div class="panel-heading">
                        {{ $reply->created_at->diffForHumans() }} <a href="#">{{ $reply->owner->name }}</a> said...
                    </div>
                    <div class="panel-body">
                        {{ $reply->body }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
