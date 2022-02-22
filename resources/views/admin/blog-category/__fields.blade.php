@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->name : '' " :required="true" :autofocus="true"></x-input>
</x-form>