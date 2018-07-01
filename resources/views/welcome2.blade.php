<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>instagram</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	
	.header{
        min-height: 90px;
    }
    .footer{
        min-height: 60px;
    }
    .header, .footer{
        background: #2f2f2f;
    }
    .sidebar{
        background: #dbdfe5;
    }
    .content{
        background: #b4bac0;
    }
    .sidebar, .content{
        min-height: 300px;
    }
</style>
</head>
<body>
	<!-- Open the output in a new blank tab (Click the arrow next to "Show Output" button) and resize the browser window to understand how the Bootstrap responsive grid system works. -->
	<div class="container">
   
    	<div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
            <a href="/"><img class="img-thumbnail img-responsive" src="{{asset($image->image)}}"/> </a>
            

            </div>
            
            @endforeach
        </div>
        
       
    </div>
</body>
</html>                            