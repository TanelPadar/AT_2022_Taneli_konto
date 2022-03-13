<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<form method="post" action="process.php">
  <div class="row">
    <div class="col-3">
      <input type="date" class="form-control" name="kuupaev" placeholder="date">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="tyyp" placeholder="type">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="kategooria" placeholder="category">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="aeg" placeholder="spent time">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="markmed" placeholder="notes">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="tagid" placeholder="Technology tags">
    </div>
    
    <input type="submit" name="save" class="btn-btn-primary" value="add new">
		
  </div>
</form>