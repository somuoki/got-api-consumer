<!-- component -->
<div class="antialiased mx-auto max-w-screen-sm">
    <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>

    <div class="space-y-4">

        @foreach($book['comments'] as $comment)
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://i.pravatar.cc/150?u={{ $comment['comment_ip'] }}" alt="">
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ $comment['comment_ip'] }}</strong> <span class="text-xs text-gray-400">{{ date("Y-m-d H:i:s",  strtotime($comment['created_at'])) }}</span>
                    <p class="text-sm">
                        {{ $comment['body'] }}
                    </p>
                </div>
            </div>
        @endforeach

    </div>
</div>
