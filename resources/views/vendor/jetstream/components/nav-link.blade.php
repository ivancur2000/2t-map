@props(['active' => false])

@php
$classContainer = ($active ?? false)
            ? 'px-3 py-2 rounded-sm mb-0.5 last:mb-0'
            : 'px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-slate-900';
$classLink = ($active ?? false)
            ? 'block text-slate-200 hover:text-white truncate transition duration-150'
            : 'block text-slate-200 hover:text-white truncate transition duration-150 hover:text-slate-200';
@endphp

<li class="{{ $classContainer }}">
    <a {{ $attributes->merge(['class' => $classLink]) }}>
        <div class="flex items-center">
            @if (isset($icon))
                {{ $icon }}
            @endif
            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                {{ $slot }}
            </span>
        </div>
    </a>
</li>
