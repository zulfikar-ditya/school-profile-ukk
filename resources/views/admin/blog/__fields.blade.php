@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'title'" :value="$model ? $model->title : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'file'" :name="'image'" :value="$model ? $model->image : '' " :required="true" :autofocus="false"></x-input>
    <x-input-select :name="'blog_category_id'" :value="$model ? $model->blog_category_id : '' " :required="true" :autofocus="false" :data="$blog_category"></x-input-select>
    <x-input-textarea :name="'content'" :value="$model ? $model->content : '' " :required="true" :autofocus="false"></x-input-textarea>
</x-form>

@section('js')
    <script src="{{asset('js/tinymce.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#content'
        })
    </script>
@endsection