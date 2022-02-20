@props(['method', 'action'])

<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @if ($method != 'create')
        <input type="hidden" name="_method" value="PUT">
    @endif

    <div class="my-3">
        {{ $slot }}
    </div>
    <x-btn-teal :type="'submit'" :color="'teal'">Submit </x-btn-teal>
    <x-btn-amber :type="'reset'" :color="'amber'">Reset </x-btn-amber>
</form>
