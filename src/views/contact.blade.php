<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Page</title>
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 col-lg-6 pb-5">
	            <form action="{{ route('contact') }}" method="post" role="form">
	                <div class="card border-primary rounded-0">
	                    <div class="card-header p-0">
	                        <div class="bg-info text-white text-center py-2">
	                            <h3><i class="fa fa-envelope"></i> Contact Us</h3>
	                            <p class="m-0">Feel free to leave a message :)!</p>
	                        </div>
	                    </div>
	                    <div class="card-body p-3">

	                        <div class="form-group">
	                            <div class="input-group mb-2">
	                                <div class="input-group-prepend">
	                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
	                                </div>
	                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="input-group mb-2">
	                                <div class="input-group-prepend">
	                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
	                                </div>
	                                <input type="email" class="form-control" name="email" placeholder="Email address" required>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="input-group mb-2">
	                                <div class="input-group-prepend">
	                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
	                                </div>
	                                <textarea name="message" class="form-control" placeholder="Your message" required></textarea>
	                            </div>
	                        </div>

	                        <div class="text-center">
	                            <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
	                        </div>
	                    </div>
	                </div>
	            </form>
	        </div>
		</div>
	</div>
</body>
</html>