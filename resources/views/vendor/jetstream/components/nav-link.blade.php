@props(['active'])

@php
$classContainer = ($active ?? false)
            ? 'px-3 py-2 rounded-sm mb-0.5 last:mb-0'
            : 'px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900';
$classLink = ($active ?? false)
            ? 'block text-slate-200 hover:text-white truncate transition duration-150'
            : 'block text-slate-200 hover:text-white truncate transition duration-150 hover:text-slate-200';
@endphp

<li {{ $attributes->merge(['class' => $classContainer]) }}>
    <a {{ $attributes->merge(['class' => $classLink]) }}>
        {{ $slot }}
    </a>
</li>
