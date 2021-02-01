<select 
id="{{ $name }}" 
name="{{ $name }}" 
disabled="{{ $disabled }}"
date-message="{{ isset($message) ? $message : '' }}"
class="{{ isset($class) ? $class : '' }}">
    <option value="" >---</option>
    @for ($i = 1; $i <= $max; $i++)
        <option value="{{ $i }}" {{ old($name) == $i ? ' selected' : ''  }}> {{ $i }}</option>
    @endfor
</select>

