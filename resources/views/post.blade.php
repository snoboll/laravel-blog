<!DOCTYPE html>
@extends('layout')
<article>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
</article>

<button onclick="window.history.back()">Back</button>
@section('content')
