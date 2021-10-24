<!-- Bu index.php dosyası, uygulama ilk açıldığında kullanıcının karşısında çıkacak login ekranıdır. -->

<?php
    include_once 'header.php'; //Header kısmının index.php sayfasına dahil edilmesi.
    session_start();
    if(isset($_SESSION['id'])){
        header('location: ./main.php');
    }else{
        include_once 'login_signup.php';
    }
    include_once 'footer.php'; //Footer kısmının index.php sayfasına dahil edilmesi.
?>