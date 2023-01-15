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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



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
    <form method="post">
  <div class="mb-3">
    <h4>Where you want to go</h4>
    <label for="exampleInputEmail1" class="form-label">Pick up address</label>
    <select class="form-select" name="f_from" aria-label="Default select example">
        <option selected>Select</option>
            <option value="Banani">Banani</option>
            <option value="Badda">Badda</option>
            <option value="Gulsan 1">Gulsan 1</option>
            <option value="Gulsan 2">Gulsan 2</option>
            <option value="Uttora">Uttora</option>
            <option value="Mohamadhpur">Mohamadhpur</option>
            <option value="Mirpur">Mirpur</option>
            <option value="Shahabag">Shahabag</option>
            <option value="Agortola">Agortola</option>
            <option value="Nikunjo">Nikunjo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Your destination</label>
                <select class="form-select" name="d_to" aria-label="Default select example">
        <option selected>Select</option>
            <option value="Khulna">Khulna</option>
            <option value="Cox's Bazar">Cox's Bazar</option>
            <option value="Sajek Valley">Sajek Valley</option>
            <option value="Rangamati">Rangamati</option>
            <option value="Sylhet">Sylhet</option>
            <option value="The Sundarbans">The Sundarbans</option>
            <option value="Srimangal">Srimangal</option>
            <option value="Bandarban">Bandarban</option>
            <option value="Saint Martin">Saint Martin</option>
            <option value="Kuakata">Kuakata</option>
                </select>
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with the  <a href="#">terms and conditions </a></label>
            </div> -->
                <button type="submit" class="btn btn-primary">Confirm</button>
             </form>
    </div>
    <div class="container my-4">
      <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">From</th>
      <th scope="col">Destination</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      $detlete ="DELETE FROM `note` WHERE 0";



              $sql ="SELECT * FROM `note`";   
              $resultNote = mysqli_query($conn, $sql);
              $sno =0;

                while($row= mysqli_fetch_assoc($resultNote)){
                  $sno = $sno + 1;
                  echo "<tr>
                  <th scope='row'>". $sno ."</th>
                  <td>". $row['f_from'] ."</td>
                  <td>". $row['d_to'] ."</td>
                  <td><a href='#'>Delete</a> <a href='#'>Edit</a>

                  <button class='btn cta-btn' style='line-height: 0.5;' >Pay</button></td>
                </tr>";
                }
                
            ?>
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