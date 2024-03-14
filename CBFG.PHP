<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>modal drop!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- Button trigger modal -->
	<div class= "container">
	  <div class="row justify-content-center">
	  <div class="col-md-8">
	    <div class="card">
		<div class="card-header">
		<h3>hello this is my personal PROJECT!!.<h3>
<a> <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  update it!
</button></a>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<form class="myform" >
	<div class="container">
  <div class="form-group">
    <label for="name" class="sidname">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="write your name here">
  </div>
  <div class="form-group">
    <label for="fathername">fathername</label>
    <input type="text" class="form-control" name="fathername" placeholder="Father's name">
  </div>
  <div class="form-group">
    <label for="mothername">Mother's name</label>
    <input type="text" class="form-control" name="mothername" aria-describedby="mothername" placeholder="Mother's name">
  </div>
  <div class="form-group">
    <label for="village">Village</label>
    <input type="text" class="form-control" name="village" placeholder="where you live">
  </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" value="submit">submit <a href="showdata.php"></a></button>
      </div>
    </div>
  </div>
</div>  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>