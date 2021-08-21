<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>The Sparks Foundation - Basic Banking System</title>
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/navbar.css"> 
	<link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/table.css">
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
     include 'Database/dbconfig.php';
     $sql = "SELECT * FROM transaction";
     $result = mysqli_query($conn,$sql);
 ?>

<?php
   include 'navbar.php';
 ?>
    
<div class="table-container">
<h1 class="heading"> Transaction History </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>TimeStamp</th>
                              
                </tr>
            </thead>   
            <tbody>
               
            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td data-label="Acc. No"><?php echo $rows['Sender'] ?></td>
                        <td data-label="Name"><?php echo $rows['Receiver']?></td>
                        <td data-label="Email"><b>₹</b><?php echo $rows['Balance']?></td>                       
                        <td data-label="Balance"><?php echo $rows['DateTime']?></td>  
                        
                           </div>
                      
                       
                   </tr>
                <?php
                    }
                ?>

                
            </tbody>
                </table>       
    </div>


  <!--Footer-->
  <footer id="foot"> 
                <div class="footer-content">
                    <h3>The Sparks Foundation</h3>
                    <p>Inspiring, Innovating, Integrating...</p>
                    <ul class="socials">
                        <li><a href="https://www.facebook.com/thesparksfoundation.info"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/tsfsingapore?lang=en"><i class="fa fa-twitter"></i></a></li>
                    
                        <li><a href="https://www.instagram.com/thesparksfoundation.info/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://sg.linkedin.com/company/the-sparks-foundation"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>
               
            </footer>
    

         
            
            
</body>	
  
</html>
