<link rel="stylesheet" href="assets/css//bootstrap.min.css">
<html>
<h1 style="text-align:center">CV FORM</h1>
<br>
<form action="cv.php" method="post"> 
  <div class="row justify-content-center">
    <div class="col-5">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
    </div>
  <div class="col-5">
        <div class="form-group">
            <label for="exampleInputPassword1">Position1</label>
            <input type="text" class="form-control" name="position1" placeholder="Position 1">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="exampleInputPassword1">Position2</label>
            <input type="text" class="form-control" name="position2" placeholder="Position 2">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="exampleInputPassword1">Position3</label>
            <input type="text" class="form-control" name="position3" placeholder="Position 3">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label for="exampleInputPassword1">Soft Skill</label>
            <input type="text" class="form-control" name="softskill1" placeholder="Soft Skill 1"><br>
            <input type="text" class="form-control" name="softskill2" placeholder="Soft Skill 2">
        </div>
    </div>
    <div class="col-5">
    <div class="form-group">
        <label for="exampleInputPassword1">Working Experience</label>
        <input type="text" class="form-control" name="we1" placeholder="Working Experience"><br>
        <input type="text" class="form-control" name="we2" placeholder="Working Experience">
    </div>
    </div>

    <div class="col-5">
    <div class="form-group">
        <label for="exampleInputPassword1">Contact Details</label>
        <input type="text" class="form-control" name="cd1" placeholder="Contact Details1"><br>
        <input type="text" class="form-control" name="cd2" placeholder="Contact Details2">
    </div>
  </div>
  <div class="col-5">
    <div class="form-group">
        <label for="exampleInputPassword1">Projects</label>
        <input type="text" class="form-control" name="projects1" placeholder="projects1"><br>
        <input type="text" class="form-control" name="projects2" placeholder="projects2">
    </div>
  </div>
  <div class="col-5">
    <div class="form-group">
        <label for="exampleInputPassword1">References</label>
        <input type="text" class="form-control" name="references1" placeholder="references1"><br>
        <input type="text" class="form-control" name="references2" placeholder="references2">
    </div>
  </div>
  <div class="col-5">
    <div class="form-group">
        <label for="exampleInputPassword1">Educations</label>
        <input type="text" class="form-control" name="educations1" placeholder="educations1"><br>
        <input type="text" class="form-control" name="educations2" placeholder="educations2">
    </div>
  </div>
  </div>  
  <div class="row">
  <div class="col-5 offset-1">
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>
</html>