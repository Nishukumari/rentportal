
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.f1{
 border:5px solid black;
 height:59%;
  width:59%;
  margin-left:23%;
  padding: 1px 1px 1px 5px;
}
body {
   background-image:url('l1.jpeg');
   background-repeat:no-repeat;
   background-size:cover;
}
</style>


</head>
<body>

<div class="f1">
<h3 style="text-align:center;">SEARCH HOUSE FOR RENT</h3>
<hr style="border:2px solid black;">
<form method="post" action="connection.php">
<div class="form-group">
<label>SELECT AREA</span></label>
<select class="form-control" name="area" id="area" style="width:61%;">
<option >SELECT...</option>
<option value="jalandhar">Jalandhar</option>
<option value="phagwada">phagwada</option>
<option value="ludhiyana">Ludhiyana</option>
<option value="ambala">Ambala</option>
<option value="faridabad">Faridabad</option>
</select>
</div>
<br>
<div class="form-group">
<label>SELECT FLAT</span></label>

<div class="radio" >
<label><input type="radio"  value="1" name="check" >1 BHK</label>
</div>
<div class="radio">
<label><input type="radio" value="2" name="check">2 BHK</label>
</div>
<div class="radio">
<label><input type="radio" value="3" name="check">3 BHK</label>
</div>
</div>
<div class="form-group">
<label>SELECT GENDER</span></label>
<div class="radio" >
<label><input type="radio"  value="MALE" name="gender" >MALE</label>
</div>
<div class="radio">
<label><input type="radio" value="FEMALE" name="gender">FEMALE</label>
</div>
</div>
<center><button type="submit" id="submit"  class="btn btn-primary" name="submit">submit</button></center>

</form>
</div>

</body>
</html>
