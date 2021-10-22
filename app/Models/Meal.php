<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = array(
      "user_id",
      "name",
    );

    public static function getUserCurrentMealOverview()
    {
      $userId = 1;
      $mealPlan = Meal::getUserCurrentMealPlan($userId);
      $meals = Meal::getMealsByMealPlanId($mealPlan->id)->toArray();
      foreach ($meals as $key => $meal) {
        $macros = Meal::getMealMacros($meal->id);
        $meals[$key] = (object) array_merge((array) $meal, (array) $macros);
      }
      return (object) $meals;
    }

    public static function getMealMacros($mealId)
    {
      $macros = DB::table("foods AS f")
        ->selectRaw('SUM(f.protein) AS "protein", SUM( f.carbs) AS "carbs", SUM( f.fat) AS "fat", SUM(f.calories) AS "calories"')
        ->join('foods_meals_relationships AS r', 'f.id', '=', 'r.food_id')
        ->where("r.meal_id", '=', $mealId)
        ->first();
      return $macros;
    }

    public static function getMealFoodsData($mealId)
    {
      $foods = DB::table("foods AS f")
        ->select("f.id", "f.name", "f.protein", "f.carbs", "f.fat", "f.calories", "f.number_of_servings_container", "f.serving_size")
        ->join('foods_meals_relationships AS r', 'f.id', '=', 'r.food_id')
        ->where("r.meal_id", '=', $mealId)
        ->get();
      return $foods;
    }

    public static function getMealsByMealPlanId($mealPlanId)
    {
      $meals = DB::table("meal_plan_meal_relations AS r")
        ->select("m.id", "m.name")
        ->join('meals AS m', 'r.meal_id', '=', 'm.id')
        ->where("r.meal_plan_id", '=', $mealPlanId)
        ->get();
      return $meals;
    }

    public static function getUserCurrentMealPlan($userId)
    {
      $userId = 1;
      $mealPlan = DB::table("meal_plans")
        ->select("id", "name")
        ->where('user_id', '=', $userId)
        ->where("is_current_meal_plan", '=', 1)
        ->first();
      return $mealPlan;
    }
}
