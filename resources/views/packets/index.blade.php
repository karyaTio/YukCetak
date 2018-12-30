<!DOCTYPE html>
<html>
<head>
	<title>Home Percetakan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar-percetakan')
    <section class="container mt-4">
        <a class="btn btn-primary m-2" href="{{ url('percetakan/services/'. $service->id . '/packets/create')}}">Tambah Paket</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Bahan</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="packets-list">

                @foreach($packets as $index => $packet)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <th>{{$packet->name}}</th>
                        <td>{{$packet->price}}</td>
                        <td>{{$packet->description}}</td>
                        <td>
                            <button class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-danger" id="show_modal_delete" data-id="{{ $packet->id }}">Hapus</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal_delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Paket ? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus paket ini ? </p>
            </div>
            <div class="modal-footer">
                <form action="{{url('/percetakan/services/packets/delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="id_hapus" id="id_hapus">
                    <button type="submit" class="btn btn-primary">Ya Lanjutkan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
            </div>
        </div>
    </div>

	@include('partials.footer-percetakan')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $('.packets-list').on('click', '#show_modal_delete',function(){
            var id = $(this).data('id');

            $('#id_hapus').val(id);

            $('#modal_delete').modal('show');
        });
    </script>
</body>
</html>