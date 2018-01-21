<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to my blog</title>
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
		<div class="row ">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default" style="text-align: center;">
				  <div class="panel-heading"><h3>Write your post</h3></div>
				  @if(Session::has('success'))
                		<div class="alert alert-success">
                			{{ Session::get('success') }}
                		</div>
                	@endif
				  <div class="card-body">
				  	<form action="/add" method="post">
				  		 {{ csrf_field() }}
				  		 <label for="name">Name</label>
				  		<input type="text" placeholder="Enter your name" class="form-control"  name="name" required>
				  		<label for="name">Title</label>
				  		<input type="text" placeholder="Enter your post title" class="form-control"  name="title" required>
				  		<label for="name">Post</label>
				  		<textarea name="post" placeholder="Write your post here" class="form-control" id="" cols="30" rows="5" required></textarea><br>
				  		<input type="submit" class="btn btn-success btn-block" value="Send"><br>
				  	</form>
				  </div> 
				  
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<table class="table table-hover">
						<thead>
							<tr>
							<th>Post By</th>
							<th>Post Title</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $post)
							<tr>
							<th>{{$post->name}}</th>
							<th>{{$post->title}}</th>
							<th><a href="/viewpost/{{$post->id}}" class="btn btn-info">View</a>|<a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>|<a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></th>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>	
	</div>
</body>
</html>