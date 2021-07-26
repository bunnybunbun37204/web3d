<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap" rel="stylesheet">
  </head>
<body>
  <style>
  
    body {
      font-family: 'Mali', cursive;
      background: url(https://png.pngtree.com/thumb_back/fw800/back_pic/00/05/66/1356275836021ea.jpg) no-repeat center center fixed;
      -webkit-background-size : cover;
      -moz-background-size:cover;
      -o-background-size:cover;
      background-size: cover;
      
    }

  </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="manu.php">Reduce costs Save material</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="prism1.php">ปริซึมสี่เหลี่ยมมุมฉาก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cylindrical.php">ทรงกระบอก <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
<body>
    <?php 
    $v = $_GET['name1'];
    $w = pow(($v*3),0.33333)/2; #กว้าง
    $l = pow(($v*3),0.33333); # ยาว
    $h = pow(($v/9),0.33333)*2; #สูงปริซึม
    $m = (($w*$w)*4)+(6*$w*$h); #พื้นที่ผิวน้อยที่สุดของปริซึม
    $r = pow(($v/(2*3.14)),0.33333);#รัศมี
    $h2 =(2*$r) ;#สูงทรงกระบอก
    $m2 =(6*3.14*($r*$r)); #พื้นที่ผิวที่น้อยที่สุดของทรงกระบอก
    ?>
    <center>
    <br>
    <br>
    <br>
    <style>
  table {
    border: 100%;
    width: 50%;
    height: 300px;
    font-size:x-large;
  
  }
</style>
<center>
    <h1>ตารางเเสดงผลของปริซึมสี่เหลี่ยมมุมฉาก</h1>
    <br>
    <table >
      <tr>
        <td style="text-align: center;" class="table-secondary">  กว้าง :   </td>
        
        <td style="text-align: center;" class="table-secondary"> <?php echo round($w,2); $w; ?>  ลูกบาศก์หน่วย</td>
      </tr>
      <tr>
        <td style="text-align: center;" class="table-danger">  ยาว :   </td>
        <td style="text-align: center;" class="table-danger"> <?php echo round($l,2); $l; ?>  ลูกบาศก์หน่วย</td>
      </tr>
    <tr>
      <td style="text-align: center;" class="table-success">  สูง :    </td>
      <td style="text-align: center;" class="table-success"> <?php echo round($h,2);  $h; ?>  ลูกบาศก์หน่วย</td>
    </tr>
      <tr>
      <td style="text-align: center;"  class="table-warning">  พื้นที่ผิวที่น้อยที่สุด : </td>
        <td style="text-align: center;" class="table-warning"> <?php echo round($m,2); $m; ?>  ลูกบาศก์หน่วย</td>
    </tr>
      
    
      </table>
      <form action="model.php" method="GET">
            <br>
            <input id="length" type="hidden" name="length" value="<?php echo round($l,2) ?>" />
            <input id="height" type="hidden" name="height" value="<?php echo round($h,2) ?>" />
            <input id="width" type="hidden" name="width" value="<?php echo round($w,2) ?>" />
            <input type="submit" value="ดูโมเดล" class="btn btn-primary">
          </form>
      <br>
      <h1>ตารางเเสดงผลของทรงกระบอก</h1>
    <br>
    <table >
     
      <tr>
        <td style="text-align: center;" class="table-danger">  รัศมี :   </td>
        <td style="text-align: center;" class="table-danger"> <?php echo round($r,2); $r; ?>  ลูกบาศก์หน่วย</td>
      </tr>
    <tr>
      <td style="text-align: center;" class="table-success"> สูง :    </td>
      <td style="text-align: center;" class="table-success"> <?php echo round($h2,2);  $h2; ?>  ลูกบาศก์หน่วย</td>
    </tr>
      <tr>
      <td style="text-align: center;"  class="table-warning">  พื้นที่ผิวที่น้อยที่สุด : </td>
        <td style="text-align: center;" class="table-warning"> <?php echo round($m2,2); $m2; ?>  ลูกบาศก์หน่วย</td>
    </tr>
      
    
      </table>
      <br>
      <br>


   
    </center>
    
   

</body>



</div>


</body>
</html>
<body>


</body>
</html>

