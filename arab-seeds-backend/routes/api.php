<?php

use App\Http\Controllers\Api\FinancialStatementController;
use App\Http\Controllers\Api\MeetingMinuteController;
use App\Http\Controllers\Api\IrManagerController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::prefix('v1')->group(function () {
    // Financial Statements
    Route::get('financial-statements', [FinancialStatementController::class, 'index']);
    Route::get('financial-statements/{financialStatement}', [FinancialStatementController::class, 'show']);
    
    // Meeting Minutes
    Route::get('meeting-minutes', [MeetingMinuteController::class, 'index']);
    Route::get('meeting-minutes/{meetingMinute}', [MeetingMinuteController::class, 'show']);
    
    // IR Manager
    Route::get('ir-manager', [IrManagerController::class, 'index']);
});

// Protected routes (require authentication)
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    // Financial Statements Management
    Route::post('financial-statements', [FinancialStatementController::class, 'store']);
    Route::post('financial-statements/{financialStatement}', [FinancialStatementController::class, 'update']);
    Route::delete('financial-statements/{financialStatement}', [FinancialStatementController::class, 'destroy']);
    
    // Meeting Minutes Management
    Route::post('meeting-minutes', [MeetingMinuteController::class, 'store']);
    Route::post('meeting-minutes/{meetingMinute}', [MeetingMinuteController::class, 'update']);
    Route::delete('meeting-minutes/{meetingMinute}', [MeetingMinuteController::class, 'destroy']);
    
    // IR Manager Management
    Route::post('ir-manager', [IrManagerController::class, 'store']);
    Route::post('ir-manager/{irManager}', [IrManagerController::class, 'update']);
    Route::delete('ir-manager/{irManager}', [IrManagerController::class, 'destroy']);
});
