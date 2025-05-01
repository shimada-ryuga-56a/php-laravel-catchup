@props([
    'as' => 'button',
])

<{{ $as }}
    {{ $attributes->merge([
        'class' => 'px-4 py-2 bg-brand hover:bg-brand-dark text-white font-medium rounded flex justify-center'
    ]) }}
>
    {{ $slot }}
</{{ $as }}>