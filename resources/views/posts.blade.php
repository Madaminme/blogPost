<x-layout>
    @include('_posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts">
            </x-posts-grid>
        @else
            <p>No posts yet, come back to check later</p>
        @endif
    </main>
</x-layout>
