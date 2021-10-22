<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use Illuminate\Http\Request;
use App\Models\Meal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index',[
      "mealOverviewData" => MealController::getUserCurrentMealOverview(),
      "urlSegment" => "meal"
    ]);
});

Route::get('/meal/{mealId}', function (Request $request) {
    $mealId = $request->segment(2);
    return view('pages.meal.index', [
      "mealOverviewData" => MealController::getMealFoodsData($mealId),
      "mealData" => Meal::where("id", $mealId)->first(),
      "urlSegment" => "food"
    ]);
});
