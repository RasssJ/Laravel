<x-layout>
    @foreach($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{ $post->title }}
            </a>
        </h1>
        <div style="background-color: lightblue;margin-bottom:5px">
            <a href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </div>
        <div>
            {!! $post->excerpt !!}
        </div>
    </article>
    @endforeach
</x-layout>
