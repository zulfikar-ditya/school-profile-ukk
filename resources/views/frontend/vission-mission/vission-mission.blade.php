@extends('layouts.frontend.base')

@section('title', '')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <div class="flex justify-center">
            <div class="w-full lg:w-6/12">
                <img src="{{url('storage/'.$logo)}}" alt="" class="h-64 object-cover object-center mx-auto">

                <div class="mt-10 text-center">
                    <div class="w-full lg:w-6/12 mx-auto">
                        <h5 class="text-2xl font-bold">Vission</h5>
                        <hr class="border border-slate-800 dark:border-white my-8">
                    </div>
                    <p>{{$vission}}</p>
                </div>

                <div class="mt-20 text-center">
                    <div class="w-full lg:w-6/12 mx-auto">
                        <h5 class="text-2xl font-bold">Mission</h5>
                        <hr class="border border-slate-800 dark:border-white my-8">
                    </div>
                    <p>{!!$mission!!}</p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.querySelector('#vission-mission').classList.add('active');
    </script>
@endsection