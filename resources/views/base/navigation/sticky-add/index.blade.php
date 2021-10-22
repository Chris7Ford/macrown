<link href="{{ asset('css/sticky-add.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('js/sticky-add.js') }}" defer></script>
<sticky-add class="fixed block w-full flex items-center justify-center">
  <div class="flex flex-col items-center">
    <div class="flex flex-col mb-2 sticky-add-options closed">
      <a class="text-center text-white border-2 border-gray-600 my-2 py-2 px-4 rounded">Add Food</a>
      <a class="text-center text-white border-2 border-gray-600 my-2 py-2 px-4 rounded">Create Meal</a>
      <a class="text-center text-white border-2 border-gray-600 my-2 py-2 px-4 rounded">I ate something else today</a>
    </div>
    <button class="toggle-sticky-add block rounded-full h-16 w-16 bg-purple-500 active:bg-purple-700 p-5">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
    </button>
  </div>
</sticky-add>
