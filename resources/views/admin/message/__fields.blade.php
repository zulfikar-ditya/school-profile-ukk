@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->name : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'email'" :name="'email'" :value="$model ? $model->email : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'text'" :name="'message'" :value="$model ? $model->message : '' " :required="true" :autofocus="true"></x-input>
    <x-input-select-array :name="'status'" :value="$model ? $model->status : '' " :required="true" :autofocus="true" :data="['new', 'readed']"></x-input-select-array>

</x-form>