@if (!empty($url))
    <div class="bg-white border border-gray-200 rounded-lg shadow w-full h-full flex flex-col">
        <a href="{{ $url }}" class="flex w-full aspect-square rounded-t-lg overflow-hidden">
            @if (!empty($image))
                <img src="{{ $image }}" alt="post thumbnail" class="object-cover w-full h-full" />
            @else
                <div class="w-full h-full bg-gray-300"></div>
            @endif
        </a>

        <div class="p-5 flex flex-col items-start grow">
            @if (!empty($date))
                <div class="text-xs text-gray-500">
                    {{ $date }}
                </div>
            @endif

            @if (!empty($title))
                <a href="{{ $url }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 max-w-full">
                        {{ $title }}
                    </h5>
                </a>
            @endif

            @if (!empty($exceprt))
                <p class="mb-3 font-normal text-gray-700 overflow-hidden max-w-full max-h-[4.5rem]">
                    {{ $exceprt }}
                </p>
            @endif

            <x-ui.button href="{{ $url }}" class="mt-auto">
                {{ __('Read more', 'tamago') }}

                <x-icons.arrow class="rtl:rotate-180 ms-2" />
            </x-ui.button>
        </div>
    </div>
@endif
