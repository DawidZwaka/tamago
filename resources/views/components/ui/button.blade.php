<a
    {{ $attributes->class('inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black transition-colors rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300')->merge() }}>
    {!! $slot !!}
</a>
