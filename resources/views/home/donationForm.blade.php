@extends('layouts.wrapper')

@section('ct')
    <h5 class="card-title text-center cs-header mb-5 mt-2">{{$org['name']}}</h5>
    <div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 cs-donation">
                <div class="card">
                    <div class="card-header text-center cs-h">Donation Form</div>
                    <div class="card-body">
                        <form action="/donate" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="org_id" value="{{$org->id}}">
                            <div class="row mb-3 mt-3 ml-1">
                                <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Amount" name="amount">
                                </div>
                                <div class="col">
                                    <span style="width: 30px" class="input-group-text">$</span>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-outline-success">
                                    Donate Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
