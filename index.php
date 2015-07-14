<?
$file_name = $_GET['file'];

if(!isset($file_name))
{
header( 'Location: http://raithsphe.re' ) ;
}
$ext = pathinfo("/home/raith/images/".$file_name, PATHINFO_EXTENSION);
?>
<html>
<head>
<title><? echo $file_name; ?></title>


<link href="main.css" media="screen" rel="stylesheet" type="text/css" />

    <!--[if (!IE)|(gte IE 8)]><!-->
<link href="ie.css" media="screen" rel="stylesheet" type="text/css" />
<!--<![endif]-->

 <script src="main.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="ie.js" type="text/javascript"></script>
    <![endif]-->

</head>
<body id="image">
    <header id="header">
  

  <h2><? echo $file_name; ?></h2>

 

<?
if($ext == "webm")
{
?>
 <a class="embed" href="/images/<? echo $file_name; ?>">Direct link</a>
<?
}
else if($ext == "MOV")
{
?>
 <a class="embed" href="/images/<? echo $file_name; ?>">Direct link</a>
<?
}
else if($ext != "gif")
{
?>
 <a class="embed" href="/mark/<? echo $file_name; ?>">Direct link</a>
<?
}
else
{
?>
 <a class="embed" href="/images/<? echo $file_name; ?>">Direct link</a>
<?
}
?>

</header>
    <section id="content">
<?
if($ext == "webm")
{
?>
<video id="sampleMovie" preload controls>
  <source src="/images/<? echo $file_name; ?>" type="video/webm">
</video>
<?
}
else if($ext == "MOV")
{
?>
<video controls="controls" width="800" height="600" name="Video Name" src="/images/<? echo $file_name; ?>" ></video>
</video>
<?
}
else if($ext != "gif")
{
?>
<img src="/mark/<? echo $file_name; ?>">
<?
}
else
{
?>
<img src="/images/<? echo $file_name; ?>">
<?
}
?>
</section>
</body>
</html>




