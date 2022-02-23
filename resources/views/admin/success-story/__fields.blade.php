@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->name : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'url'" :name="'video_url'" :value="$model ? $model->video_url : '' " :required="true" :autofocus="false"></x-input>
    <x-input-textarea :name="'text'" :value="$model ? $model->text : '' " :required="true" :autofocus="false"></x-input-textarea>
</x-form>
@section('js')
    <script src="{{asset('js/tinymce.js') }}"></script>
    <script>
        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        tinymce.init({
            selector:  '#text',
        });
    </script>
@endsection