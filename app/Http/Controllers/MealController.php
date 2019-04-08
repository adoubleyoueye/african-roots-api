<?php

namespace App\Http\Controllers;
use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    /**
     * Responds to requests to GET /meals
     * Shows all
     */
    {
        return Meal::all();
        return parent::formatResponse($meals, true, 200);
    }
    public function store(Request $request)
    /**
     * Responds to requests to POST /meals
     * inserts new
     */
    {
        $meals = Meal::create($request->all());
        return response()->json($meals);
    }
}
