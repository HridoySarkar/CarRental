<?php
include 'config/userPageConfig.php';
include 'partials/userNav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
</head>
<body>


<div class="container">
    <div class="content my-5">
        <h3>Welcome <span>
            <?php
            echo ucwords($_SESSION['user']);
            ?>
        </span></h3>
    </div>
    <div class="row">
    <div class="col-md-6">
    <form>
  <div class="mb-3">
    <h4>Where you want to go</h4>
    <label for="exampleInputEmail1" class="form-label">Pick up address</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Select</option>
            <option value="1">Banani</option>
            <option value="2">Badda</option>
            <option value="3">Gulsan 1</option>
            <option value="4">Gulsan 2</option>
            <option value="5">Uttora</option>
            <option value="6">Mohamadhpur</option>
            <option value="7">Mirpur</option>
            <option value="8">Shahabag</option>
            <option value="9">Agortola</option>
            <option value="10">Nikunjo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Your destination</label>
                <select class="form-select" aria-label="Default select example">
        <option selected>Select</option>
            <option value="1">Banani</option>
            <option value="2">Badda</option>
            <option value="3">Gulsan 1</option>
            <option value="4">Gulsan 2</option>
            <option value="5">Uttora</option>
            <option value="6">Mohamadhpur</option>
            <option value="7">Mirpur</option>
            <option value="8">Shahabag</option>
            <option value="9">Agortola</option>
            <option value="10">Nikunjo</option>
                </select>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with the  <a href="#">terms and conditions </a></label>
            </div>
                <button type="submit" class="btn btn-primary">Confirm</button>
             </form>
    </div>
            <div class="col-md-6">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pick up</th>
      <th scope="col">Destination</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
    </div>
</div>
    
</body>
</html>

<?php
include 'partials/footer.php';
?>