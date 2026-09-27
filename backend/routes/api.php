<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransactionController;
Route::prefix('v1')->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::post('/transactions', [TransactionController::class, 'store']);
    Route::get('/analytics/monthly', function() { return response()->json(['income' => 3500, 'expenses' => 1120, 'savings' => 2380]); });
});
