@extends("base.base")
@section("page")
<link href="{{ asset('css/home.css') }}" rel="stylesheet" />
@include('base.navigation.main.index')
<div id="home" class="container shadow-lg rounded px-4 mx-auto bg-secondary-color center mb-4">
  <h2 class="text-white primary-font text-xl rounded py-4 border-b-2 border-gray-600">
    Today's Meals
  </h2>
  @include('food-macro-accordion.index')
</div>
<div class="container shadow-lg rounded px-4 mx-auto bg-secondary-color center mb-4">
  <h2 class="text-white primary-font text-xl rounded py-4 border-b-2 border-gray-600">
    Progress
  </h2>
  <ul class="pt-2">
    <li class="py-2 text-white secondary-font">
      100 days consecutively logged
    </li>
    <li class="py-2 text-white secondary-font">
      5 Pounds lost
    </li>
  </ul>
</div>
@include('base.navigation.sticky-add.index')
@endsection
