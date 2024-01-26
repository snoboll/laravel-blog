<!DOCTYPE html>
<x-layout>
    <article>
        <h1>{!!$post->title!!}</h1>
        <p>
            By <a href='#'>Jesper Laurell</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

        <div>
            {!!$post->body!!}
        </div>
    </article>

    <button onclick="window.history.back()">Back</button>
</x-layout>