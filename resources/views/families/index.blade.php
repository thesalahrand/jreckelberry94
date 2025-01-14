<x-app-layout>
  @php
    $breadcrumbItems = [
        ['text' => __('Dashboard'), 'link' => route('dashboard')],
        ['text' => __('Families'), 'link' => route('families.index')],
    ];
  @endphp
  <x-slot name="breadcrumb">
    <x-breadcrumb :breadcrumbItems="$breadcrumbItems" />
  </x-slot>

  <div>
    <div>
      <div class="mb-4 flex flex-1 flex-col sm:flex-row space-y-2 sm:space-y-0 justify-between sm:items-center">
        <form method="GET" class="flex items-center w-full sm:w-1/2">
          <label for="search" class="sr-only">{{ __('Search') }}</label>
          <x-text-input id="search" type="search" name="s" :value="old('search', request('s'))" autofocus
            placeholder="{{ __('Search by family ID or name') }}" autocomplete="search" />
          <x-regular-button class="inline-flex items-center py-[11px] ms-2">
            <x-icons.search class="w-4 h-4 me-2" />
            {{ __('Search') }}
          </x-regular-button>
        </form>
        <a href="{{ route('families.create') }}">
          <x-regular-button class="inline-flex items-center">
            <x-icons.plus class="w-4 h-4 me-2 -mt-1" />
            {{ __('Add Family') }}
          </x-regular-button>
        </a>
      </div>

      @include('families.partials.show-families-table')
    </div>
  </div>
</x-app-layout>
