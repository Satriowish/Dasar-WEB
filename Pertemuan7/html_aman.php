<?php 
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];
    }
?>
 <form action="" method="post">
    <input type="text" name="input" id="input" value="" placeholder="nama">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" value="Submit">
    <br>
    <br>
    <?php 
    
    ?>
</form>