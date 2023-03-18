<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1c62ecd995.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/style.css">
    <title>PaymentGateway</title>
</head>
<body>
    <h1 class="heading"><i class="fa-solid fa-ribbon"></i> Cancer Crowdfunding</h1>
    <div class="row">
        <div class="col-md-6">
            <h1 class="heading">Donate a small amount to save multiple lives</h1>
        </div>
        <div class="col-md-6">
        <div class="container mx-auto">
        <form action="checkout.php" method="post">
            <label for="">Name:</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name">
            <label for="">Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
            <label for="">Amount:</label>
            <input type="text" class="form-control" placeholder="Enter Amount to transfer" name="amount">
            <button class="btn btn-outline-success m-1" type="submit"> Donate</button>
        </form>
    </div>
        </div>
    </div>
</body>
</html>

<!-- x -->