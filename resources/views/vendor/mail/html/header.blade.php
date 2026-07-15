@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Cloudspaceaitrading')
<img width="50" src="{{ asset('/images/logo.png') }}" alt="Cloudspaceaitrading Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
