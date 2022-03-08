@include('components.validation-errors')
<x-form :action="$model ? route($routes['update'], $model) : route($routes['store'])" :method="$model ? 'update' : 'create'">
    <x-input :type="'text'" :name="'name'" :value="$model ? $model->name : '' " :required="true" :autofocus="true"></x-input>
    <x-input :type="'email'" :name="'email'" :value="$model ? $model->email : '' " :required="true" :autofocus="false"></x-input>
    <x-input :type="'file'" :name="'profile_photo_path'" :value="$model ? $model->profile_photo_path : '' " :required="false" :autofocus="false"></x-input>
    <x-input-password :type="'password'" :name="'password'" :value="$model ? $model->password : '' " :required="true" :autofocus="false"></x-input-password>
    <x-input-password :type="'password'" :name="'confirm_password'" :value="$model ? $model->password : '' " :required="true" :autofocus="false"></x-input-password>
    @if ($model)
        <x-input-password :type="'password'" :name="'old_password'" :value="$model ? $model->password : '' " :required="true" :autofocus="false"></x-input-password>
    @endif
    @if (Auth::user()->hasRole('superuser'))
    @if ($model)
        @php
            $current_role = count($model->getRoleNames()) != 0 ? $model->getRoleNames()[0] : '';
            $value_role = null;
            foreach ($role as $item) {
                if($item->name == $current_role) {
                    $value_role = $item->id;
                }
            }
        @endphp
    @endif
    <x-input-select :name="'role'" :value="$model ? $value_role : '' " :required="false" :autofocus="false" :data="$role"></x-input-select>
    @endif
</x-form>

@section('js')
<script>
    let btn = document.getElementById('submit');

    const passwordCheck = (e) => {
        e.preventDefault();
        let password = document.getElementById('password').value;
        let confirm_password = document.getElementById('confirm_password').value;
        @if ($model)
            if (password.length == 0) {
                btn.removeEventListener('click', passwordCheck);
                document.getElementById('form').reset();
                document.getElementById('form').submit();
            }
        @endif
    
        // check the password length != 0
        if (password.length != 0) {
            // check password is at least contains 8 char
            if(password.length <= 7) {
                // if not have 8 char
                swal({
                    title: 'Whoops!!!',
                    text: 'Password to short',
                    icon: 'warning'
                });
            } else {
                // password have 8 char
                // check the password is match
                if(password != confirm_password) {
                    swal({
                        title: 'Whoops!!!',
                        text: 'Password not match',
                        icon: 'warning',
                    })
                } else {
                    btn.removeEventListener('click', passwordCheck);
                    document.getElementById('form').reset();
                    document.getElementById('form').submit();
                }
            }
        }
    }
    btn.addEventListener('click', passwordCheck);
</script>
<script>
    document.querySelector('#user').classList.add('text-rose-500')
</script>
@endsection