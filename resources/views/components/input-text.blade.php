@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-pink-300 focus:border-pink-300 rounded-md shadow-sm p-2']) !!}>