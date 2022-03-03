@extends('layouts.frontend.base')

@section('title', 'Message')

@section('content')
    <div class="container mx-auto my-20 p-10">
        <x-card :title="Str::headline('Message')">
            @include('components.validation-errors')
            <x-form :action="route('home.message.store')" :method="'create'">
                <x-input :type="'text'" :name="'name'" :value="''" :required="true" :autofocus="true"></x-input>
                <x-input :type="'email'" :name="'email'" :value="''" :required="true" :autofocus="false"></x-input>
                <x-input :type="'text'" :name="'message'" :value="''" :required="true" :autofocus="false"></x-input>
                <input type="hidden" name="status" value="new">
            </x-form>
        </x-card>
    </div>
@endsection

@section('js')
    <script>
        document.querySelector('#message').classList.add('active');
    </script>
@endsection