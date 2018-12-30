<!DOCTYPE html>
<html>
<head>
	<title>Job Deskripsi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar')

	<section class="container mt-4">
		<div class="col-lg-12">
		    <div class="row">
		        <div class="col-md-9">
		            <div class="row">
		                <div class="col-md-6">
		                </div>
		                <div class="col-md-6">
		                    <div class="float-right pr-5">
		                    	<div class="row">
	                    			<div style="padding: 5px">
	                    			    <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-thumbs-up"></i></button>
	                    			</div>
	                    			<div style="padding: 5px">
	                    				<a class="btn btn-outline-primary btn-sm" href="#" role="button"><i class="fa fa-share-alt"></i> Bagikan</a>
	                    			</div>
		                    	</div>
		                    </div>
		                </div>
		            </div>
		            <div>
		                <h4>{{$job->title}}</h4>
		            </div>
		            <div class="pt-4">
		                <div class="row">
		                    <div class="col-md-8">
		                        <div class="form-group">
		                            <label>Deskripsi</label>
		                            <div class="card">
		                              <div class="card-body">
		                                {{$job->description}}
		                              </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-md-6">
		                        <div class="form-group">
		                            <label>Attachment</label>
		                            <div class="card">
		                              <div class="card-body">
		                                File attachment
		                              </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
            	    <hr>
            	    <ul class="nav ">
            	        <li class="nav-item">
            	            <a class="nav-link active" href="#">Diskusi</a>
            	        </li>
            	        <li class="nav-item">
            	            <a class="nav-link" href="#">Submited Desain</a>
            	        </li>
            	    </ul>
            	    <hr>
		        </div>
		        <div class="col-md-3">
		            <div class="card">
		              	<img class="card-img-top" src="https://via.placeholder.com/100x100" alt="Card image cap" style="padding: 20px; padding-bottom: 0px">
		              	<div class="card-body" style="padding: 10px" align="center">
	                	<div class="star pt-1">
    		                <i class="fa fa-star"></i>
    		                <i class="fa fa-star"></i>
    		                <i class="fa fa-star"></i>
    		                <i class="fa fa-star"></i>
    		                <i class="fa fa-star-half"></i>
    		            </div>		                
        		        <div>
        		        	<label>{{$percetakan->name}}</label><hr>
		                    <label>Rp{{$job->budget}}</label>
		                </div>
		                <div class="pt-1">
		                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-chat"></i> Apply Job</a>
		                </div>
		              </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>

	@include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html> 