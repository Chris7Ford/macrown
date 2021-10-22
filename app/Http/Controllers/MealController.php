<?php

namespace App\Http\Controllers;
use App\Models\Meal;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public static function getUserCurrentMealOverview()
    {
      return Meal::getUserCurrentMealOverview();
    }

    public static function getMealFoodsData($mealId)
    {
      return Meal::getMealFoodsData($mealId);
    }
}
