<!DOCTYPE html>
<html>
<head>
	<title>Pasang Job Desain</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
</head>
<body>
    <div id="header">
        @include('partials.navbar-percetakan')
    </div>

    <div id="body">

        <section class="container">
            <div class="row mt-2">
                <div class="col-md-12 ">
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <h4>Pesanan Cetak</h4>
                        <form class="form-inline float-left">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>
                </div>
            </div>
            
            @forelse ($orders as $index => $order)
  
            <div class="row mt-2">
                <div class="card w-100 mt-1">
                    <div class="card-body">
                        <div class="row col-md-12" style="padding-left: 0px; padding-right: 0px">
                            <div class="col-md-2" align="center" style="padding-left: 0px">
                                <img class="img-fluid" src="{{ url('/storage/' . $order->attachment)}}">
                            </div>
                            <div class="col-md-7">
                                
                                <p style="margin-bottom: 1px; font-style:italic;">{{$order->created_at}}</p>
                                <p style="margin-bottom: 1px;">Total Cetak :  {{ $order->quantity }}</p>
                                <p>{{ $order->message }}</p>
                                <a href="{{ url('/download/'. $order->attachment )}}" target="_blank" class="btn btn-success" style="padding-right:40px; padding-left:40px;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-md-3" style="padding-right: 0px">
                                <div class="float-right" align="center">
                                    <div>
                                        <h5 style="margin-bottom: 0px">Total Biaya</h5>
                                        <label>Rp.100.000</label>
                                        @if ($order->status ==  'Accepted')
                                            <div class="">
                                                <span class="badge badge-pill badge-success">Diterima</span>
                                            </div>
                                        @elseif($order->status ==  'Rejected')
                                            <div>
                                                <span class="badge badge-pill badge-danger">Ditolak</span>
                                            </div>
                                        @else
                                            <p>
                                                <a href="{{ url('/percetakan/orders/'. $order->id . '/accept') }}" class="btn btn-success" style="width: 100px">Terima</a>

                                                <a href="{{ url('/percetakan/orders/'. $order->id . '/reject') }}" class="btn btn-danger" style="width: 100px">Tolak</a>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </section>

    </div>

    <div id="footer">
        @include('partials.footer-percetakan')
    </div>

    @include('partials.import-foot')
</body>
</html>