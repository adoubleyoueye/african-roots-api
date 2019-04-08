<?php

namespace App\Http\Controllers;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    /**
     * Responds to requests to GET /inventory
     * Shows all
     */
    {
        return Inventory::all();
            return parent::formatResponse($inventory, true, 200);
    }
    public function update(Request $request, $id)
    /**
     * Responds to requests to PUT /inventory/{id}
     * Shows specific page with matching id
     * saves updated
     */
    {
        $inventory = Inventory::find($id);
        if (!$inventory) {
            return response()->json([
                'success' => false,
                'message' => 'Inventory with id ' . $id . ' not found'
            ], 400);
        }

        $updated = $inventory->fill($request->all())->save();
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Inventory could not be updated'
            ], 500);
        }
}
