<?php 
include("includes/includedFiles.php"); 

?>

<!DOCTYPE html>

<head>
 <title>blogs</title>   
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

.body{
    background-color: grey;
}

.bigcontainer{
    margin-bottom:75px
}

.main-head{
    padding-top:15px;
    text-align:center;

}

.container{
    width:80%;
    height: 300px;
    margin-left: 10%;
    margin-right: 10%;
    padding-top: 50px;
    padding-left: 20px;
    padding-right: 20px;
}
.container .container-left{
    width: 50%;
    border-right: 10px;
    margin: auto;
    height: 250px; 
    float: left;
}

.container .container-right{
    width: 50%;
    margin: auto;
    float: right;
    height: 250px;
}

.container .container-left .img-container .responsive-img{
    max-width: 100%;
    height:150px;
    width:250px;
    object-fit:cover;
}        


.icons{
    
    padding: 2px;
    margin-left: 3px;
}

.icons i{
    font-size: 18px;
    display: inline-block;

}


.icons .fa{
padding: 10px 10px;
cursor: pointer;

}


.icons .fa-facebook{
    color: #3b5995;
}

.icons .fa-twitter{
    color: #0084b4;
}

.icons .fa-instagram{
    color: #ac2bac;
}

.icons .fa-youtube{
    color: red;
}

.icons .fa-whatsapp{
    color: #34af23;
}

.a{
    padding-top: 20px;
    text-decoration: none;
}

.container .container-right .heading1{
    font-style: italic;

}

.container .container-right .para1{
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-bottom: 15px;
    text-align: justify;
    margin-top: 20px;
    padding-bottom: 20px;
}

.container .container-right .one{

text-decoration: none;
font-size: 14px;
background-color: #353aa1;
padding: 10px 20px;
color: white;
transition: all  0.5 ease-in;

}

.container .container-right .one:hover{

font-size: 14px;
border : 1px solid #34495e;
border-top-right-radius: 20px;
background-color: transparent;
color: #34495e;
text-decoration: none;

}

.container .container-left .para1{
    width: 90%;
}

.container .container-right .para1{
    width: 90%;
}
.img1 {
    width: 100%;
    height: 400px;
}
.container{
    height: 500px;
    border-top: 2%;
    border-bottom: 2%;
}

.container .container-left .one{

text-decoration: none;
font-size: 14px;
background-color: #353aa1;
padding: 10px 20px;
color: white;
transition: all  0.5 ease-in;

}

.container .container-left .one:hover{

font-size: 14px;
border : 1px solid #34495e;
border-top-right-radius: 20px;
background-color: transparent;
color: #34495e;
text-decoration: none;

}

</style>

</head>

<body>
    <h1 class="main-head"> Know your Artists </h1>
<div class="bigcontainer">
            <div class="container">
                <div class="container-left">
                    <div class="img-container">
                        <a href="https://en.wikipedia.org/wiki/Nucleya"><img src="assets/images/article_imgs/Nucleya.jpg" class="img1" alt="Nucleya Image"></a>
                    </div>

                    

                    <div class="icons">
                        <a href="https://www.facebook.com/nucleya/"> <i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/nucleya?lang=en"> <i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/nucleya/?hl=en"> <i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCiOCRcSMr5CCjVH_p5vPyJQ"> <i class="fa fa-youtube"></i></a>
                    </div>
                    <p class="para1">
                        In 1998 he co-founded Bandish Projekt with Mayur Narvekar and Mehirr Nath Choppra. Udyan left Bandish Projekt after working for about 12 years, and built himself as Nucleya……...
                    </p>
                    <a class="one" href="https://en.wikipedia.org/wiki/Nucleya">Read more</a>
                </div>

                <div class="container-right">
                    <div class="img-container">
                        <a href="https://en.wikipedia.org/wiki/Prateek_Kuhad"><img src="assets/images/article_imgs/Prateek_kuhad.jpg" class="img1" alt="Prateek Kuhad"></a>
                    </div>

                    

                    <div class="icons">
                        <a href="https://www.facebook.com/prateekkuhadmusic"> <i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/prateekkuhad?lang=en"> <i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/prateekkuhad/?hl=en"> <i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCMwXzQYeZJ7ml7kQObcvXjA"> <i class="fa fa-youtube"></i></a>
                    </div>
                    <p class="para1">
                        He is best known for his track cold/mess, which was included in former USA President Barack Obama's Favourite Music of 2019 list………
                    </p>
                    <a class="one" href="https://en.wikipedia.org/wiki/Prateek_Kuhad">Read more</a>
                </div>
            </div>
<br><br>
            <div class="container">
                <div class="container-left">
                    <div class="img-container">
                        <a href="https://en.wikipedia.org/wiki/Ritviz">
                            <img src="assets/images/article_imgs/Ritviz.jpg" class="img1" alt="Ritviz image">
                        </a>
                    </div>
                   

                    <div class="icons">
                        <a href="https://www.facebook.com/ritvizmusic/"> <i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/RITVIZ?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/vizdumb/?hl=en"> <i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCLx-YFOk_NgXNG7uCXq8m5w"> <i class="fa fa-youtube"></i></a>
                    </div>
                    <p class="para1">
                        He is known for his song "Udd Gaye" featured on A.I.B.'s official YouTube channel after becoming the winner of the 2017 Bacardi House Party Sessions……..
                    </p>
                    <a class="one" href="https://en.wikipedia.org/wiki/Ritviz">Read more</a>
                </div>

                <div class="container-right">
                    <div class="img-container">
                        <a href="https://en.wikipedia.org/wiki/Sanjeeta_Bhattacharya"><img src="assets/images/article_imgs/Sanjeeta.jpg" class="img1" alt="Sanjeeta "></a>
                    </div>

                    

                    <div class="icons">
                        <a href="https://www.facebook.com/sanjeetamusic/"> <i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/sanjeeta1120"> <i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sanjeeta11/?hl=en"> <i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UC9VIgMJfF6N6ZPIQlMSY0iw"> <i class="fa fa-youtube"></i></a>
                    </div>
                    <p class="para1">
                        Bhattacharya is also known for her performance that paid tribute to A. R. Rahman at Berklee College of Music in 2014 featuring 109 performers from 32 countries……..
                    </p>
                    <a class="one" href="https://en.wikipedia.org/wiki/Sanjeeta_Bhattacharya">Read more</a>
                </div>
            </div>

<br><br>            
        
</div>

</body>

</html>
