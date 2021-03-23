@props(['disabled' => false, 'placeholder' => null, 'type' => 'text' ])

<input {{ $disabled ? 'disabled' : '' }}  {!! $attributes->merge(['class' => 'focus:text-gray-800', 'placeholder' => $placeholder, 'type' => $type ]) !!}/>


