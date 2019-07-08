<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/frame.css">
  <link rel="stylesheet" href="css/<?php echo $_SESSION['type'] ?>.css">
  <link rel="stylesheet" href="css/<?php echo $_SESSION['type_in'] ?>.css">
</head>
<body>
  <div id="all">
  <div id="vb">
    <div class="cherry1"></div>
    <div class="cherry2"></div>
    <div class="vcard">VcarD</div>
    <div id="vbname"><?= $_SESSION['name'] ?></div>
  </div>
  <div id="vc">
    <div id="ear"></div>    
    <div id="main">
      <div id="header">
        <div class="a a1"></div>
        <div class="a a2"></div>
        <div class="a a3"></div>
        <div class="a a4"></div>
        <p><?= $_SESSION['name'] ?></p>
        <div class="b2"></div>
        <div class="b"><div class="b1"></div>
      </div>
  </div>
      <p class="p">Title</p>
      <P class="job"><?php echo $_SESSION['job']?></P>
      <div class="pic"><img src="upload/<?php echo $_SESSION['mypic']?>" alt=""></div>
      <div class="content">
        <table cellspacing="0";cellpadding="0">
          <tr>
            <td width=30%;><span>mobile</span></td>
            <td><?php echo $_SESSION['tel']?></td>
          </tr>
          <tr>
            <td><span>email</span></td>
            <td><?php echo $_SESSION['email']?></td>
          </tr>
          <tr>
            <td colspan="2" class=skillt>skills and competencies</td>
          </tr>
        </table>
        <div id="skill"><?php echo $_SESSION['skill']?></div>
      </div>
    </div>
    <div id="footer"><button onclick="location.href='index.php'">home</button></div>
  </div>
  </div>
  </div>
</body>
</html>
