@if ($posts)

    <x-ui.container>
        <x-ui.splide data-type="posts_slider">
            <x-ui.splide.track>
                <x-ui.splide.list>
                    @foreach ($posts as $post)
                        @if (!empty($post['post']))
                            <x-ui.splide.slide>
                                <x-post-card :post="$post['post']" />
                            </x-ui.splide.slide>
                        @endif
                    @endforeach
                </x-ui.splide.list>
            </x-ui.splide.track>
        </x-ui.splide>
    </x-ui.container>
@endif
