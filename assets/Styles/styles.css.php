<?php
header("Content-type: text/css");
$time = date("H");
$color="blue";
?>
.logo{
    margin-left: 20%;
    width: 100px;
    height: 100px;
}
.photo {
    float: left;
    width: 30%;
    margin: 20px;
}
div {
    display: flex;
}
section {
    width: 60%;
}
main {
    margin-left: 20%;
    margin-right: 20%;
    height:300px;
    background-color: aqua;
}
h1 {
    color: yellowgreen
}


p {
    font-style: normal;
    font-size: medium;
    color: brown;
    text-align: center;
}

table,tr,td {
    border: 2px solid black;
    border-collapse: collapse;
    margin: auto;
}
.car img {
    width: 200px;
    height: 100px;
}
.car, .town {
    background-color: aliceblue;
    padding: 20px;
    margin: 20px;
    display: block;

}
.container {
    display: flex;
    justify-content: space-between;
    width: 950px;
   margin: auto;
}
h1 {
    text-align: center;
    margin-top: 50px;
}

body {
    background-color: <?php if($time>20 && $time <8) echo $color; 
    else echo $color="yellow"?>;
    font-style: italic;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}




.town img {
    width: 300px;
    height: 300px;
}

.containerTown {
    display: flex;
    flex-wrap: wrap;
    width: 960px;
    justify-content: space-between;
    margin-top: 50px;
    margin: auto;
}


@media screen and(min-width:400px){
    .container {
        flex-wrap: wrap;
        width: 350px;
    }
    .car img {
        width: 150px;
        height: 100px;
    }
    .containerTown {
        width: 350px;
    }
    .town img {
        width: 150px;
        height: 150px;
    }
    
}

@media screen and(min-width:800px){
    .container {
        flex-wrap: wrap;
        width: 750px;
    }
    .containerTown {
        width: 750px;
    }
    .town img {
        width: 200px;
        height: 200px;
    }
}

