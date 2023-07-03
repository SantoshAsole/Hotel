@include('ui.header')

<style>
    .form-control:focus {
        border-color: rgb(164, 0, 50);

    }

    .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 25px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgb(164, 0, 50);
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: green;
    }


    input:checked+.slider:before {
        -webkit-transform: translateX(13px);
        -ms-transform: translateX(13px);
        transform: translateX(13px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

<div class="card shadow mb-4">
    <div class="card-header d-sm-flex  mb-4 d-flex justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Order History</h1>
    </div>

    <div class="col-lg-12">

        <div class="ms-panel">
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped thead-primary">
                        <thead>
                            <tr role="row">
                                <th>Sr. No.</th>
                                <th>Order ID</th>
                                <th>Patient Details</th>
                                <th>Dietician Name</th>
                                <th>Vendor Name</th>
                                <th>Order Date</th>
                                <th>Upcoming Order Date</th>
                                {{-- <th>Status</th>
                                <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $order['order_id'] }}</td>
                                    <td>
                                        @foreach ($patients as $patient)
                                            @if ($patient['id'] == $order['patient_id'])
                                                Name-{{ $patient['name'] }}
                                                <br> Slot-{{ $order['slot_no'] }}
                                                <br> Floor-{{ $patient['floor'] }}
                                                <br> Room-{{ $patient['room'] }}
                                                <br> Bed-{{ $patient['bed'] }}
                                            @endif
                                        @endforeach

                                    </td>
                                    <td>
                                        @foreach ($dietitians as $dietitian)
                                            @if ($dietitian['id'] == $order['dietitian_id'])
                                                {{ $dietitian['name'] }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor['id'] == $order['vendor_id'])
                                                {{ $vendor['name'] }}
                                            @endif
                                        @endforeach
                                        </td>
                                    <td>{{ $order['order_date'] }}</td>
                                    <td>{{ $order['upcoming_order_date'] }}</td>
                                    {{-- <td>{{ $order['order_status'] }}</td>
                                    <td>Action</td> --}}
                                    
                                </tr>
                                <?php $i++; ?>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('ui.footer')
