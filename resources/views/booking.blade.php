@extends('template')
@section('content')


<div class="wrapper mt-5 mb-5 bg-white">
    <div class="container shadow p-3">
        <div class="col-md-12">
            <h2 class="text-center text-color">Reservation</h2>
        </div>
        <form action="#">
            <div class="d-flex mt-5 col-md-12">
                <div class="col-md-6">
                    <label for="">Arrival Date</label>
                    <div class="d-flex align-items-center flex-fill me-sm1 my-sm-0 border-bottom position-relative">
                        <input type="date" required placeholder="Arrival date" class="form-control">
                        <div class="label" id="depart"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Return Date</label>
                    <div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
                        <input type="date" required placeholder="Return Date" class="form-control">
                        <div class="label" id="return"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <label for="">Input Your Name</label>
                <div class="form-group border-bottom d-flex align-items-center position-relative">
                    <input type="text" required placeholder="Traveller(s)" class="form-control">
                    <div class="label" id="psngr"></div>
                    <span class="fas fa-users text-muted"></span>
                </div>
            </div>
            <div class="form-group my-3">
                <div class="btn main-color text-white rounded d-flex justify-content-center text-center p-3">Confirm
                </div>
            </div>
        </form>
    </div>

</div>

@endsection
