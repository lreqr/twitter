<x-layout>
    <div class="col-6">
        @include('shared.success-message')
        @include('shared.error-message')
        @include('shared.submit-post')
        @foreach($posts as $post)
            <div class="mt-3">
                @include('shared.idea-card')
            </div>
        @endforeach
        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>
    <div class="col-3">
        @include('shared.search')
        @include('shared.follow-box')
    </div>

</x-layout>

