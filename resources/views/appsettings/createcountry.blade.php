@php
    $nav_modulex = 'App Settings';
    $nav_country = 'text-primary';
@endphp

<x-layout>

    @include('partials._appusertab')
    @include('partials.appsettings._appmenu')
    <div class="col bg-primary">
        <p class="text-uppercase fw-semibold text-bg-primary bg-primary border-1 " style="padding: 10px;">Country Page
        </p>
    </div>
    <form class="float-start" action="/appsettingscountry" method="post" style="width: 500px;">
        @csrf
        <div class="mb-6">
            <label for="country" class="inline-block text-lg mb-2">Country</label>
            <input class="form-control text-capitalize" type="text" name="name"
                placeholder="Name of the Country..." value="{{ old('name') }}" style="font-size: 14px;" requireds>
            @error('name')
                <p class="mt-2 text-danger text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button class="btn btn-warning fw-semibold mt-4" type="submit" style="padding-left: 12px;">Submit</button>
        </div>
    </form>



</x-layout>
