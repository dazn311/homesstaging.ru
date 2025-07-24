<?php
  
  function addUser($conn,string $userName, string $userMail) {
    $query = "INSERT INTO `user` (`id`, `name`, `email`, `createDate`) VALUES (NULL, '$userName', '$userMail', NOW());";
    $result = $conn->execute_query($query);
    return $result;

  }

  function addUserPDO($dbh,string $userName, string $userMail) {
    $query = "INSERT INTO `user` (`id`, `name`, `email`, `createDate`) VALUES (NULL, ?,? , NOW());";
    try {
      $stmt = $dbh->prepare($query);
      $dbh->beginTransaction();
      $stmt->execute(array($userName, $userMail));
      return $dbh->commit();
      $temp = $sth->fetch(PDO::FETCH_ASSOC);
      return $temp;
    } catch(PDOException $e) {
        $dbh->rollback();
        print "Error!: " . $e->getMessage() . "</br>";
    } catch (Exception $e) {
      echo "General Error: The user could not be added.<br>".$e->getMessage();
    }

  }

  function getUser($conn, string $userName, $limit=5) {
    $query = "SELECT name, email FROM users WHERE name=? LIMIT $limit";
    $result = $conn->execute_query($query,[$userName]);
    return $result;

  }

  function getUserPDO($dbh, string $userName, $limit=5) {
    $query = "SELECT name, email FROM users WHERE name=? LIMIT ?";
    $sth = $dbh->prepare($query);
    $sth->execute([$userName,$limit]);
    $featureIssues = $sth->fetch(PDO::FETCH_ASSOC);
    return $featureIssues;

  }

  function getUsers($conn, $limit) {
    $query = "SELECT email, password FROM users LIMIT $limit";
    $result = $conn->query($query);
  return $result->fetchAll();
  }

  function getUsersPDO($dbh, $limit) {
    $query = "SELECT email, name FROM users LIMIT $limit";
    $sth = $dbh->prepare($query);
    $sth->execute();
    $featureIssues = $sth->fetchAll();
    return $featureIssues;
  }

  //INSERT INTO `counter` (`id`, `ipAddress`, `lastTime`) VALUES (NULL, '192.168.0.22', CURRENT_TIMESTAMP), (NULL, '192.168.0.25', CURRENT_TIMESTAMP);