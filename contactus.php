<!Doctype html>
<html>
    <head>
        <title> </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>

    <?php include 'navigation.php'; ?>

    <div class="jumbotron">
        <h1 ALIGN="center">Chaudhari's BANK</h1>
        <MARQUEE ALIGN="TOP" DIRECTION="LEFT" >
            <FONT SIZE="6">
               If Money Doesn't Grow On Tree, Then Put Into CHAUDHARI'S BANK...
            </FONT>
        </MARQUEE>        
    </div>
        <section class="my-4"> 
        <div class="py-1">
            <h2 class="text-center">Contact us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post"> 
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email ID :</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="on" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT
                </button>
                </form>
                    </div>

                <div class="col-md-4">					
                            <h4 class="classic-title"><span></span></h4>					
                            <div class="hr1" style="margin-bottom:10px;">
                </div>
                <div> 
                    <ul>
                        <li><strong>ADDRESS</strong><br>
                            BANK_NAME</BR>
                            A/p. Kharpudi bk, Rajgurunagar </br> tal-khed,
                            Kharpudi-Nimgaon Road, Pune&nbsp;<br>
                            Maharashtra, India</li>
                        <li><strong>Email-</strong>&nbsp;payalsunilchaudhari@mitacsc.edu.in</li>
                        <li><strong>Phone-&nbsp;</strong>+91-9657940699<br>&nbsp;</li>
                    </ul>
                        </div>
                    </div>
            </div>
            </div>
            </div>
        </div>      
        </section>
        <?php include 'footer.php'; ?>

    </body>
</html>