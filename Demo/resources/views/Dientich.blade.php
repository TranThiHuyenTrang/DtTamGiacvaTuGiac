<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<title>Diện tích tam giác và tứ giác bất kì</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>


<form action="" method = "POST" style="margin-left: 60px;margin-top: 100px">
    @csrf
    <!-- <div style="display: flex;justify-content: space-between; "> -->
        <div>
            <label for="uname"  ><b>Nhập cạnh A</b></label>
            <input class="form-control" type="text" name="canha"style="width: 400px"></input>
            <label for="uname"><b>Nhập cạnh B</b></label>
            <input class="form-control" type="text" name="canhb"style="width: 400px"></input>
            <label for="uname"><b>Nhập cạnh C</b></label>
            <input class="form-control" type="text" name="canhc"style="width: 400px"></input>
            <label for="uname"><b>Nhập cạnh D</b></label>
            <input class="form-control" type="text" name="canhd"style="width: 400px"></input>
            <button type="submit" style="margin-top: 30px;" class="btn btn-primary">Tính</button>
        </div>
        <!-- <div>
            <label for="uname"  ><b>Nhập cạnh A</b></label>
            <input class="form-control" type="text" name="canhtama"style="width: 400px"></input>
            
            <label for="uname"><b>Nhập cạnh H</b></label>
            <input class="form-control" type="text" name="canhh"style="width: 400px"></input>
            <button type="submit"style="margin-top: 30px" class="btn btn-primary" name="tam">S tam giác</button>
        
        </div> -->
 <!-- </div>  -->

    <?php
    $result=0;
    if(isset($kq2)){
        $result=$kq2;
    }?>
    <input class="form-control" style="width: 400px;margin-top: 30px"value="<?php echo $result ?>">
</form>
</body>
</html>