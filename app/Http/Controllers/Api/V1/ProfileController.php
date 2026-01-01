<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    /**
     * Return a placeholder profile JSON response (API skeleton).
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => [
                'name' => 'Your Name',
                'role' => 'Developer',
                'bio' => 'This is a placeholder profile response.'
            ],
            'meta' => [
                'version' => 'v1'
            ]
        ]);
    }
}
