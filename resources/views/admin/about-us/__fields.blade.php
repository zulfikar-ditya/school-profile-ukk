@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'text'" :value="$model ? $model->text : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'file'" :name="'image'" :value="$model ? $model->image : '' " :required="true" :autofocus="true"></x-input>
</x-form>