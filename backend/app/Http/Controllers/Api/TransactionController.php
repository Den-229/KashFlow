<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
class TransactionController extends Controller {
    public function index() { return response()->json(Transaction::all()); }
    public function store(Request $request) {
        $validated = $request->validate(['amount' => 'required|numeric', 'type' => 'required', 'category' => 'required']);
        $validated['account_id'] = 1;
        $validated['transaction_date'] = now();
        return response()->json(Transaction::create($validated), 201);
    }
}
