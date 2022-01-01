<?php
    session_start();
    if (isset($_SESSION['admin'])) {
        $link = mysqli_connect('localhost', 'worlgmig_newyear', '100%newyear', 'worlgmig_Christmas');

        if (isset($_POST['submit'])) {
            $network = $_POST['network'];
            $value = $_POST['value'];

            $sql = "INSERT INTO gifts (value, network) VALUES ('$value', '$network')";
            $query = mysqli_query($link, $sql);

            if ($query) {
                echo "<script>alert('Credit added!')</script>";
            } else {
                echo "<script>alert('Failed to add credit!')</script>";
            }
        }
    } else {
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <main class="container text-center form-signin mt-4">
        <form action="#" method="post">
          <img class="mb-4" src="../images/wbtlogo.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Add Credit</h1>
      
          <div class="form-floating mb-3">
            <select name="network" id="" class="form-control form-control-sm">
                <option value="mtn">MTN</option>
                <option value="airtel">Airtel</option>
                <option value="glo">Glo</option>
                <option value="_9mobile">9mobile</option>
            </select>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="value" class="form-control form-control-sm" id="floatingPassword" placeholder="Credit">
            <label for="floatingPassword">Credit</label>
          </div>
      
          <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
      </main>
</body>
</html>