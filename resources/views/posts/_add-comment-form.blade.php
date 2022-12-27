@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex">
                <img src="https//i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" cols="30" rows="5" class="w-full" placeholder="Leave your comment here!" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">POST</button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-blue-500">Register</a> or <a href="/login"
            class="hover:underline text-blue-500">Log in </a> to leave a comment
    </p>
@endauth
