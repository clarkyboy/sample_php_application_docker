<html>
 <head>
     <title>Bootstrap PHP</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
<body>

<!--<div class="container mt-1">-->
<!--    <div class="row">-->
<!--        <div class="col-4 bg-success">-->
<!--            <h1 class="display-4">Half</h1>-->
<!--        </div>-->
<!--        <div class="col-8 bg-info">-->
<!--            <h1 class="display-4">Other Half</h1>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row m-3">-->
<!--        <div class="col-4 bg-danger">1</div>-->
<!--        <div class="col-4 bg-info">2</div>-->
<!--        <div class="col-4 bg-warning">3</div>-->
<!--    </div>-->
<!--</div>-->

<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control">
        </div>
        <div class="form-group">
           <label for="">Password</label>
           <input type="password" name="password" id="" class="form-control">
       </div>
        
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Birthday</label>
                    <input type="date" name="bday" id="" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" id="" class="form-control">
                </div>
            </div>
        </div>
        <input type="submit" value="Send"  name="send" class="btn btn-outline-primary">
    </form>
</div>
<button class="btn btn-warning">Send</button>
<a href="#" class="btn btn-danger">Send</a>


</body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
