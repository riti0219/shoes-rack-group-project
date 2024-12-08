<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="styles.css"> -->


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<style>
  nav{
    background-color: rgba(76, 0, 130, 0.181);
    height: 80px;
}
#shoe{
position: absolute;

}
#shoes{
position: absolute;

}
#my
{
    margin: 10px;
    float: right;
}

.img{
    height:300px;
    width: 17.9rem;
   
}

.logo-img{
    height: 250px;
    width: 250px;
}
#navbarSupportedContent{
    width: 100vw;
    display: flex;
    justify-content: space-evenly;
    
}
.nav-link .strong{
    font-family:serif;
    position: relative;
    color: black;
    left: 60px;
    font-size:1.3rem;
    margin-right: 50px ;
 
}

.nav-link .strong:hover{
    color: #c553bb;
}
</style>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light " id="nav" >
    <div class="container-fluid">
      <a class="navbar-brand " class="text-dark"  href="#">
        <img src="shoes/Logo-ShoeRack.png" alt="" class="logo-img"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="home.php"> <strong class="strong"> Home</strong>
             </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><strong class="strong">Contact</strong></a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="About.php"><strong class="strong">About</strong></a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="items.php"><strong class="strong">Shop now</strong></a>
          </li>
          <li class="nav-item">
          <img src="shoes\sho-removebg-preview.png" id="shoe"  alt="the shoes" height="50px" width="60px">
          <img src="shoes\sho-removebg-preview.png" id="shoes"  alt="the shoes" height="50px" width="60px">
         
          </li>
         
        </ul>
       
      </div>
    </div>
  </nav>

<script>
    $(document).ready(function()
{
    $('#shoe').animate({left: '1400px'},3000);
    $('#shoes').animate({left: '1350px'},3000);

});
  
</script>
   

</body>
</html>