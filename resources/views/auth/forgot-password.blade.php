@extends('layouts.blank')

@section('title', 'Forgot Password')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full md:w-4/12 lg:w-3/12">
            <div class="bg-white dark:bg-gray-800 shadow hover:shadow-md rounded-md p-5 border border-gray-300 dark:border-gray-700">
                <div class="text-center mb-5">
                    <h4 class="text-3xl">Forgot Password</h4>
                </div>
                @include('components.validation-errors')
                <div class="my-4 text-sm text-gray-600 dark:text-gray-200">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <x-input :type="'email'" :name="'email'" :value="old('email', $request->email)" :required="true" :autofocus="true"></x-input>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-btn-rose :type="'submit'" :id="''">Email Password Reset link</x-btn-rose>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
