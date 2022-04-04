<x-post-dropdown>
    <x-slot name="trigger">
        <button
            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentAuthor) ? ucwords($currentAuthor->name):'Authors' }}
            <x-post-icon name="down-arrow"
                class="absolute pointer-events-none"
                style="right: 12px;"
            />
        </button>
    </x-slot>
    <x-post-dropdown-item href="/" :active="request()->routeIs('home')">All</x-post-dropdown-item>
    @foreach ($authors as $author)
        <x-post-dropdown-item
            href="/?author={{ $author->username }}&{{ http_build_query(request()->except('author'))}}"
            :active="request()->has('author='.$author->username)"
        >
            {{ ucwords($author->name) }}
        </x-post-dropdown-item>
    @endforeach
</x-post-dropdown>
