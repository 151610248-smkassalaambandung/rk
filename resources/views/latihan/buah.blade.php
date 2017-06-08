<!DOCTYPE html>
<html>
<head>
		<title>Looping</title>
</head>
<body>
<center>
		<h1>buah</h1>
		@foreach($buah as $data)
		   {{$data}}<hr>
		@endforeach
		<h1>makhlukhidup</h1>
		@foreach($makhlukhidup as $data)
		   {{$data}}<hr>
		@endforeach
		<h1>komputer</h1>
		@foreach($komputer as $data)
		   {{$data}}<hr>
		@endforeach
</center>
</body>
</html>