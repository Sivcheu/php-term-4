<div class="d-flex justify-content-center">
    <div class="header mt-5">
        <h2>
            Our Organization
        </h2>
    </div>
</div>
<div class="row shadow">
    @foreach($orgs as $org)
        <div class="col-lg-4 col-md-6 col-xs-12 shadow-sm rounded">
            <div class="p-3 text-center" style="width: auto; height: fit-content">
                <img class="card-img-top cs-image mt-1" src="{{asset('image/'.$org->image)}}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title cs-header">
                        {{$org['name']}}
                    </h5>
                    <p class="card-text cs-p ">
                        {{$org->des}}
                    </p>
                    <a href="donationForm/{{$org->id}}" class="btn btn-outline-success">
                        Donate Now
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
