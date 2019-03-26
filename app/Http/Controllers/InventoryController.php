<?php

namespace App\Http\Controllers;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return Inventory::all();
            return parent::formatResponse($inventory, true, 200);
    }

}
