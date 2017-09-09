<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    	<ul>

	    	@foreach ($tasks as $task)

	    		<li>{{ $tasks -> body }}</li>
	    	
	    	@endforeach

		</ul>

</body>
</html>