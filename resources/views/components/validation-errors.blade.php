@if ($errors->any())
    <div>
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
        @foreach ($errors->all() as $error)
            <div class="bg-red-100 rounded-md py-3 px-2 mb-4 text-base text-red-700 mb-3 border border-red-500"
                role="alert">
                <span>{{ $error }}</span>
            </div>
        @endforeach
    </div>
@endif
