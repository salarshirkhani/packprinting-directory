<div class="contect_form3">
    <label>{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" value="{{ old($name, $value ?? '') }}">
</div>
