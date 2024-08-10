<!-- Redirecting user -->
<form>
    <button name="goto"> GO TO GOOGLE</button>
</form>
<?php
if(isset($_GET['goto'])){
//Redirecting a using Header function 
Header("Location: https://www.google.com");
}
?>