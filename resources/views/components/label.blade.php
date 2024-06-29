@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm color']) }}>
    {{ $value ?? $slot }}
</label>
