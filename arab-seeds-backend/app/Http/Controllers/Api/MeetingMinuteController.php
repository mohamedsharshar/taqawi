<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MeetingMinute;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MeetingMinuteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'show']);
        $this->middleware('permission:view meeting minutes')->only(['index', 'show']);
        $this->middleware('permission:create meeting minutes')->only('store');
        $this->middleware('permission:edit meeting minutes')->only('update');
        $this->middleware('permission:delete meeting minutes')->only('destroy');
    }

    public function index(Request $request): JsonResponse
    {
        $minutes = MeetingMinute::active()
            ->ordered()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $minutes,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'file' => 'required|file|mimes:pdf|max:10240',
            'meeting_date' => 'required|date',
            'type' => 'required|in:general_assembly,board_meeting,other',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('meeting-minutes', 'public');
            
            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
        }

        $minute = MeetingMinute::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Meeting minute created successfully',
            'data' => $minute,
        ], 201);
    }

    public function show(MeetingMinute $meetingMinute): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $meetingMinute,
        ]);
    }

    public function update(Request $request, MeetingMinute $meetingMinute): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'sometimes|string|max:255',
            'title_en' => 'sometimes|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'file' => 'sometimes|file|mimes:pdf|max:10240',
            'meeting_date' => 'sometimes|date',
            'type' => 'sometimes|in:general_assembly,board_meeting,other',
            'is_active' => 'sometimes|boolean',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($meetingMinute->file_path);
            
            $file = $request->file('file');
            $path = $file->store('meeting-minutes', 'public');
            
            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
        }

        $meetingMinute->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Meeting minute updated successfully',
            'data' => $meetingMinute,
        ]);
    }

    public function destroy(MeetingMinute $meetingMinute): JsonResponse
    {
        Storage::disk('public')->delete($meetingMinute->file_path);
        $meetingMinute->delete();

        return response()->json([
            'success' => true,
            'message' => 'Meeting minute deleted successfully',
        ]);
    }
}
