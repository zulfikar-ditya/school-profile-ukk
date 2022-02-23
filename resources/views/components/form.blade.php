@props(['method', 'action'])

<form action="{{ $action }}" method="post" enctype="multipart/form-data" id="form">
    @csrf
    @if ($method != 'create')
        <input type="hidden" name="_method" value="PUT">
    @endif

    <div class="my-3">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{ $slot }}
        </div>
    </div>
    <x-btn-teal :type="'submit'" :color="'teal'" :id="'submit'">Submit </x-btn-teal>
    <x-btn-amber :type="'reset'" :color="'amber'" :id="'reset'">Reset </x-btn-amber>
</form>
