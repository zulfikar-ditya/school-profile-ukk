@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'main_text'" :value="$model ? $model->main_text : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'text'" :name="'sub_text'" :value="$model ? $model->sub_text : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'file'" :name="'image'" :value="$model ? $model->image : '' " :required="true" :autofocus="false"></x-input>
</x-form>