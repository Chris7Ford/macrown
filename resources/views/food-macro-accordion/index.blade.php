<link href="{{ asset('css/food-macro-accordion.css') }}" rel="stylesheet" />
<food-macro-accordion>
  <ul class="pt-2">
    @foreach ($mealOverviewData as $meal)
    <li class="tabs">
      <div class="tab">
        <input type="checkbox" id="chck{{ $loop->index }}">
        <label class="tab-label" for="chck{{ $loop->index }}">
          @if (!empty($urlSegment))
          <a href="{{ $urlSegment . '/' . $meal->id }}">
          @endif
          {{ $meal->name }}
          @if (!empty($urlSegment))
          </a>
          @endif
        </label>
        <div class="tab-content flex justify-between text-gray-400">
          <span class="py-4">
            Calories
          </span>
          <span class="py-4">
            {{ $meal->calories }}
          </span>
        </div>
        <div class="tab-content flex justify-between text-gray-400">
          <span class="py-4">
            Protein
          </span>
          <span class="py-4">
            {{ $meal->protein }}g
          </span>
        </div>
        <div class="tab-content flex justify-between text-gray-400">
          <span class="py-4">
            Carbohydrates
          </span>
          <span class="py-4">
            {{ $meal->carbs }}g
          </span>
        </div>
        <div class="tab-content flex justify-between text-gray-400">
          <span class="py-4">
            Fat
          </span>
          <span class="py-4">
            {{ $meal->fat }}g
          </span>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</food-macro-accordion>
