<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
				<a href="/"><h3>Back</h3></a>

				<div class="panel panel-default" style="">
					<div class="panel-heading"><h3>My post</h3></div>
				  @if(Session::has('success'))
                		<div class="alert alert-success">
                			{{ Session::get('success') }}
                		</div>
                	@endif
				  <div class="card-body">
				  	
				  		 
				  		<h4>Post Title:{{$posts->title}}</h4>
				  		
				  		
				  		<textarea name="post" class="form-control" id="" cols="30" rows="5" readonly required>{{$posts->post}}</textarea><br>
				  		<a href="/addlike/{{$posts->id}}" class="btn btn-warning"><i class="fa fa-thumbs-up" aria-hidden="true">{{$posts->likes}}</i></a>|<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><i class="fa fa-comment-o" aria-hidden="true"></i></button><br>
				  		<div id="demo" class="collapse">
  							<form action="/add_comment/{{$posts->id}}" method="post">
  								{{ csrf_field() }}
  								<input type="text" class="form-control" placeholder="Type your comment" name="cmnt" required>
  								{{-- <center><input type="submit" class="btn btn-success btn-sm" name="" style=""></center> --}}
  							</form>
  						</div>
  						
				  	
				  </div> 
				  
				</div>

			</div>
			

			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-4">
					<div class="panel panel-default" style="">
				 
				  <div class="card-body">
				  		{{-- <p>{{$comments->comments}}</p> --}}
				  		@foreach($comments as $comment)
  						<p><b>{{$comment->comments}}</b></p>
				  		@endforeach
				  </div> 
				  
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>