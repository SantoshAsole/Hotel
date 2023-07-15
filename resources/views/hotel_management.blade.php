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
                                <th>Contact No.</th>
                                <th>Address</th>
                                <th>Tables</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($hotels as $hotel)
                                {{-- Edit Hotel Modal --}}
                                <div class="modal fade" id="editHotel{{ $i }}" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="editHotelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(164, 0, 50);">
                                                <h5 class="modal-title text-white" id="editHotelLabel">Update
                                                    Hotel</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3" action="{{ route('UpdateHotel') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="container">
                                                        <input type="hidden" name="hotel_id"
                                                            value="{{ $hotel['id'] }}">
                                                        <input type="hidden" name="is_active"
                                                            value="{{ $hotel['is_active'] }}">
                                                        <input type="hidden" name="is_delete"
                                                            value="{{ $hotel['is_delete'] }}">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Name</span>
                                                            <input type="text" class="form-control" name="hotel_name"
                                                                placeholder="Hotel Name"
                                                                value="{{ $hotel['hotel_name'] }}">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Email</span>
                                                            <input type="email" class="form-control" name="hotel_email"
                                                                placeholder="Hotel Email"
                                                                value="{{ $hotel['hotel_email'] }}">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Password</span>
                                                            <input type="text" class="form-control" name="hotel_password"
                                                                placeholder="Hotel Password"
                                                                value="{{ $hotel['hotel_password'] }}">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Contact</span>
                                                            <input type="text" class="form-control"
                                                                name="hotel_contact" placeholder="Hotel Contact No."
                                                                value="{{ $hotel['hotel_contact'] }}">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Address</span>
                                                            <input type="text" class="form-control"
                                                                name="hotel_address" placeholder="Hotel Address"
                                                                value="{{ $hotel['hotel_address'] }}">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Tables</span>
                                                            <input type="text" class="form-control"
                                                                name="hotel_tables" placeholder="Hotel Tables"
                                                                value="{{ $hotel['hotel_tables'] }}">
                                                        </div>
                                                        <br>
                                                        <div>
                                                            <img style="max-width: 50px; max-height: 50px;"
                                                                src='{{ url('public/Hotel Logos/' . $hotel->hotel_logo) }}'
                                                                class="card-img-top" alt="...">
                                                        </div>
                                                        <br>
                                                        <div class="input-group mb-3 d-flex justify-content-between">
                                                            <span class="input-group-text bg-danger text-white">Hotel
                                                                Logo</span>
                                                            <input type="file" name="hotel_logo" id="hotellogo1"
                                                                class="form-control" />

                                                            <div>
                                                                <img id="preview-image-before-upload1"
                                                                    style="max-width: 100px; max-height: 100px;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>

                                            </div>
                                            <br>
                                        </div>
                                        </form>
                                    </div>

                                </div>

                                {{-- QR code Modal --}}
                                <div class="modal fade" id="QR{{ $i }}" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="QRLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(164, 0, 50);">
                                                <h5 class="modal-title text-white" id="QRLabel">Generate QR Code</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3" action="{{ route('generate-QR') }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="container">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control shadow-none"
                                                                name="qr_url" placeholder="QR Code URL"
                                                                value="{{ $hotel['hotel_name'] }}">
                                                        </div>
                                                        <input type="hidden" name="hotel_id" value="{{$hotel['id']}}">
                                                        <br>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control shadow-none"
                                                                name="tables" placeholder="Tables"
                                                                value="{{ $hotel['hotel_tables'] }}">
                                                        </div>
                                                        <br>


                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Generate QR</button>

                                                        <br>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                </div>
            </div>

            <tr>
                <td>{{ $i }}</td>
                <td>{{ $hotel['hotel_name'] }}</td>
                <td>{{ $hotel['hotel_contact'] }}</td>
                <td>{{ $hotel['hotel_address'] }}</td>
                <td>{{ $hotel['hotel_tables'] }}</td>
                <td><img src='{{ url('public/Hotel Logos/' . $hotel->hotel_logo) }}' class="card-img-top" alt="...">
                </td>
                <td>
                    <label class="switch">
                        <input type="checkbox" data-id="{{ $hotel->id }}" class="switch new" type="checkbox"
                            data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                            {{ $hotel->is_active ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>
                    <a href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#editHotel{{ $i }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-pencil-square"
                            viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></i></a>
                    &nbsp;
                    <a class="" href="javascript:void(0)" onclick="deleteHotel({{ $hotel['id'] }})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                        </svg>
                    </a>

                    <a href="javascript:void(0)" data-bs-toggle="modal"
                    data-bs-target="#QR{{ $i }}">QR</a>
                </td>
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



{{-- Add Hotel Modal --}}
<div class="modal fade" id="addHotel" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addHotelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(164, 0, 50);">
                <h5 class="modal-title text-white" id="addHotelLabel">Add New Hotel</h5>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('AddHotel') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel Name</span>
                            <input type="text" class="form-control shadow-none" name="hotel_name"
                                placeholder="Hotel Name" value="">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel Email</span>
                            <input type="email" class="form-control shadow-none" name="hotel_email"
                                placeholder="Hotel Email" value="">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel Password</span>
                            <input type="text" class="form-control shadow-none" name="hotel_password"
                                placeholder="Hotel Password" value="">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel Contact</span>
                            <input type="text" class="form-control shadow-none" name="hotel_contact"
                                placeholder="Hotel Contact" value="">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel Address</span>
                            <input type="text" class="form-control" name="hotel_address"
                                placeholder="Hotel Address">
                        </div>

                        <br>

                        <div class="input-group mb-3">
                            <span class="input-group-text bg-danger text-white">Hotel No of Tables</span>
                            <input type="text" class="form-control" name="hotel_tables"
                                placeholder="Hotel No of Tables">
                        </div>
                        <br>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="file-input">
                                <input type="file" name="hotel_logo" id="file-input" class="file-input__input" />
                                <label class="file-input__label bg-danger" for="file-input">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload"
                                        class="svg-inline--fa fa-upload fa-w-16" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                        </path>
                                    </svg>
                                    <span id="filelable">Hotel Logo</span></label>
                            </div>
                            <div>
                                <img id="preview-image-before-upload2" style="max-height: 250px; max-width:100px;">
                            </div>
                        </div>

                        <br>


                        <input type="hidden" class="form-control shadow-none" name="is_active" placeholder="ACTIVE"
                            value="1">

                        <input type="hidden" class="form-control shadow-none" name="is_delete" placeholder="DELETE"
                            value="0">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>

                        <br>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


@include('ui.footer')

<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 2000,
        }
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif (Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });
</script>

<script>
    // change status function
    $(function() {
        $('.new').change(function() {
            var is_active = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            // console.log(is_active)
            // console.log(id)
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '{{ route('HotelStatus') }}',
                data: {
                    'is_active': is_active,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    });

    // soft delete hotel function
    function deleteHotel(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function(result) {
            if (result.value) {
                $.get("{{ route('DeleteHotel') }}", {
                    id: id
                }, function(data) {
                    if (data['success'] == true) {
                        Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                        location.reload();
                    } else {
                        Swal.fire('Ooops!', 'Oops somthing went wronge.', 'info');
                    }
                });
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function(e) {


        $('#file-input').change(function() {
            // console.log('hiii');
            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload2').attr('src', e.target.result);
                // console.log(e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });
</script>
