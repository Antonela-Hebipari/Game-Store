<?php 
include_once 'Header.php';
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.column1 {
  float: left;
  width: 25%;
  padding: 10px;
  height:500px;
}
.column1m {

  padding: 10px;
  height:500px;
}

.row1:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<h2 style="color:white; text-align:center; font-family:sans-serif;padding-top:50px;">About our website<h2>
<p style="color:white; text-align:center;font-size:20px; font-family:times;padding-top:10px;">This website was created as university project in web programming by us: Antonela Hebipari, Bijona Filaj, 
Darjo Sërbo, Alesia Skënderas <br>and Desintila Luzi. After a long time with a lot of hardwork, passion and of course a ton of patience from our leader, <br> we managed to create this online store. 
We provide our customers with computer accessories and the most popular and also nostalgic video-games.<br> Every video game product contains a description about the game's genre, basic information 
of what the game is about and also it's system requirements. <br>
We hope this website has proven that all of our hardwork paid off!


<h2 style="color:white; text-align:center; font-family:sans-serif;padding-top:40px;">About us <h2>
<div class="column1m" style="background-color:#033a44">
<h2 style="color:white; text-align:center; font-family:Courier;padding-top:10px;">The Group's Leader</h2><hr>
<h2 style="color:white; text-align:center; font-family:times;padding-bottom:10px;">Antonela Hebipari</h2>
<p style="font-family:times;color:white; text-align:center;font-size:20px;">This project would never be done without our amazing group leader.<br>
She's a boss ass bitchhh.<br> She did the entire php part of the project, including for the signup,
login, product pages, user profile, search by category, also did the admin page. </p>
</div>
<div class="row1" style="color:white; text-align:center;">
  <div class="column1" style="border-radius:50%;">
  <h2 style="color:white; text-align:center; font-family:Courier;padding-top:10px;">Backend Team</h2><hr>
  <h2>Bijona Filaj</h2>
    <p style="font-family:times;font-size:20px;">Helped create the database, with the design and helped 
    with the php of the search function.</p>
  </div>
  <div class="column1" style="">
  <h2 style="color:white; text-align:center; font-family:Courier;padding-top:10px;">Frontend Team</h2><hr>
    <h2>Darjo Sërbo</h2>
    <p style="font-family:times;font-size:20px;font-size:20px;"> Designed the homepage and the product page.</p>
  </div>
  <div class="column1" style="">
  <h2 style="color:white; text-align:center; font-family:Courier;padding-top:10px;">Frontend Team</h2><hr>
    <h2>Alesia Skënderas</h2>
    <p style="font-family:times;font-size:20px;">Designed the signup, login, user profile and edit pages,
    worked on the cart.</p>
  </div>
  <div class="column1" style="">
  <h2 style="color:white; text-align:center; font-family:Courier;padding-top:10px;">Backend Team</h2><hr>
    <h2>Desintila Luzi</h2>
    <p style="font-family:times;font-size:20px;">Worked on the database, did the design and php
    of the process of buying a product. </p>
  </div>
</div>

<?php include_once 'Footer.html'; ?>