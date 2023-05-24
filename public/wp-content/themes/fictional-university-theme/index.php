<!-- <?php 
    function myFirstFunction() {
        echo "<h1>Hello World!</h1>";
    }
    myFirstFunction();
?> -->

<?php 
    function greet($name, $color) {
        echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
    }
    greet('Iqbal', 'white');
    greet('Baran', 'pink');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>