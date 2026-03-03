<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\IrManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IrManagerController extends Controller
{
    public function index(): JsonResponse
    {
        $manager = IrManager::active()->first();

        return response()->json([
            'success' => true,
            'data' => $manager,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'position_ar' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('ir-managers', 'public');
        }

        $manager = IrManager::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'IR Manager created successfully',
            'data' => $manager,
        ], 201);
    }

    public function update(Request $request, IrManager $irManager): JsonResponse
    {
        $validated = $request->validate([
            'name_ar' => 'sometimes|string|max:255',
            'name_en' => 'sometimes|string|max:255',
            'position_ar' => 'sometimes|string|max:255',
            'position_en' => 'sometimes|string|max:255',
            'phone' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('photo')) {
            if ($irManager->photo) {
                Storage::disk('public')->delete($irManager->photo);
            }
            $validated['photo'] = $request->file('photo')->store('ir-managers', 'public');
        }

        $irManager->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'IR Manager updated successfully',
            'data' => $irManager,
        ]);
    }

    public function destroy(IrManager $irManager): JsonResponse
    {
        if ($irManager->photo) {
            Storage::disk('public')->delete($irManager->photo);
        }
        $irManager->delete();

        return response()->json([
            'success' => true,
            'message' => 'IR Manager deleted successfully',
        ]);
    }
}
