<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:rgb(0,0, 0); color: white; background-image: url(<?php echo base_url() ?>bgthis.png); background-repeat: no-repeat; background-position: center; background-attachment: fixed; height: 100vh;">

<div class="container" >
    <div class="row">
        <div class="col-md-12">
    <br><br>
<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form method="POST" action="<?php echo base_url(); ?>daftar">
      <div class="text-center mb-3 h-100 align-middle">
      <!-- Email input -->
      <br><br><br><br><br>
      <h2>This Is Me 2025 with musical drama "Xinling de Ningjing" - RSVP :</h2>
      <br>
      <h3 class="text-warning">Registration Details:</h3><br>
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Child's Name:</label>
        <input type="text" id="loginName" name="nama" class="form-control" required />
      </div>
        <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Email:</label>
        <input type="email" id="loginName" name="email" class="form-control" required />
      </div>
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Class/Grade:</label>
        <!-- <input type="text" id="loginName" name="grade" class="form-control" required /> -->
        <select name="grade" id="cars" class="form-control">
          <option value="">-- Select Option --</option>
            <option value="secondary 7">secondary 7</option>
            <option value="secondary 8">secondary 8</option>
            <option value="secondary 9">secondary 9</option>
            <option value="college 10">college 10</option>
            <option value="college 11">college 11</option>
            <option value="college 12">college 12</option>
          </select>
      </div>
    
     <!--  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Tempat, Tanggal Lahir</label>
        <input type="text" id="loginName" name="ttl" class="form-control" />
      </div> -->
     <!--  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Branch:</label>
        <input type="text" id="loginName" name="hp" class="form-control" required />
      </div> -->
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Relationship:</label>
        <input type="text" id="loginName" name="occupation" class="form-control" required />
      </div>

     <!--  <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Relationship:</label>
          
      </div>
 -->
    

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        
      </div>

      <!-- 2 column grid layout -->

      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Register</button>

      <!-- Register buttons -->
      
    </div>
    </form>
  </div>
</div>
<!-- Pills content -->
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</html>
