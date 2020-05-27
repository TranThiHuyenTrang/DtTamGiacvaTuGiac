<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Tính tổng A và B</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <form action="" method = "POST" style="margin-left: 400px;margin-top: 200px">

        @csrf
        <label for="uname"  ><b>Nhập số A</b></label>
        <input class="form-control" type="text" name="a"style="width: 400px"></input>
        <label for="uname"><b>Nhập số B</b></label>
        <input class="form-control" type="text" name="b"style="width: 400px"></input>
        <button type="submit"style="margin-top: 30px" class="btn btn-primary">Submit</button>
        
         <?php
         $result=0;
          if(isset($kq)){
            $result=$kq;
         }?>
         <input class="form-control" style="width: 400px;margin-top: 30px"value="<?php echo $result ?>">
    </form>
    
</body>
</html>