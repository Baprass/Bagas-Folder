<?php
$profile_img = "syrox.jpeg";
$name = "Moch Akbar Bagas Prakasa";
$nim = 210411100034;
$status = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
  text-align: center;
  padding: 30px;
  background: #f8f4f2;
  font-family: Arial;
}

.a-box {
  display: inline-block;
  width: 240px;
  text-align: center;
}

.img-container {
    height: 230px;
    width: 200px;
    overflow: hidden;
    border-radius: 0px 0px 20px 20px;
    display: inline-block;
}

.img-container img {
    transform: skew(0deg, -13deg);
    height: 250px;
    margin: -35px 0px 0px -70px;
}

.inner-skew {
    display: inline-block;
    border-radius: 20px;
    overflow: hidden;
    padding: 0px;
    transform: skew(0deg, 13deg);
    font-size: 0px;
    margin: 30px 0px 0px 0px;
    background: #c8c2c2;
    height: 250px;
    width: 200px;
}

.text-container {
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  padding: 120px 20px 20px 20px;
  border-radius: 20px;
  background: #fff;
  margin: -120px 0px 0px 0px;
  line-height: 19px;
  font-size: 14px;
}

.text-container h3 {
  margin: 20px 0px 10px 0px;
  color: #04bcff;
  font-size: 18px;
}
.status-me {
	color: red;
}
	</style>
</head>
<body>
<div class="a-box">
  <div class="img-container">
    <div class="img-inner">
      <div class="inner-skew">
        <img src="syrox.jpeg">
      </div>
    </div>
  </div>
  <div class="text-container">
    <h3><?= $name; ?></h3>
    <div>
	<?= $nim; ?> <br> <span class="status-me"><?= ($status == true ? "COWO" : "CEWE") ?></span>
  </div>
</div>
</body>
</html>