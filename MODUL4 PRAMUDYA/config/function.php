<?php
require './connector.php';

function query($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}


function registrasi($data){
    global $conn;

    $nama=stripcslashes($data["nama"]);
    $email=mysqli_real_escape_string($conn,$data["email"]);
    $no_hp=strtolower(stripcslashes($data["nohp"]));
    $password=mysqli_real_escape_string($conn,$data["password"]);
    $password2=mysqli_real_escape_string($conn,$data["password2"]);

            //cek email tersedia
    $result= mysqli_query($conn,"SELECT email FROM users where email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Email sudah terdaftar!');
              </script>";
        header("location:../pages/Regist-Pram.php");
        return false;

    }



    //cek konfirmasi password
    if ($password !== $password2 ) {
       echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        header("location:../pages/Regist-Pram.php");
        return false;

    }

    // enkripsi password
    $password= password_hash($password,PASSWORD_DEFAULT);
   
    //input ke database
    
    $sv = mysqli_query($conn,"INSERT INTO users (nama,email,password,no_hp) VALUES('$nama','$email','$password','$no_hp')");
    if($sv)
    {
        header("location:../");
    }else{
        echo "<script>
        alert('Gagal mendaftar!');
        </script>";
        header("location:../pages/Regist-Pram.php");
            return false;
    }

    return mysqli_affected_rows($conn);
}
function login($data){
    global $conn;

    $email=mysqli_real_escape_string($conn,$data["email"]);
    $password=mysqli_real_escape_string($conn,$data["password"]);

            //cek email tersedia
    $result= query("SELECT email,password FROM users where email='$email'");

    if(count($result) == 0){
        echo "<script>
                alert('Email atau Password yang anda masukkan salah!');
              </script>";
        header("location:../");
        return false;

    }

    if(!password_verify($password,$result[0]['password']))
    {
        echo "<script>
                alert('Email atau Password yang anda masukkan salah!');
              </script>";
        header("location:../");
              return false;
    }

    session_start();

    $_SESSION['login'] = 1;
   
    //input ke database
    
    header("location:../pages/Home-Pram.php");

    return mysqli_affected_rows($conn);
}

function ubahuser($data){
 
	global $conn;
    $id=$data["id"];
	$nama= $data['nama'];
    $no_hp = $data['no_hp'];
	$password = $data['password'];
    $password2 = $data['password2'];

      //cek konfirmasi password
    if ($password !== $password2 ) {
       echo "<script>
                alert('konfirmasi password tidak sesuai!');
                 document.location.href='Rejak_profile.php';
            </script>";

            exit;

    }

    // enkripsi password
    $password= password_hash($password,PASSWORD_DEFAULT);
   
	
		mysqli_query($conn, "UPDATE users SET nama='$nama',  password='$password', no_hp='$no_hp' WHERE id = '$id'");
		return mysqli_affected_rows($conn);
   
}

?>