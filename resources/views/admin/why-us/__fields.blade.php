@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input-textarea :name="'text'" :value="$model ? $model->text : '' " :required="true" :autofocus="true"></x-input-textarea>
    <x-input :type="'file'" :name="'image'" :value="$model ? $model->image : '' " :required="true" :autofocus="false"></x-input>
</x-form>

@section('js')
    <script src="{{asset('js/tinymce.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#text'
        });
    </script>
@endsection