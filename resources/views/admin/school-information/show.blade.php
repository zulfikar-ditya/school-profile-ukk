@extends('admin.base')

@php
    $title = 'show school-information';
@endphp
@section('title', Str::headline($title))

@section('content')
<div class="relative bg-gray-100 md:pt-32 pb-32 pt-12l w-full">
    <div class="px-4 md:px-10 mx-auto w-full">
        <x-card :title="Str::headline($title)">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b border-2">
                                    <tr class="text-left">
                                        <th class=""></th>
                                        <th class=""></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fields as $item)
                                    <tr class="border-b bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{Str::headline($item)}}</td>
                                        <td class="text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @if ($item == 'logo' or $item == 'mission')
                                                @if ($item == 'logo')
                                                <img src="{{url('storage/'.$model->$item)}}" alt="" class="h-96">
                                                @endif
                                                @if ($item == 'mission')
                                                    {!!$model->item!!}
                                                @endif
                                            @else
                                                {{$model->$item}}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-link-amber :link="route($routes['edit'], $model)" :id="'edit'">Edit</x-link-amber>
        </x-card>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#{{$title}}').classList.add('text-rose-500')
    </script>
@endsection