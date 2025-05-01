<div {{ $attributes->merge(['class'=>'bg-white shadow rounded-lg p-6']) }}>
    <h2 class="text-xl font-semibold mb-4">
        @if (isset($title))
            {{ $title }}
        @else
            <p>hello</p>
        @endif
    </h2>
    <div class="text-gray-700">
        {{ $slot }}
    </div>
</div>
