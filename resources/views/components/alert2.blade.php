<div class="p-4 mb-4 text-sm rounded-lg {{$class}}" {{$attributes ->merge(['p-4 mb-4 text-sm rounded-lg'.$class])}} role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
</div>