<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Halaman Administrator">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Administrator</title>
    <link rel="stylesheet" href="../dist/css/kube.min.css">
    <link rel="stylesheet" href="../dist/css/admin.css">
  </head>
  <body>
    <div class="units-container">
      <div class="login">
        <form action="masuk.php" method="POST" class="forms">
          <label for="username">Username</label>
          <input type="text" name="username" class="width-100" placeholder="Username">
          <div class="spasi"></div>
          <label for="password">Password</label>
          <input type="password" name="password" class="width-100" placeholder="Password">
          <div class="spasi"></div>
          <input class="btn btn-outline right" type="submit" value="Masuk">
        </form>
      </div>
    </div>
  </body>
</html>