<?php
session_start();
ini_set("display_errors" , "0");
require_once 'inc/functions.php';
DEFINE('RECAPTCHA_KEY', '6LeRA6wUAAAAAHond8satNhC5Fl6SMMEk6-CM7Sg');

if (!isset($_SESSION['login'])) {
    if (isset($_GET['page'])) {
        if ($_GET['page'] === 'login') {

            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }


            if (isset($_POST['loginForm'])) {

              $recaptchaToken = trim($_POST['g-recaptcha-response']);

              $recaptchaApi = 'https://www.google.com/recaptcha/api/siteverify';
              $recaptchaData = [
                'secret' => RECAPTCHA_KEY,
                'response' => $recaptchaToken,
                'remoteip' => $_SERVER['REMOTE_ADDR']
              ];

              $captchaHeaders = array(
                'http' => array(
                  'header' => "Content-type: application/x-www-form-urlencoded",
                  'method' => "POST",
                  'content' => http_build_query($recaptchaData)
                )
              );

              $streamContext = stream_context_create($captchaHeaders);
              $captchaResponse = file_get_contents($recaptchaApi, false, $streamContext);

              $apiResponse = json_decode($captchaResponse, true);

              if(!$apiResponse['success']) {
                echo "-captchaError-";
              }
              else {
                if ($_POST['username'] !== "" && $_POST['password'] !== "") {
                    $checkUser = getRow("SELECT * FROM users WHERE username='"  . addslashes($_POST['username']) . "' AND password='" . addslashes(md5($_POST['password'])) . "'");
                    if ($checkUser > 1) {
                      if($checkUser['accountType'] === 'Admin' || $checkUser['accountType'] === 'Deleted') {
                        echo "invalid response";
                      }
                      else {
                        $_SESSION['login'] = $checkUser['id'];
                        echo "continue response";
                        exit();
                      }
                    } else {
                        echo "invalid response";
                    }
                } else {
                    echo "invalid response";
                }
              }
            }
            $smarty->assign('page', 'login');
            $smarty->display('login.tpl');

        } else if ($_GET['page'] === 'admin') {

            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }


            if (isset($_POST['adminLogin'])) {

              $recaptchaToken = trim($_POST['g-recaptcha-response']);

              $recaptchaApi = 'https://www.google.com/recaptcha/api/siteverify';
              $recaptchaData = [
                'secret' => RECAPTCHA_KEY,
                'response' => $recaptchaToken,
                'remoteip' => $_SERVER['REMOTE_ADDR']
              ];

              $captchaHeaders = array(
                'http' => array(
                  'header' => "Content-type: application/x-www-form-urlencoded",
                  'method' => "POST",
                  'content' => http_build_query($recaptchaData)
                )
              );

              $streamContext = stream_context_create($captchaHeaders);
              $captchaResponse = file_get_contents($recaptchaApi, false, $streamContext);

              $apiResponse = json_decode($captchaResponse, true);

              if(!$apiResponse['success']) {
                echo "-captchaError-";
              }
              else {
                if ($_POST['username'] !== "" && $_POST['password'] !== "") {
                    $checkUser = getRow("SELECT * FROM users WHERE username='"  . addslashes($_POST['username']) . "' AND password='" . addslashes(md5($_POST['password'])) . "'");
                    if ($checkUser > 1) {
                        if ($checkUser['accountType'] === 'Admin') {
                            $_SESSION['admin'] = $checkUser['id'];
                            echo "continue response";
                        } else {
                          echo 'invalid response';
                        }
                    } else {
                        echo "invalid response";
                    }
                } else {
                    echo "invalid response";
                }
              }
            }
            $smarty->assign('page', 'admin');
            $smarty->display('admin-login.tpl');

        } elseif ($_GET['page'] === 'forgotpass') {
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }

            if (isset($_POST['forgot'])) {

              $recaptchaToken = trim($_POST['g-recaptcha-response']);

              $recaptchaApi = 'https://www.google.com/recaptcha/api/siteverify';
              $recaptchaData = [
                'secret' => RECAPTCHA_KEY,
                'response' => $recaptchaToken,
                'remoteip' => $_SERVER['REMOTE_ADDR']
              ];

              $captchaHeaders = array(
                'http' => array(
                  'header' => "Content-type: application/x-www-form-urlencoded",
                  'method' => "POST",
                  'content' => http_build_query($recaptchaData)
                )
              );

              $streamContext = stream_context_create($captchaHeaders);
              $captchaResponse = file_get_contents($recaptchaApi, false, $streamContext);

              $apiResponse = json_decode($captchaResponse, true);

              if(!$apiResponse['success']) {
                echo "-captchaError-";
              }
              else {
                $user = countRow("SELECT * FROM users WHERE email='" . addslashes($_POST['emailId']) . "'");
                if ($user > 0) {
                    $pass = rand_string(8);
                    execute("UPDATE users SET password = '" . addslashes(md5($pass)) . "' WHERE email='" . addslashes($_POST['emailId']) . "'");
                    // die(var_dump(mail($_POST['email'], 'New password KiesWorld', "Your new password is: " . $pass)));
                    echo "successfully sent";
                } else {
                  echo "successfully sent";
                }
              }
            }

            $smarty->assign('page', 'forgotpass');
            $smarty->display('forgotpass.tpl');

        } elseif ($_GET['page'] === 'register') {

            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            if (isset($_POST['registerForm'])) {

              $recaptchaToken = trim($_POST['g-recaptcha-response']);
              $recaptchaApi = 'https://www.google.com/recaptcha/api/siteverify';
              $recaptchaData = [
                'secret' => RECAPTCHA_KEY,
                'response' => $recaptchaToken,
                'remoteip' => $_SERVER['REMOTE_ADDR']
              ];

              $captchaHeaders = array(
                'http' => array(
                  'header' => "Content-type: application/x-www-form-urlencoded",
                  'method' => "POST",
                  'content' => http_build_query($recaptchaData)
                )
              );

              $streamContext = stream_context_create($captchaHeaders);
              $captchaResponse = file_get_contents($recaptchaApi, false, $streamContext);

              $apiResponse = json_decode($captchaResponse, true);

              if(!$apiResponse['success']) {
                echo "-captchaError-";
              }
              else {
                if ($_POST['authId'] !== "" && $_POST['authPass'] !== "" && $_POST['emailId'] !== "" && $_POST['repeatPass'] !== "") {
                  $checkUser = countRow("SELECT * FROM users WHERE username='"  . addslashes($_POST['authId']) . "' OR email='" . addslashes($_POST['emailId']) . "'");
                  if ($checkUser === 0) {
                    $creationTime = null;
                    $currentIp = trim($_SERVER['REMOTE_ADDR']);
                    $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                    $ipData = json_decode( $timeApi, true);
                    if($ipData['status'] == 'fail') {
                      DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                      $creationTime = trim(date("Y-m-d H:i:s"));
                      $currentIp = "::1";
                    }
                    else {
                      DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                      $creationTime = trim(date("Y-m-d H:i:s"));
                      $currentIp = trim($_SERVER['REMOTE_ADDR']);
                    }
                    $countUsers = countRow(@"SELECT * FROM users") + 1;
                    $generateId = "#PFM-88000".$countUsers;
                    $accountType = "Member";
                    $accountStatus = "Active";
                    execute("INSERT INTO users SET username='" . addslashes($_POST['authId']) . "', password='" . addslashes(md5($_POST['authPass'])) . "', email='" . addslashes($_POST['emailId']) . "', pfmId='" . addslashes($generateId) . "', accountType='" . addslashes($accountType) . "', accountStatus='" . addslashes($accountStatus) . "', recentLogon='" . addslashes($creationTime) . "', recentIpLogon='" . addslashes($currentIp) . "', userIp='" . addslashes($currentIp) . "', creationTime='" . addslashes($creationTime) . "'");
                    echo "successful registration";
                  } else {
                    echo "fail to register";
                  }
                }
                else {
                  echo "fail to register";
                }
              }
            }
            $smarty->assign('page', 'register');
            $smarty->display('register.tpl');
        } else {
          header('Location: user.php?page=login');
          exit;
        }
    } else {
        header('Location: user.php?page=login');
        exit;
    }
} else {
    header('Location: index.php?page=home');
    exit;
}


?>
