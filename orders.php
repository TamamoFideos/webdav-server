<?php 
$id_category = $_GET['id'];
$path = "../client_".$id_category;
$files = scandir("../client_".$id_category);
?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>

<head>
    <title>Index of /</title>
</head>

<body>
    <h1>Index of /</h1>
    <table>
   	 <tr>
   		 <th valign="top"><img src="/icons/blank.gif" alt="[ICO]"></th>
   		 <th><a href="?C=N;O=D">Name</a></th>
   		 <th><a href="?C=M;O=A">Last modified</a></th>
   		 <th><a href="?C=S;O=A">Size</a></th>
   		 <th><a href="?C=D;O=A">Description</a></th>
   	 </tr>
   	 <tr>
   		 <th colspan="5">
   			 <hr>
   		 </th>
   	 </tr>
        <?php foreach ($files as $file) { 
            $filePath = $path . '/' . $file;
            ?>
            <?php if (is_file($filePath)) { ?>
                <tr>
                    <td valign="top"><img src="/icons/unknown.gif" alt="[DIR]"></td>
                    <td><a href="<?php echo $path . '/' . $file; ?>"><?php  echo $file; ?></a></td>
                    <td align="right">2023-10-21 06:44 </td>
                    <td align="right"> - </td>
                    <td>&nbsp;</td>
                </tr>
            <?php } ?>
        <?php } ?>
   	 <tr>
   		 <th colspan="5">
   			 <hr>
   		 </th>
   	 </tr>
    </table>
    <address>Apache/2.4.56 (Debian) Server at 10.0.0.14 Port 80</address>
</body>

</html>

