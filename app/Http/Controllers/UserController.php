<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() : JsonResponse
    {
        return response()->json(User::query()->get());
    }

    public function store(Request $request) : JsonResponse {
        $user = User::query()->create($request->all());
        return response()->json($user);
    }
}
