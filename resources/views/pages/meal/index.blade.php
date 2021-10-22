@extends("base.base")
@section("page")
{{--<link href="{{ asset('css/home.css') }}" rel="stylesheet" />--}}
@include('base.navigation.main.index')
<div class="container shadow-lg rounded px-4 mx-auto bg-secondary-color center mb-4">
  <h2 class="text-white primary-font text-xl rounded py-4">
    {{ $mealData->name }}
  </h2>
</div>
<div class="container shadow-lg rounded px-4 mx-auto bg-secondary-color center mb-4">
  <h2 class="text-white primary-font text-xl rounded py-4 border-b-2 border-gray-600">
    Foods List
  </h2>
  @include('food-macro-accordion.index')
</div>
<div class="container shadow-lg rounded px-4 mx-auto bg-secondary-color center mb-4">
  <h2 class="text-white primary-font text-xl rounded py-4">
    {{ $mealData->name }}
  </h2>
</div>
@include('base.navigation.sticky-add.index')
@endsection
