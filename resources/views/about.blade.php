<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us!</title>
    </head>
    <body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');

body {
  background-image: url(../image/Contatbg.jpg);
  background-size: 100%;
}

.container  {
  position: absolute;
  left: 50%;
  top: 63%;
  transform: translate(-50%, -50%);
  height: 400px;
  width: 600px;
  background: #f2f2f2;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 0 20px 8px #d0d0d0;
}

.content {
  position: absolute;
  top: 50%;
  transform: translatey(-50%);
  text-align: justify;
  color: black;
  padding: 40px;
  font-family: 'Merriweather', serif;
}

h1 {
  font-weight: 900;
  text-align: center;
}

h3 {
  font-weight: 300;
}

.flap {
  width: 100%;
  height: 100%;
}

.flap::before {
  position: absolute;
  content: "";
  height: 100%;
  width: 50%;
  background: url("https://pbs.twimg.com/profile_images/1347260174176710658/2GfSZ1i__400x400.jpg") white;
  background-position: 100px;
  background-repeat: no-repeat;
  transition: 1s;
}

.flap::after {
  position: absolute;
  content: "";
  height: 100%;
  width: 50%;
  right: 0;
  background: url("https://pbs.twimg.com/profile_images/1347260174176710658/2GfSZ1i__400x400.jpg") white;
  background-position: -200px;
  background-repeat: no-repeat;
  transition: 1s;
}

.container:hover .flap::after {
  transform: translatex(300px);
}

.container:hover .flap::before{
  transform: translatex(-300px);
}
svg{
  position: absolute;
  left: 47%;
}
</style>
<h1>Click Me!</h1>
<svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>

<div class="container">
  <div class="content">
    <h1>Tentang Kami</h1>
    <h3>Kami menawarkan kepada Anda yang mempunyai gairah dan kecintaan yang sama dengan kami kepada dunia kopi, sebuah bisnis yang fun dan penuh lifestyle</h3>
  </div>
  <div class="flap"></div>
</div>
</body>
</html>