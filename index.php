<!DOCTYPE html>
<html>
    <head>
        <title> Profile </title>
        <meta  charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body,h1,h2,h3,h4,h5,p { font-family:"Didot",css;}
            h1{margin-top:30px;margin-bottom:10px;}
            h1,p {text-align: center;}
            * {box-sizing: border-box;}
            .imageColumn {float: left;width: 50%; padding-left: 200px;  padding-top: 50px;}
            .button {background-color:black;border: none;
                    color: rgb(255, 255, 255);
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                    margin: 4px 2px;
                    cursor: pointer;}
            img {display: block;margin-left: auto; margin-right: auto;}
            .column {float: left;padding: 10px;height: 300px;}
            .left, .right {width: 30%;}
            .middle {width: 40%;}
            .row:after {content: "";display: table;clear: both;}

          </style>
    </head>
    <div class="hero-image">
    <body style="background-color:whitesmoke;">
          <header> 
            <h1 style="font-size:4vw" ><b >OUR TEAM</b ></h1>
            <p style="font-size:1.5vw"  >Who Are We? </p>         
        </header>
        <div class="row">
            <div class="column left" style = "position:relative; top:200px">
                <h3 style="text-align:right;font-size: 25px" ><b>Jinny</b></h3>
                <a  href="JZ.html" class="button"  style="float: right;font-size: 18px">About J »</a>
            </div>    

            <div class="column middle"  >
                <img src="ZJ.jpg" alt="ZJ" border="5" alt="ZW" style="width:80%"  >
            </div>

            <div class="column right" style = "position:relative; top:200px">
                <h3 style="text-align:left;font-size: 25px"><b>Zung</b></h3>
                <a  href="ZJ.html" target="_blank" class="button" style="font-size: 16px">About Z »</a>
                                
            </div>
              
        </div>   
    </body>
</html> 
