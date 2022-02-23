@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->title : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'file'" :name="'image'" :value="$model ? $model->image : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'text'" :name="'description'" :value="$model ? $model->description : '' " :required="true" :autofocus="false"></x-input>
</x-form>

@section('js')
    <script src="{{asset('js/tinymce.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#content'
        })
    </script>
@endsection