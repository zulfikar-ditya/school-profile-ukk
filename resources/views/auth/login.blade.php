@extends('layouts.blank')

@section('title', 'Login')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full md:w-4/12 lg:w-3/12">
            <div class="bg-white dark:bg-gray-800 shadow hover:shadow-md rounded-md p-5 border border-gray-300 dark:border-gray-700">
                <div class="text-center mb-5">
                    <h4 class="text-3xl">Login</h4>
                </div>
                @include('components.validation-errors')
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-input :type="'email'" :name="'email'" :value="old('email', $request->email)" :required="true" :autofocus="true"></x-input>
                    <x-input :type="'password'" :name="'password'" :value="''" :required="true" :autofocus="false"></x-input>
                
                    <div class="block mt-4">
                        <x-input-check-box :name="'remember'" :value="''" :required="false" :autofocus="false"></x-input-check-box>
                    </div>
                    
                    <div class="flex items-center justify-between mt-4">
                        <x-btn-rose :type="'submit'" :id="'submit'">Login</x-btn-rose>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-300 dark:hover:text-white hover:text-gray-900" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


