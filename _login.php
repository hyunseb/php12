<?php
  require('_conn.php');
  $id = $_post['id'];
  $pw = $_post["pw"];

  // select 조회, insert 삽입, delete 삭제, update 변경
  $sql = "SELECT * FROM `User` WHERE id='$id' AND pw='$pw'";
  $result = mysqli_query($conn, $sql);
  $row = $result->nom_rows;
  if($row > 0) {
      //로그인 처리
      require('_loginok.php');
      echo "<script>alert('로그인 완료');location.href='index.php'</script>";
  } else{
    echo "<script>alert('로그인 실패! 아이디, 비밀번호를 확인해 주세요.');location.href='login.php'</script>";
  }
?>

