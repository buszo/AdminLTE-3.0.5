<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email'])
&& !empty($_POST['email2']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) && !empty($_POST['znacznik'])  ) {
    echo 'ok';
}else{
   // header('location: ../pages/examples/register.php')

   $_SESSION['error'] = 'Wypełnij wszystkie pola!';
?>
<script>
history.back();
</script>
<?php
}
?>