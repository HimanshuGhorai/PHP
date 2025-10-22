<?php
echo '<h1>hi this html</h1>';
echo '<br>';
echo '<h1 style = "color:blue;">hi this is php</h1>';

// now we use tags 

$name = "himanshu"; // $name is a variable
?>

<?php
$name2 = "himu2";

echo "<h1 style='color:red'>$name2</h1>";
?>



<!-- //html in php -->

<h1 style="color:aqua">
    hello is this my name <?php echo $name ?>
</h1>

<?php
echo 'hi is male';
$h2_color = "red";

?>

<h2 style="color:<?php echo $h2_color ?>">this is h2 tags</h2>
<h3 style="color:<?php echo $h2_color ?>">this is h3 tags</h3>
<h4 style="color:<?php echo $h2_color ?>">this is h4 tags</h4>
<h5 style="color:<?php echo $h2_color ?>">this is h5 tags</h5>