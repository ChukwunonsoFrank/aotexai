<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} Cloudspaceaitrading. All rights reserved.

<a href="#">150 Frazer hills Street, 1150 Vishon, Austria.</a>

<br><br>
<a href="https://cloudspaceaitrading.com" target="_blank" rel="noopener noreferrer">www.cloudspaceaitrading.com</a> | <a href="mailto:support@cloudspaceaitrading.com">support@cloudspaceaitrading.com</a>

</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
