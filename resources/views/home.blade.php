<html>
<head>
	 <title>Review System</title>
	 <link rel="stylesheet" href="{{asset('nn/style.css')}}">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

   <header>
   	   
   	   <div class="row">
                <div class="logo">
                  	<img src="log.png">
                </div>

      	   	
   	   </div>

   	    <div class="hero">
   	    	<h1>Welcome to Review System</h1>
            <p></p>
   	   	    <div class="button">
   	   	    	<a href="{{URL::to('login')}}" class="btn btn1">Log in</a>
   	   	    	<a href="{{URL::to('organizationregister')}}" class="btn btn2">Add Organization</a>
                  <a href="{{URL::to('userregister')}}" class="btn btn1">User Registration</a>
   	   	    </div>

   	    </div>
   </header>

</body>	



</html>
