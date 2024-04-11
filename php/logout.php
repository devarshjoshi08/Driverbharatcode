<?php

session_start();
unset($_SESSION['email']);
// session_unset();
// session_destroy();
?>
<script>
    location.replace("../index.php");
</script>
<?php

?>