@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'number'" :name="'order'" :value="$model ? $model->order : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'text'" :name="'text'" :value="$model ? $model->text : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'text'" :name="'sub_text'" :value="$model ? $model->sub_text : '' " :required="true" :autofocus="false"></x-input>

</x-form>