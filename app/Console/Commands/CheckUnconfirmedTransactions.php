<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use Carbon\Carbon;

class CheckUnconfirmedTransactions extends Command
{
    protected $signature = 'transactions:check';

    protected $description = 'Check and update unconfirmed transactions';

    public function handle()
    {
        $transactions = Transaction::where('status', 1)
            ->where('created_at', '<=', now()->subMinutes(2))
            ->get();

        foreach ($transactions as $transaction) {
            $transaction->status = 0; // Cập nhật trạng thái giao dịch sang hủy
            $transaction->save();
        }

        $this->info('Updated ' . count($transactions) . ' unconfirmed transactions.');
    }
}
