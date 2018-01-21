<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Post</title>
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			html, body {
               
                
             font-family: 'Montserrat', sans-serif;	
               
                
            }
		</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
				<a href="/"><h3>Back</h3></a>
				<div class="panel panel-default" style="text-align: center;">
				  <div class="panel-heading"><h3>Edit your post</h3></div>
				  @if(Session::has('success'))
                		<div class="alert alert-success">
                			{{ Session::get('success') }}
                		</div>
                	@endif
				  <div class="card-body">
				  	<form action="/post_edit/{{$posts->id}}" method="post">
				  		 {{ csrf_field() }}
				  		 <label for="name">name</label>
				  		<input type="text" class="form-control" value="{{$posts->name}}"  name="name" required>
				  		<label for="name">Title</label>
				  		<input type="text" class="form-control" value="{{$posts->title}}"  name="title" required>
				  		<label for="name">Post</label>
				  		<textarea name="post" class="form-control" id="" cols="30" rows="5" required>{{$posts->post}}</textarea><br>
				  		<input type="submit" class="btn btn-success btn-block" value="Send"><br>
				  	</form>
				  </div> 
				  
				</div>
			</div>
		</div>
	</div>
</body>
</html>