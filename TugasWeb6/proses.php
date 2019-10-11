<!--proses.php ini merupakan file yang datanya merupakan kiriman dari form.html-->

<?php // Awalan dari sebuah script PHP 
    //variabel get ($GET) guna untuk menerima inputan nilai dari form.html
    echo $_GET['nama']; //output teks nama yang diinputkan user pada form
    echo "<br />"; // enter //
    echo $_GET['email']; //output teks email yang diinputkan user pada form
?> <!--Akhiran dari sebuah script PHP-->
