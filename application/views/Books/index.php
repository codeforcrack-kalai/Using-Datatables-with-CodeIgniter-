<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Display</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

<div class="row">
	<div class="col-lg-3">
	</div>
	<div class="col-lg-6">



    	    <h1>Book List</h1>

    <form class="form-horizontal" method="post" action="add_book">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="price">Price</label>  
  <div class="col-md-5">
  <input id="price" name="price" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="author">author</label>  
  <div class="col-md-5">
  <input id="author" name="author" type="text" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="publisher">publisher</label>  
  <div class="col-md-5">
  <input id="publisher" name="publisher" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="rating">rating</label>  
  <div class="col-md-4">
  <input id="rating" name="rating" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Save">Save</label>
  <div class="col-md-4">
    <button id="Save" name="Save" class="btn btn-info">Save</button>
  </div>
</div>

</fieldset>
</form>


   
</html>