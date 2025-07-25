<?php
//declare(strict_types=1);

  function addUserPDO($dbh,string $email,string $userName, string $password, string $remember_me, string $role='2') {
    $query = "INSERT INTO `users` ( `email`, `name`, `password`,`remember_me`, `role`, `createDate`) VALUES (?, ?,?,?, ? , NOW());";
    try {
      $stmt = $dbh->prepare($query);
      $dbh->beginTransaction();
      $password_h = password_hash($password, PASSWORD_DEFAULT);
      $stmt->execute(array($email, $userName, $password_h, $remember_me, $role));
      return $dbh->commit();
    } catch(PDOException $e) {
        $dbh->rollback();
        $message = $e->getMessage();
        print "Error!: " . $message . "</br>";
        return $message;
    } catch (Exception $e) {
        $message2 = $e->getMessage();
        echo "General Error: The user could not be added.<br>$message2";
        return $message2;
    }
  }

  function getUserPDO($dbh, string $userName, $limit=5) {
    $query = "SELECT email, password FROM users WHERE email=? LIMIT ?";
    $sth = $dbh->prepare($query);
    $sth->execute([$userName,$limit]);
      return $sth->fetch(PDO::FETCH_ASSOC);
  }

  function getUsersPDO($dbh, $limit) {
    $query = "SELECT email, name, createDate FROM users LIMIT $limit";
    $sth = $dbh->prepare($query);
    $sth->execute();
    return $sth->fetchAll();
  }

  //INSERT INTO `counter` (`id`, `ipAddress`, `lastTime`) VALUES (NULL, '192.168.0.22', CURRENT_TIMESTAMP), (NULL, '192.168.0.25', CURRENT_TIMESTAMP);
