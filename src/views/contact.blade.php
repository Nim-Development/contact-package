<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Page</title>
</head>
<body>

	<h1>Contact Us Anytime :)!</h1>

	<form action="{{ route('contact') }}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Your Name">
		<input type="email" name="email" placeholder="You Email">

		<textarea 
			name="message" 
			cols="30" 
			rows="10" 
			placeholder="your questio"
			>
				
			</textarea>

		<input type="submit" value="Submit">
	</form>

</body>
</html>