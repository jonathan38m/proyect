<datepicker 
placeholder="Select Date"
id="{{ $name }}"
name="{{ $name }}"
format="yyyy-MMM-dd"
@if(isset($vue)) v-model="{{ $name }}" @endif
:bootstrap-styling="true"></datepicker>