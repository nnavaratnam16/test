@extends('layouts.app')

@section('title', 'Library Page')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">LIBRARY</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the songs you have created including their title, duration, and date.</p>
    </div>
    <!-- Removed the Add Song button -->
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full border-separate border-spacing-0">
          <thead>
            <tr>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Song Title</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Duration</th>
              <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">Song Example 1</td>
              <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">3:45</td>
              <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">2024-09-23</td>
            </tr>

            <!-- More songs... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
