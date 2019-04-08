<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    /**
     * Responds to requests to GET /admin/users
     * Shows all
     */
    {
        return User::all();
        return parent::formatResponse($user, true, 200);
    }
    public function update(Request $request, $id)
    /**
     * Responds to requests to PUT /admin/users/{id}
     * Shows specific page with matching id
     * saves updated
     */
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'user with id ' . $id . ' not found'
            ], 400);
        }

        $updated = $user->fill($request->all())->save();
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'user could not be updated'
            ], 500);
        }
}
