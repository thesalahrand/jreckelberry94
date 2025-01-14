<x-app-layout>
  @php
    $breadcrumbItems = [
        ['text' => __('Dashboard'), 'link' => route('dashboard')],
        ['text' => __('Members'), 'link' => route('members.index')],
        ['text' => $member->name, 'link' => route('members.edit', $member->id)],
    ];
  @endphp

  <x-slot name="breadcrumb">
    <x-breadcrumb :breadcrumbItems="$breadcrumbItems" />
  </x-slot>

  <div class="p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    @include('members.partials.edit-member-form')
  </div>
</x-app-layout>
