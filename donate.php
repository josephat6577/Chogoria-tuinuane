<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chogoria tuinuane - About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Glitch&family=Rubik+Vinyl&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="newdonate.css">
    <script src="donate.js" defer></script>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
    
    
            <div class="logo"><img id="logopic" src="logo.png" alt="logo"><a href="home.php">CHOGORIA TUINUANE</a> </div>
    
    
            <ul>
                <li><a href="home.php">Home</a></li>
                <li></li>
                <li></li>
                <li><a href="about.php">About</a></li>
                <li></li>
                <li></li>
                <li><a href="donate.php">Donate</a></li>

            </ul>
        </div>
      </nav>

      <main>

      </main>
      <form class="row g-3" action="./stk_initiate.php" method="POST">
      <div id="doncontainer">
        <button id="don" type="submit" class="btn btn-success" name="submit" value="submit">Donate</button>
        
        </div>
        <div id="sendtxt">Send donation via mpesa!</div>
        <input type="text" class="form-control" name="phone" placeholder="+254..." id="phonenumb">
        <input id="amount"type="text" class="form-control" name="amount" placeholder="Enter Amount" >
        <div id="enteramount">Enter amount</div>

        <div id="enterphonenumb">Enter phone number</div>
      </form>
      <h6 id="credits">Designed and developed by Victor Mwenda</h6>

      <h5 id="contact">Contact us</h5>
      <ol id="contactdetails">
        <li><a href="mailto:chogoriatuinuane@gmail.com">Email: Chogoriatuinuane@gmail.com</a></li>
        <br>
        <li ><a href="tel:+254712345678">Phone: 0712345678</a></li>
      </ol>
    </div>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>

</html>