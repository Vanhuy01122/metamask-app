@extends('admin.layout.navbar')

@section('content')
    <div class="p-9">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Mã giao dịch</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Số lượng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($transactions as $key => $transaction)
                                    <tr>
                                        <td class="border-bottom-0"><h6
                                                class="fw-semibold mb-0">{{ $key }}</h6></td>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-semibold">{{ $transaction->transaction_hash }} VH</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-semibold">{{ $transaction->amount }} VH</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            @if($transaction->status == 2)
                                                <h6 class="mb-0 fw-semibold">Giao dịch hoàn thành</h6>
                                            @else
                                                <h6 class="mb-0 fw-semibold">Giao dịch chưa hoàn thành</h6>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
