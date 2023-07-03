@include('ui.header')
<style>
    .col-md-1,
    .col-md-2 {
        /* border: 1px solid !important; */

    }

    .col-md-1 {
        background-color: #4db6ac;
        color: white;
    }

    .col-md-2 {
        background-color: #90caf9;
    }

    .line {
        border: 0.1rem solid !important;
    }

    .active,
    .slot:hover {
        cursor: pointer;
        background-color: rgb(164, 0, 50);
        color: white;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex  mb-4 d-flex justify-content-between">

        <div>
            <h6>Todays Meals</h6>
        </div>
        <div>
            <p><b>Date: <?php echo date('d/m/Y'); ?></b></p>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="row" id="myDIV">
            <div class="slot col-md-1 rounded border m-2 p-2 text-center active">
                Slot 1
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 2
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 3
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 4
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 5
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 6
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 7
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 8
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 9
            </div>
            <div class="slot col-md-1 rounded border m-2 p-2 text-center">
                Slot 10
            </div>
        </div>
        <hr class="line">
        <div class="row">
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            <div class="col-md-2 rounded m-2 p-1 text-center">
                FD
                <br>
                Floor #5
                <br>
                Room #123
                <br>
                Bed #12

            </div>
            {{-- <div class="col-md-1 rounded m-2 p-1 text-center">
                Slot 7
            </div>
            <div class="col-md-1 rounded m-2 p-1 text-center">
                Slot 8
            </div>
            <div class="col-md-1 rounded m-2 p-1 text-center">
                Slot 9
            </div>
            <div class="col-md-1 rounded m-2 p-1 text-center">
                Slot 10
            </div> --}}
        </div>

    </div>
    <div class="card-footer d-sm-flex d-flex justify-content-between">
        <div>
            <button class="btn btn-primary">Switch View</button>
        </div>
        <div>
            <button class="btn btn-primary">Deliver All</button>
        </div>
    </div>
</div>
@include('ui.footer')

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("slot");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
