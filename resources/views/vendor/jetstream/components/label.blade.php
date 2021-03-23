@props(['value'])

<!-- <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label> -->
<label {{ $attributes->merge(['class' => 'font-medium text-sm text-gray-700']) }}>
	<span class="text-gray-700 dark:text-gray-400">{{ $value }}</span>
	{{ $slot }}
</label>