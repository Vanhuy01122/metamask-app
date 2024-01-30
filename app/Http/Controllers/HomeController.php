<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function home()
    {
        if (Auth::user() && Auth::check()) {
            return view('home', [
                'eth_address' => Auth::user()->eth_address,
                'nonce' => Str::random(24)
            ]);
        }
        return view('home');
    }

    public function sendBnb(Request $request)
    {
        $transaction = new Transaction([
            'from_address' => $fromAddress,
            'to_address' => $toAddress,
            'amount' => $amountToSend,
            'transaction_hash' => $txHash,
        ]);
        $transaction->save();
        return response()->json(['result' => $result, 'transaction' => $transaction]);
    }

    public function sendToken(Request $request)
    {
        $transaction_data = $request->input('transactionData');

        // Save the transaction to the database
        $transaction = new Transaction();
        $transaction->transaction_hash = strval($transaction_data['data']);
        $transaction->from_address = strval($transaction_data['from']);
        $transaction->recipient_address = strval($request->input('recipientAddress'));
        $transaction->amount = strval($request->input('amount'));
        $transaction->status = 1;
        $transaction->save();
        return response()->json(['message' => 'Transaction sent and recorded successfully', 'transaction' => $transaction]);
    }

    public function updateTransaction(Request $request)
    {
        $transactionHash = $request->input('transactionHash');
        $transactionData = $request->input('transactionData');

        // Tìm giao dịch trong cơ sở dữ liệu bằng mã giao dịch
        $transaction = Transaction::where('transaction_hash', $transactionData['data'])->first();

        // Kiểm tra xem giao dịch có tồn tại không
        if ($transaction) {
            // Cập nhật trạng thái giao dịch
            $transaction->status = 2;
            $transaction->transaction_hash = $transactionHash;
            $transaction->save();
            return response()->json(['message' => 'Transaction status updated successfully']);
        } else {
            return response()->json(['error' => 'Transaction not found'], 404);
        }
    }
}
