<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>



.caption {
  position: absolute;
  top: 0;
  left: 5px;                            /*  changed to match image_grid padding  */
  height: 100%;
  width: calc(100% - 5px);              /*  changed to match image_grid padding  */
  padding: 0 10px;
  box-sizing: border-box;
  pointer-events: none;

}

.imageandtext {
  position: relative;

}
.image_grid {
  display: inline-block;
  padding-left: 5px;
}
.image_grid img {                       /*  added rule  */
  display: block;

}
.image_grid img{

}
.image_grid input {
  display: none;
}
.image_grid input:checked + .caption {
  background: rgba(0,0,0,0.5);
    background:hsla(0, 100%, 100%, 0.3);;;


}
.image_grid input:checked + .caption::after {
  content: '✔';
  position: absolute;
  top: 50%; left: 50%;
  width: 50px; height: 50px;
  transform: translate(-50%,-50%);
  color: #ffabab;
  font-size: 35px;
  text-align: center;
  border: 2px solid white;
  border-radius: 50%;
}
    </style>
</head>

<body >
<div class="grid-two imageandtext">

  <div class="imageandtext image_grid">
    <label for="selimg1">
  <img src='https://i.imgur.com/0geAFQz.png' style="width:200px" />
    </label>
    <input type="checkbox" name="selimg" id="selimg1">
    <div class="caption">

    </div>
  </div>

  <div class="grid-two imageandtext">

  <div class="imageandtext image_grid">
    <label for="selimg2">
  <img src='https://i.imgur.com/0geAFQz.png' style="width:200px" />
    </label>
    <input type="checkbox" name="selimg" id="selimg2">
    <div class="caption">

    </div>
  </div>

</body>