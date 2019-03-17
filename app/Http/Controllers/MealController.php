<?php

namespace App\Http\Controllers;
use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    // public function index(Request $request, $id)
    // {
    //     $db = DB::connection('mongodb')->collection("meals");
    //     $meals = $db->where('cid', '=', $id)->get();

    //     return parent::formatResponse($meals, true, 200);
    // }
    public function index()
    {
        // $db = DB::connection('mongodb')->collection("meals");
        return Meal::all();
            return parent::formatResponse($meals, true, 200);
    }
    public function show(Meal $meal)
    {
        return $meals;
    }
    public function store(Request $request)
    {
        $meals = Meal::create($request->all());
        return response()->json($meals);
    }
    public function update(Request $request, Meal $meals)
    {
        $meals ->update($request->all());
        return response()->json($meals);
    }
    public function delete(Meal $meals)
    {
        $meal ->delete();
        return response()->json(null);
    }
}
