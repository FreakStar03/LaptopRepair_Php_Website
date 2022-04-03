<?php
 
    function handlePost($conn , $col , $val, $form )
    {
        require_once(realpath(dirname(__FILE__) . "/../config.php"));

          if($form == 'registerProductForm'){  $sql = "INSERT INTO appointments ( `" .  implode('`,`' , $col)  . "` ) VALUES ( '" .  implode('\',\'' , $val)  . "' )";
          }
          else if($form == 'userRegisterForm'){  $sql = "INSERT INTO userTable ( `" .  implode('`,`' , $col)  . "` ) VALUES ( '" .  implode('\',\'' , $val)  . "' )";
          }
      
      
          if ($conn->query($sql) === TRUE) {
            return "success";
          } else {
            return "Error: " . $sql . "<br>" . $conn->error;
          }

      }

    function handleGet($conn , $col , $val, $form ){
      require_once(realpath(dirname(__FILE__) . "/../config.php"));

      if($form == 'userLoginForm'){  $sql = "SELECT * FROM `userTable` WHERE `email` = '" . $val[0] . "' and `password`='" . $val[1] . "'";}

      $select = mysqli_query($conn, $sql);
      if(mysqli_num_rows($select)) {
      session_start();
      $_SESSION["user"] = $val[0];
      return  "Exist";
      } else {
      return  "notExist";
      }

    }
?>