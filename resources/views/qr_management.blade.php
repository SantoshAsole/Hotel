@include('ui.header')
<style>
    .form-control:focus {
        border-color: rgb(164, 0, 50);

    }
</style>
<style>
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

    /* input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
} */

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

    .file-input__input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .file-input__label {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        /* font-weight: 600; */
        color: #fff !important;
        font-size: 14px;
        padding: 10px 12px;
        /* background-color: rgb(164, 0, 50); */
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
    }

    #filelable {
        color: white !important;
    }

    .file-input__label svg {
        height: 16px;
        margin-right: 4px;
    }
</style>

<div class="card shadow mb-4">
    <div class="card-header d-sm-flex  mb-4 d-flex justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Hotel Management</h1>
        <button class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#addHotel">Add
            Hotel</button>
    </div>
    <div class="col-lg-12">

        <div class="ms-panel">
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped thead-primary w-100">
                        <thead>
                            <tr role="row">
                                <th>Sr.No.</th>
                                <th>Hotel Name</th>
                                <th>QR Codes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($qrs as $qr)
                </div>
            </div>

            <tr>
                <td>{{ $i }}</td>
                @foreach ($hotels as $hotel)
                    @if ($hotel['id'] == $qr['hotel_id'])
                        <td>{{ $hotel['hotel_name'] }}</td>
                    @endif
                @endforeach

                <td>{!! QrCode::size(30)->backgroundColor(245, 245, 220)->generate('' . $qr['qr_url'] . '') !!}</td>

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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


@include('ui.footer')
