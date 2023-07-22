@props(['slot1'])
<div class="alert alert-{{$type}} ">
<h2 {{ $slot1->attributes->class(['text-danger'])}}>
 {{$slot1}}
</h2>
{{$slot}}
{{$message}}
</div>