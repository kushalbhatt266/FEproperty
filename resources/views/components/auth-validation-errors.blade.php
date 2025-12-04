@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="accent-color normal w-100">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <!-- <ul class="mt-3 list-disc list-inside text-sm text-red-600"> -->
            @foreach ($errors->all() as $error)
                <p class="accent-color normal w-100">{{ $error }}</p>
            @endforeach
        <!-- </ul> -->
    </div>
@endif
