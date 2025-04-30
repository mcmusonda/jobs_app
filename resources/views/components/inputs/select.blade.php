@props(['id', 'name', 'label' => null, 'value' =>'', 'options' => []])

<div class="mb-4">
    @if($label)
    <label for="{{$id}}" class="block text-gray-700">{{$label}}</label>
    @endif
    <select name="{{$name}}" id="$id">
        <option value="{{$optionValue}}" {{old($name, $value)}}></option>
    </select>
</div>