<?php
//menggunakan hashing  dan password verify pada PHP

var_dump(password_hash("unsika", PASSWORD_DEFAULT));

//membuat variabel hash
$hash = '$2y$10$pC/PU2.DBgLmLIKWc90hTuf3yOD76/ot7XKIi6L8E9TF56Ee99jnW';
if (password_verify("unsika", $hash)){
    echo "password benar";
}else{
    echo "password salah";
}
?>