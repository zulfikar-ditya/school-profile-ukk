@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->name : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'text'" :name="'title'" :value="$model ? $model->title : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'text'" :name="'vission'" :value="$model ? $model->vission : '' " :required="true" :autofocus="false"></x-input>
    <x-input-textarea :type="'text'" :name="'mission'" :value="$model ? $model->mission : '' " :required="true" :autofocus="false"></x-input-textarea>
    <x-input :type="'file'" :name="'logo'" :value="$model ? $model->logo : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'url'" :name="'instagram'" :value="$model ? $model->instagram : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'url'" :name="'twitter'" :value="$model ? $model->twitter : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'url'" :name="'facebook'" :value="$model ? $model->facebook : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'tel'" :name="'fax'" :value="$model ? $model->fax : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'text'" :name="'address'" :value="$model ? $model->address : '' " :required="true" :autofocus="false"></x-input>
</x-form>

{{-- @section('js') --}}
    <script src="{{asset('js/tinymce.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#mission'
        });
    </script>
{{-- @endsection --}}