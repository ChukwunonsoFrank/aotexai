@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Aotexai')
<img width="50" src="{{ asset('/images/aotexailogo.png') }}" alt="Aotexai Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
