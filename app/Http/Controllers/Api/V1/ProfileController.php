<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    /**
     * Return the profile information.
     */
    public function index(): JsonResponse
    {
        $profile = Profile::with('user')->first();

        if (!$profile) {
            return response()->json([
                'data' => null,
                'message' => 'Profile not found',
                'meta' => [
                    'version' => 'v1',
                ],
            ], 404);
        }

        return response()->json([
            'data' => new ProfileResource($profile),
            'meta' => [
                'version' => 'v1',
            ],
        ]);
    }
}
