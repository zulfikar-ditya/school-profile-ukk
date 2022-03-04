@extends('layouts.blank')

@section('title', 'Register')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full md:w-4/12 lg:w-3/12">
            <div class="bg-white dark:bg-gray-800 shadow hover:shadow-md rounded-md p-5 border border-gray-300 dark:border-gray-700">
                <div class="text-center mb-5">
                    <h4 class="text-3xl">Register</h4>
                </div>
                @include('components.validation-errors')
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-input :type="'text'" :name="'name'" :value="old('name', $request->name)" :required="true" :autofocus="true"></x-input>
                    <x-input :type="'email'" :name="'email'" :value="old('email', $request->email)" :required="true" :autofocus="false"></x-input>
                    <x-input :type="'password'" :name="'password'" :value="''" :required="true" :autofocus="false"></x-input>
                    <x-input :type="'password'" :name="'password_confirmation'" :value="''" :required="true" :autofocus="false"></x-input>
                    <div class="flex items-center justify-between mt-4">
                        <x-btn-rose :type="'submit'" :id="'submit'">Register</x-btn-rose>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-300 dark:hover:text-white hover:text-gray-900" href="{{ route('login') }}">
                                Already Registered ?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
