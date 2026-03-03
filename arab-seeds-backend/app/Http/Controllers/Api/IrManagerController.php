<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\IrManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IrManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except('index');
        $this->middleware('permission:view ir manager')->only('index');
        $this->middleware('permission:edit ir manager')->only(['store', 'update', 'destroy']);
    }

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
            'name.ar' => 'required|string|max:255',
            'name.en' => 'required|string|max:255',
            'position.ar' => 'required|string|max:255',
            'position.en' => 'required|string|max:255',
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
            'name.ar' => 'sometimes|string|max:255',
            'name.en' => 'sometimes|string|max:255',
            'position.ar' => 'sometimes|string|max:255',
            'position.en' => 'sometimes|string|max:255',
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
