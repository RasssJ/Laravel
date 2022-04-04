<x-layout>
    @foreach($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{ $post->title }}
            </a>
        </h1>
        <div style="background-color: lightblue;margin-bottom:5px">
            <p> By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>
        </div>
        <div>
            {!! $post->excerpt !!}
        </div>
    </article>
    @endforeach
</x-layout>