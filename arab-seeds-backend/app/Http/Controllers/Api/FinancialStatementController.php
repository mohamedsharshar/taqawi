<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FinancialStatement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinancialStatementController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $statements = FinancialStatement::active()
            ->ordered()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $statements,
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
            'statement_date' => 'required|date',
            'type' => 'required|in:balance_sheet,income_statement,cash_flow,other',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('financial-statements', 'public');
            
            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
        }

        $statement = FinancialStatement::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Financial statement created successfully',
            'data' => $statement,
        ], 201);
    }

    public function show(FinancialStatement $financialStatement): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $financialStatement,
        ]);
    }

    public function update(Request $request, FinancialStatement $financialStatement): JsonResponse
    {
        $validated = $request->validate([
            'title_ar' => 'sometimes|string|max:255',
            'title_en' => 'sometimes|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'file' => 'sometimes|file|mimes:pdf|max:10240',
            'statement_date' => 'sometimes|date',
            'type' => 'sometimes|in:balance_sheet,income_statement,cash_flow,other',
            'is_active' => 'sometimes|boolean',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($financialStatement->file_path);
            
            $file = $request->file('file');
            $path = $file->store('financial-statements', 'public');
            
            $validated['file_path'] = $path;
            $validated['file_name'] = $file->getClientOriginalName();
            $validated['file_size'] = $file->getSize();
        }

        $financialStatement->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Financial statement updated successfully',
            'data' => $financialStatement,
        ]);
    }

    public function destroy(FinancialStatement $financialStatement): JsonResponse
    {
        Storage::disk('public')->delete($financialStatement->file_path);
        $financialStatement->delete();

        return response()->json([
            'success' => true,
            'message' => 'Financial statement deleted successfully',
        ]);
    }
}
