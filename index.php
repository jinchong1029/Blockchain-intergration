<?php
session_start();
ini_set("display_errors" , "0");
require_once 'inc/functions.php';

if (isset($_SESSION['login'])) {
    if (isset($_GET['page'])) {
        $smarty->assign('page', $_GET['page']);
        if ($_GET['page'] === 'home') {

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $news = getRow("SELECT * FROM news ORDER BY id DESC LIMIT 1");
            $allNews = getAll("SELECT * FROM news ORDER BY id DESC");
            $recentlyAdded = getAll("SELECT * FROM recentadded ORDER BY id DESC");

            $smartyItems = array(
                'userDetails' => $userDetails,
                'news'        => $news,
                'allNews'     => $allNews,
                'recentlyAdded'     => $recentlyAdded,
            );
            $smarty->assign($smartyItems);
            $smarty->display('home.tpl');

        } elseif($_GET['page'] === 'logout') {
            $currentDateTime = null;
            $currentIp = trim($_SERVER['REMOTE_ADDR']);
            $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
            $ipData = json_decode( $timeApi, true);
            if($ipData['status'] == 'fail') {
              DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
              $currentDateTime = trim(date("Y-m-d H:i:s"));
              $currentIp = "::1";
            }
            else {
              DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
              $currentDateTime = trim(date("Y-m-d H:i:s"));
              $currentIp = trim($_SERVER['REMOTE_ADDR']);
            }
            $pfmId = $_SESSION['login'];
            execute(@"UPDATE users SET recentLogon='$currentDateTime', recentIpLogon='$currentIp' WHERE id='$pfmId'");
            session_destroy();
            header('Location: user.php?page=login');
            exit;
        } elseif($_GET['page'] === 'profile') {
            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }
            if (isset($_POST['profileForm'])) {
                if ($_POST['updateEmail'] !== "" && $_POST['updatePass'] !== "") {
                  $checkEmail = countRow("SELECT * FROM users WHERE email='" . addslashes($_POST['updateEmail']) . "'");
                  if($checkEmail === 0) {
                    execute("UPDATE users SET password = '" . addslashes(md5($_POST['updatePass'])) . "', email = '" . addslashes($_POST['updateEmail']) . "' WHERE id='" . addslashes($_SESSION['login']) . "'");
                    echo "successfully updated";
                    }
                    else {
                      echo "email already used";
                    }
                  }
                  else {
                    echo "failed to update";
                  }
              }
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");

            $smartyItems = array(
                'userDetails' => $userDetails,
            );
            $smarty->assign($smartyItems);
            $smarty->display('profile.tpl');
        } elseif($_GET['page'] === 'addfunds') {
            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }
            // if (isset($_POST['profileForm'])) {
            //     if ($_POST['updateEmail'] !== "" && $_POST['updatePass'] !== "") {
            //       $checkEmail = countRow("SELECT * FROM users WHERE email='" . addslashes($_POST['updateEmail']) . "'");
            //       if($checkEmail === 0) {
            //         execute("UPDATE users SET password = '" . addslashes(md5($_POST['updatePass'])) . "', email = '" . addslashes($_POST['updateEmail']) . "' WHERE id='" . addslashes($_SESSION['login']) . "'");
            //         echo "successfully updated";
            //         }
            //         else {
            //           echo "email already used";
            //         }
            //       }
            //       else {
            //         echo "failed to update";
            //       }
            //   }
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");

            $smartyItems = array(
                'userDetails' => $userDetails,
            );
            $smarty->assign($smartyItems);
            $smarty->display('addfunds.tpl');
        } elseif($_GET['page'] === 'fullz') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $fullzLogs = getAll(@"SELECT * FROM products WHERE status = '0'");

            if (isset($_POST['purchaseFullz'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                    $checkFullz = getRow("SELECT * FROM products WHERE id='" . addslashes($_POST['id']) . "' AND status='0'");
                    if(count($checkFullz) > 1) {
                      if($userDetails['balance'] >= $checkFullz['price']) {
                        $currentDateTime = null;
                        $currentIp = trim($_SERVER['REMOTE_ADDR']);
                        $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                        $ipData = json_decode( $timeApi, true);
                        if($ipData['timezone']) {
                          DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        else {
                          DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        execute(@"UPDATE users SET balance = balance - " . addslashes($checkFullz['price'])  . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET moneySpent = moneySpent + " . addslashes($checkFullz['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET totalPurchase = totalPurchase + '1' WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE products SET status='1' WHERE id='" . addslashes($checkFullz['id']) . "'");
                        execute(@"INSERT INTO purchasehistory SET product='" . addslashes($checkFullz['id']) . "', user='" . addslashes($_SESSION['login']) . "', buyedDate='" . addslashes($currentDateTime) . "'");
                        echo "purchase success";
                      }
                      else {
                        echo "not enough balance";
                      }
                    }
                    else {
                      echo "purchase error";
                    }
                  }
                  else {
                    echo "purchase error";
                  }
              }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'fullzLogs' => $fullzLogs,
            );

            $smarty->assign($smartyItems);
            $smarty->display('fullz.tpl');

        } elseif($_GET['page'] === 'banks') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $bankLogs = getAll(@"SELECT * FROM accounts WHERE status = '0'");

            if (isset($_POST['purchaseBank'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                    $checkBank = getRow("SELECT * FROM accounts WHERE id='" . addslashes($_POST['id']) . "' AND status='0'");
                    if(count($checkBank) > 1) {
                      if($userDetails['balance'] >= $checkBank['price']) {
                        $currentDateTime = null;
                        $currentIp = trim($_SERVER['REMOTE_ADDR']);
                        $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                        $ipData = json_decode( $timeApi, true);
                        if($ipData['timezone']) {
                          DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        else {
                          DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        execute(@"UPDATE users SET balance = balance - " . addslashes($checkBank['price'])  . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET moneySpent = moneySpent + " . addslashes($checkBank['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET totalPurchase = totalPurchase + '1' WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE accounts SET status='1' WHERE id='" . addslashes($checkBank['id']) . "'");
                        execute(@"INSERT INTO accountshistory SET product='" . addslashes($checkBank['id']) . "', user='" . addslashes($_SESSION['login']) . "', date='" . addslashes($currentDateTime) . "'");
                        echo "purchase success";
                      }
                      else {
                        echo "not enough balance";
                      }
                    }
                    else {
                      echo "purchase error";
                    }
                  }
                  else {
                    echo "purchase error";
                  }
              }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'bankLogs' => $bankLogs,
            );

            $smarty->assign($smartyItems);
            $smarty->display('banks.tpl');

        } elseif($_GET['page'] === 'accounts') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $accountLogs = getAll(@"SELECT * FROM webaccs WHERE status = '0'");

            if (isset($_POST['purchaseAccount'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                    $checkAccount = getRow("SELECT * FROM webaccs WHERE id='" . addslashes($_POST['id']) . "' AND status='0'");
                    if(count($checkAccount) > 1) {
                      if($userDetails['balance'] >= $checkAccount['price']) {
                        $currentDateTime = null;
                        $currentIp = trim($_SERVER['REMOTE_ADDR']);
                        $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                        $ipData = json_decode( $timeApi, true);
                        if($ipData['timezone']) {
                          DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        else {
                          DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        execute(@"UPDATE users SET balance = balance - " . addslashes($checkAccount['price'])  . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET moneySpent = moneySpent + " . addslashes($checkAccount['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET totalPurchase = totalPurchase + '1' WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE webaccs SET status='1' WHERE id='" . addslashes($checkAccount['id']) . "'");
                        execute(@"INSERT INTO webaccshistory SET product='" . addslashes($checkAccount['id']) . "', user='" . addslashes($_SESSION['login']) . "', buyedDate='" . addslashes($currentDateTime) . "'");
                        echo "purchase success";
                      }
                      else {
                        echo "not enough balance";
                      }
                    }
                    else {
                      echo "purchase error";
                    }
                  }
                  else {
                    echo "purchase error";
                  }
              }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'accountLogs' => $accountLogs,
            );

            $smarty->assign($smartyItems);
            $smarty->display('accounts.tpl');

        } elseif($_GET['page'] === 'tools') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $allTools = getAll(@"SELECT * FROM tools WHERE status = '0'");

            if (isset($_POST['purchaseTool'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                    $checkTool = getRow("SELECT * FROM tools WHERE id='" . addslashes($_POST['id']) . "' AND status='0'");
                    if(count($checkTool) > 1) {
                      if($userDetails['balance'] >= $checkTool['price']) {
                        $currentDateTime = null;
                        $currentIp = trim($_SERVER['REMOTE_ADDR']);
                        $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                        $ipData = json_decode( $timeApi, true);
                        if($ipData['timezone']) {
                          DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        else {
                          DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        execute(@"UPDATE users SET balance = balance - " . addslashes($checkTool['price'])  . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET moneySpent = moneySpent + " . addslashes($checkTool['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET totalPurchase = totalPurchase + '1' WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE tools SET status='1' WHERE id='" . addslashes($checkTool['id']) . "'");
                        execute(@"INSERT INTO toolshistory SET product='" . addslashes($checkTool['id']) . "', user='" . addslashes($_SESSION['login']) . "', buyedDate='" . addslashes($currentDateTime) . "'");
                        echo "purchase success";
                      }
                      else {
                        echo "not enough balance";
                      }
                    }
                    else {
                      echo "purchase error";
                    }
                  }
                  else {
                    echo "purchase error";
                  }
              }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'allTools' => $allTools,
            );

            $smarty->assign($smartyItems);
            $smarty->display('tools.tpl');

        } elseif($_GET['page'] === 'tutorials') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $allTutorials = getAll(@"SELECT * FROM tutorials WHERE status = '0'");

            if (isset($_POST['purchaseTutorial'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                    $checkTutorial = getRow("SELECT * FROM tutorials WHERE id='" . addslashes($_POST['id']) . "' AND status='0'");
                    if(count($checkTutorial) > 1) {
                      if($userDetails['balance'] >= $checkTutorial['price']) {
                        $currentDateTime = null;
                        $currentIp = trim($_SERVER['REMOTE_ADDR']);
                        $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                        $ipData = json_decode( $timeApi, true);
                        if($ipData['timezone']) {
                          DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        else {
                          DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                          $currentDateTime = trim(date("Y-m-d H:i:s"));
                        }
                        execute(@"UPDATE users SET balance = balance - " . addslashes($checkTutorial['price'])  . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET moneySpent = moneySpent + " . addslashes($checkTutorial['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE users SET totalPurchase = totalPurchase + '1' WHERE id='" . addslashes($_SESSION['login']) . "'");
                        execute(@"UPDATE tutorials SET status='1' WHERE id='" . addslashes($checkTutorial['id']) . "'");
                        execute(@"INSERT INTO tutorialshistory SET product='" . addslashes($checkTutorial['id']) . "', user='" . addslashes($_SESSION['login']) . "', buyedDate='" . addslashes($currentDateTime) . "'");
                        echo "purchase success";
                      }
                      else {
                        echo "not enough balance";
                      }
                    }
                    else {
                      echo "purchase error";
                    }
                  }
                  else {
                    echo "purchase error";
                  }
              }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'allTutorials' => $allTutorials,
            );

            $smarty->assign($smartyItems);
            $smarty->display('tutorials.tpl');

        } elseif($_GET['page'] === 'tickets') {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $ticketLogs = getAll(@"SELECT * FROM tickets WHERE user_id='" . addslashes($_SESSION['login']) . "' AND is_active='0' OR is_active='1'");
            $pendingTix = countRow(@"SELECT * FROM tickets WHERE user_id='" . addslashes($_SESSION['login']) . "' AND is_active='0' OR is_active='1'");

            if (isset($_POST['replyTicket'])) {
                if ($_POST['id'] !== "" && $_SESSION['login'] !== "") {
                  echo "ticket reply redirect";
                  }
                  else {
                    echo "ticket error";
                  }
              }

              if (isset($_POST['submitTicket']) && $pendingTix <= 2) {
                  if (strlen($_POST['title']) >= 6 && strlen($_POST['message']) >= 6) {
                    $currentDateTime = null;
                    $currentIp = trim($_SERVER['REMOTE_ADDR']);
                    $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                    $ipData = json_decode( $timeApi, true);
                    if($ipData['timezone']) {
                      DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                      $currentDateTime = trim(date("Y-m-d H:i:s"));
                    }
                    else {
                      DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                      $currentDateTime = trim(date("Y-m-d H:i:s"));
                    }
                    execute(@"INSERT INTO tickets SET user_id='" . addslashes($_SESSION['login']) . "', message='" . addslashes($_POST['message']) . "', title='" . addslashes($_POST['title']) . "', date='" . addslashes($currentDateTime) . "', is_active='0'");
                    $ticketDetails = getRow("SELECT * FROM tickets WHERE message='" . addslashes($_POST['message']) . "' AND user_id='" . addslashes($_SESSION['login']) . "'");
                    execute(@"INSERT INTO comments SET ticket_id='" . addslashes($ticketDetails['id']) . "', message='" . addslashes($_POST['message']) . "', user='" . addslashes($userDetails['username']) . "', date='" . addslashes($currentDateTime) . "'");
                    echo "ticket add success";
                    }
                    else {
                      echo "ticket error";
                    }
                }
                else {
                  echo "too much pending";
                }

            $smartyItems = array(
                'userDetails' => $userDetails,
                'ticketLogs' => $ticketLogs,
            );

            $smarty->assign($smartyItems);
            $smarty->display('tickets.tpl');

        } elseif($_GET['page'] === 'showticket' && isset($_GET['ti'])) {

            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $ticketId = $_GET['ti'];
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $tixId = getRow("SELECT * FROM tickets WHERE id='" . addslashes($ticketId) . "'");
            $ticketReplies = getAll(@"SELECT * FROM comments WHERE ticket_id = '" . addslashes($ticketId) . "'");

            if (isset($_POST['replyTicket'])) {
                if ($_POST['id'] !== "" && strlen($_POST['message']) >= 6) {

                  $currentDateTime = null;
                  $currentIp = trim($_SERVER['REMOTE_ADDR']);
                  $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                  $ipData = json_decode( $timeApi, true);
                  if($ipData['timezone']) {
                    DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                    $currentDateTime = trim(date("Y-m-d H:i:s"));
                  }
                  else {
                    DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                    $currentDateTime = trim(date("Y-m-d H:i:s"));
                  }
                  execute(@"INSERT INTO comments SET ticket_id='" . addslashes($_POST['id']) . "', message='" . addslashes($_POST['message']) . "', user='" . addslashes($userDetails['username']) . "', date='" . addslashes($currentDateTime) . "'");
                  echo "ticket reply success";
                  }
                  else {
                    echo "ticket error";
                  }
              }


            $smartyItems = array(
                'userDetails' => $userDetails,
                'tixId' => $tixId,
                'ticketReplies' => $ticketReplies,
            );

            $smarty->assign($smartyItems);
            $smarty->display('showticket.tpl');

        } elseif($_GET['page'] === 'history') {
            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }

            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");

            // $myProductsHistory = getAll("SELECT * FROM purchasehistory WHERE user='" . addslashes($_SESSION['login']) . "'");
            // $myProducts = array();
            // $x = 0;
            //
            // foreach ($myProductsHistory as $mpHistory=>$mp) {
            //     $buyedDate = explode("/", str_replace("-", "/", str_replace(":" , "/", str_replace(" ", "/", ($mp['buyedDate'])))));
            //     $currentDate = explode("/", date('Y/m/d/h/i/s', time()));
            //
            //     if($currentDate[0] === $buyedDate[0] && $currentDate[1] === $buyedDate[1] && $currentDate[2] === $buyedDate[2] && $currentDate[3] === $buyedDate[3] && $buyedDate[4] + 2 > $currentDate[4]) {
            //         $leftTime = ($buyedDate[4] + 2 ) - $currentDate[4] ." minutes";
            //     } else {
            //         $leftTime = 0;
            //     }
            //
            //     $myProduct = getRow("SELECT * FROM products WHERE id='" . addslashes($mp['product']) . "'");
            //     if (count($myProduct) >0 ){
            //         foreach ($myProduct as $myPro=>$mpr) {
            //             $myProducts[$x][$myPro] = $mpr;
            //             $myProducts[$x]['leftTime'] = $leftTime;
            //             $myProducts[$x]['buyedDate'] = $mp['buyedDate'];
            //         }
            //         $x++;
            //     }
            // }


            //
            // if (isset($_GET['action'])) {
            //     if ($_GET['action'] === 'check' && isset($_GET['id'])) {
            //
            //         $checkProduct = getRow("SELECT * FROM products WHERE id='" . addslashes($_GET['id']) . "' AND (checked=0 OR checked=3)");
            //         if (count($checkProduct) > 0) {
            //             $checkProduct2 = getRow("SELECT * FROM `purchasehistory` WHERE product='" . addslashes($_GET['id']) . "' AND user='" . addslashes($_SESSION['login']) . "'");
            //             if (count($checkProduct2) > 0) {
            //                 $buyedDate = explode("/", str_replace("-", "/", str_replace(":" , "/", str_replace(" ", "/", ($checkProduct2['buyedDate'])))));
            //                 $currentDate = explode("/", date('Y/m/d/h/i/s', time()));
            //                 if($currentDate[0] === $buyedDate[0] && $currentDate[1] === $buyedDate[1] && $currentDate[2] === $buyedDate[2] && $currentDate[3] === $buyedDate[3] && $buyedDate[4] + 2 > $currentDate[4]) {
            //                     $date = explode("/", str_replace(" ", "", $checkProduct['cardExp']));
            //                     $checker = checker($checkProduct['cardNumber'], $date[0], $date[1], $checkProduct['ccv']);
            //
            //                     if (intval($checker) === 1){
            //                         execute("UPDATE products SET checked=1 WHERE id='" . addslashes($checkProduct['id']) . "'");
            //                         $_SESSION['success'] = 1;
            //                         header('Location: index.php?page=history');
            //                         exit;
            //                     } else {
            //                         execute("UPDATE users SET balance = balance + " . addslashes($checkProduct['price']) . " WHERE id='" . addslashes($_SESSION['login']) . "'");
            //                         execute("UPDATE products SET checked=2 WHERE id='" . addslashes($checkProduct['id']) . "'");
            //                         $_SESSION['error'] = 4;
            //                         header('Location: index.php?page=history');
            //                         exit;
            //                     }
            //                 } else {
            //                     $_SESSION['error'] = 3;
            //                     header('Location: index.php?page=history');
            //                     exit;
            //                 }
            //             } else {
            //                 $_SESSION['error'] = 2;
            //                 header('Location: index.php?page=history');
            //                 exit;
            //             }
            //         } else {
            //             $_SESSION['error'] = 1;
            //             header('Location: index.php?page=history');
            //             exit;
            //         }
            //     } elseif ($_GET['action'] === 'delete' && isset($_GET['id'])) {
            //         $checkCard = getRow("SELECT * FROM products WHERE status='1' AND id='" . addslashes($_GET['id']) . "'");
            //         if (count($checkCard) > 0) {
            //             $checkHistory = getRow("SELECT * FROM purchasehistory WHERE product='" . addslashes($_GET['id']) . "' AND user='" . addslashes($_SESSION['login']) . "'");
            //             if (count($checkHistory) > 0) {
            //                 execute("DELETE FROM purchasehistory WHERE id='" . addslashes($checkHistory['id']) . "'");
            //                 $_SESSION['success'] = 2;
            //                 header('Location: index.php?page=history');
            //                 exit;
            //             } else {
            //                 $_SESSION['error'] = 1;
            //                 header('Location: index.php?page=history');
            //                 exit;
            //             }
            //         } else {
            //             $_SESSION['error'] = 1;
            //             header('Location: index.php?page=history');
            //             exit;
            //         }
            //     } elseif ($_GET['action'] === 'deletep' && isset($_GET['id'])) {
            //         $checkCard = getRow("SELECT * FROM paypal WHERE status='1' AND id='" . addslashes($_GET['id']) . "'");
            //         if (count($checkCard) > 0) {
            //             $checkHistory = getRow("SELECT * FROM paypalhistory WHERE product='" . addslashes($_GET['id']) . "' AND user='" . addslashes($_SESSION['login']) . "'");
            //             if (count($checkHistory) > 0) {
            //                 execute("DELETE FROM paypalhistory WHERE id='" . addslashes($checkHistory['id']) . "'");
            //                 $_SESSION['success'] = 4;
            //                 header('Location: index.php?page=history#paypal');
            //                 exit;
            //             } else {
            //                 $_SESSION['error'] = 8;
            //                 header('Location: index.php?page=history#paypal');
            //                 exit;
            //             }
            //         } else {
            //             $_SESSION['error'] = 8;
            //             header('Location: index.php?page=history#paypal');
            //             exit;
            //         }
            //     } elseif($_GET['action'] === 'deleteall') {
            //         $count = getAll("SELECT * FROM purchasehistory WHERE user='" . addslashes($_SESSION['login']) . "'");
            //         if (count($count) > 0) {
            //             foreach ($count as $cnt=>$ct) {
            //                 execute("DELETE FROM purchasehistory WHERE id='" . addslashes($ct['id']) . "'");
            //             }
            //             $_SESSION['success'] = 3;
            //             header('Location: index.php?page=history');
            //             exit;
            //         } else {
            //             $_SESSION['error'] = 5;
            //             header('Location: index.php?page=history');
            //             exit;
            //         }
            //
            //     } elseif($_GET['action'] === 'deleteallp') {
            //         $count = getAll("SELECT * FROM paypalhistory WHERE user='" . addslashes($_SESSION['login']) . "'");
            //         if (count($count) > 0) {
            //             foreach ($count as $cnt=>$ct) {
            //                 execute("DELETE FROM paypalhistory WHERE id='" . addslashes($ct['id']) . "'");
            //             }
            //             $_SESSION['success'] = 5;
            //             header('Location: index.php?page=history#paypal');
            //             exit;
            //         } else {
            //             $_SESSION['error'] = 7;
            //             header('Location: index.php?page=history#paypal');
            //             exit;
            //         }
            //     } elseif($_GET['action'] === 'download') {
            //         $count = getAll("SELECT * FROM purchasehistory WHERE user='" . addslashes($_SESSION['login']) . "'");
            //         $download = "";
            //         if (count($count) > 0) {
            //             foreach ($count as $cnt=>$ct) {
            //                 $product = getRow("SELECT * FROM  products WHERE id='" . addslashes($ct['product']) . "'");
            //                 foreach ($product as $prod=>$pd) {
            //
            //
            //                     if ($prod !== "id" && $prod !== "category" && $prod !== "price" && $prod !== "date" && $prod !== "status" && $prod !== "checked") {
            //                         $download .= ucfirst($prod) . ": " . $pd . "\r\n";
            //                     }
            //
            //                 }
            //                 $download .= "\r\n\r\n";
            //             }
            //
            //             header("Content-type: text/plain");
            //             header("Content-Disposition: attachment; filename=cards.txt");
            //             echo $download;
            //             exit;
            //
            //
            //         } else {
            //             $_SESSION['error'] = 6;
            //             header('Location: index.php?page=history');
            //             exit;
            //         }
            //     } else {
            //         header('Location: index.php?page=history');
            //         exit;
            //     }
            // }

            $fullzLogs = getAll(@"SELECT * FROM purchasehistory, products WHERE purchasehistory.product = products.id AND user = '" . addslashes($_SESSION['login']) . "'");
            $bankLogs = getAll(@"SELECT * FROM accountshistory, accounts WHERE accountshistory.product = accounts.id AND user = '" . addslashes($_SESSION['login']) . "'");
            $webLogs = getAll(@"SELECT * FROM webaccshistory, webaccs WHERE webaccshistory.product = webaccs.id AND user = '" . addslashes($_SESSION['login']) . "'");
            $tutorialsList = getAll(@"SELECT * FROM tutorialshistory, tutorials WHERE tutorialshistory.product = tutorials.id AND user = '" . addslashes($_SESSION['login']) . "'");
            $toolsList = getAll(@"SELECT * FROM toolshistory, tools WHERE toolshistory.product = tools.id AND user = '" . addslashes($_SESSION['login']) . "'");

            $smartyItems = array(
                'userDetails' => $userDetails,
                'fullzLogs'  => $fullzLogs,
                'bankLogs'  => $bankLogs,
                'webLogs'  => $webLogs,
                'tutorialsList'  => $tutorialsList,
                'toolsList'  => $toolsList,
            );
            $smarty->assign($smartyItems);
            $smarty->display('history.tpl');

        }

        // elseif ($_GET['page'] === 'check' && isset($_GET['id'])) {
        //     $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
        //     $categories = getAll("SELECT * FROM categories");
        //
        //     $check = getRow("SELECT * FROM products WHERE id='" . addslashes($_GET['id']) . "'");
        //     if (count($check) > 0) {
        //         if (intval($check['status']) === 0) {
        //             $details = array();
        //             $details['vbv'] = $check['vbv'] === "NA" ? 'n' : 'y';
        //             $details['sortcode'] = $check['sortCode'] === "NA" ? 'n' : 'y';
        //             $details['account'] = $check['accountNo'] === "NA" ? 'n' : 'y';
        //             $details['firstname'] = $check['firstName'];
        //             $details['telephone'] = substr( $check['telephone'], 0, 2) === "07" ? 'y' : 'n';
        //
        //
        //             $smartyItems = array(
        //                 'userDetails' => $userDetails,
        //                 'categories'  => $categories,
        //                 'data'        => $details
        //             );
        //             $smarty->assign($smartyItems);
        //             $smarty->display('extradetails.tpl');
        //         } else {
        //             echo 'fuck off';
        //             exit;
        //         }
        //     } else {
        //         echo 'fuck off';
        //         exit;
        //     }
        //
        //
        //
        // }

        elseif($_GET['page'] === 'tos') {
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $tosDetails = getAll("SELECT * FROM terms");

            $smartyItems = array(
                'tosDetails' => $tosDetails,
                'userDetails' => $userDetails,
            );
            $smarty->assign($smartyItems);
            $smarty->display('tos.tpl');

        } elseif($_GET['page'] === 'balance') {
            if (isset($_SESSION['success'])) {
                $success = $_SESSION['success'];
                unset($_SESSION['success']);
            } else {
                $success = 0;
            }
            if (isset($_SESSION['error'])) {
                $error = $_SESSION['error'];
                unset($_SESSION['error']);
            } else {
                $error = 0;
            }
            $invoice = getRow("SELECT * FROM btc_addr WHERE user='" . addslashes($_SESSION['login']) . "' AND (paid='0' OR paid='1')");
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $categories = getAll("SELECT * FROM categories");
            $message = "";
            $btcAddress = "";
            $amount = "";
            if ($invoice['paid'] === '0') {
                $status = 1;
                $url= file_get_contents('https://blockchain.info/q/addressbalance/' . $invoice['address'] . '?confirmations=0');
                if (strlen($url) > 2) {
                    execute("UPDATE btc_addr SET paid='1' WHERE address='" . addslashes($invoice['address']) . "'");
                    $message = 'Received';
                    header('Location: index.php?page=balance');

                } else {
                    $message = "Not received yet.";
                }
                $btcAddress = $invoice['address'];
                $amount = $invoice['btc'];

                if (isset($_GET['action'])) {
                    if ($_GET['action'] === 'cancel_payment') {
                        execute("DELETE FROM btc_addr WHERE user='" . addslashes($_SESSION['login']) . "' AND paid='0'");
                        $_SESSION['error'] = 2;
                        header('Location: index.php?page=balance');
                        exit;
                    } else {
                        header('Location: index.php?page=balance');
                        exit;
                    }
                }
            } elseif ($invoice['paid'] === '1') {
                $status = 2;
                $url = file_get_contents('https://blockchain.info/q/addressbalance/'.$invoice['address'].'?confirmations=0');
                if (strlen($url) > 2) {
                    $btc = $url/100000000;
                    if ($btc >= $invoice['btc']) {
                        execute("UPDATE btc_addr SET paid='2' WHERE address='" . addslashes($invoice['address']) . "'"); // platit
                        execute("UPDATE users SET balance = balance + " . addslashes($invoice['usdvalue']) . " WHERE id='" . addslashes($_SESSION['login']) . "'"); //adaugare balanta

                        $_SESSION['success'] = 1; // mesajul de plata
                        header('Location: index.php?page=balance');
                        exit;
                    } else {
                        $currentPrice = json_decode(file_get_contents("https://blockchain.info/ticker"), true);

                        $usd = number_format($currentPrice['USD']['last'] * $btc, 0);

                        execute("UPDATE btc_addr SET btc='" . addslashes($btc) . "', usdvalue='" . addslashes($usd) . "' WHERE address='" . addslashes($invoice['address']) . "'");
                        $message = "Payment invalid. Please contact us!";
                    }
                } else {
                    echo 'Error! Contact support!';
                    exit;
                }
            } else {
                $status = 0;

                if (isset($_POST['balanceForm'])) {
                    if (intval($_POST['amount']) >= 5) {
                        createAddress($_SESSION['login'], usdToBtc($_POST['amount']), $_POST['amount']);
                        header('Location: index.php?page=balance');
                        exit;
                    } else {
                        $_SESSION['error'] = 1;
                        header('Location: index.php?page=balance');
                        exit;
                    }
                }
            }

            $smartyItems = array(
                'address'     => $btcAddress,
                'amount'      => $amount,
                'message'     => $message,
                'status'        => $status,
                'page'        => 'balance',
                'error'       => $error,
                'success'     => $success,
                'userDetails' => $userDetails,
                'categories'  => $categories,
            );

            $smarty->assign($smartyItems);
            $smarty->display('balance.tpl');
        }  elseif($_GET['page'] === 'view_item' && isset($_GET['id'])) {
            $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['login']) . "'");
            $categories = getAll("SELECT * FROM categories");
            $checkProduct = getRow("SELECT * FROM purchasehistory WHERE product='" . addslashes($_GET['id']) . "' AND user='" . addslashes($_SESSION['login']) . "'");


            if (count($checkProduct) > 0) { //Verificare 1 daca este cumparat de catre user
                $checkProductStatus = getRow("SELECT * FROM products WHERE id='" . addslashes($_GET['id']) . "' AND status=1");
                if (count($checkProductStatus) > 0) { //Verificare 2 daca produsul este cumparat si este valid sau unchecked
                    $smartyItems = array(
                        'userDetails' => $userDetails,
                        'categories'  => $categories,
                        'cardDetails' => $checkProductStatus,
                        'page'        => 'myproduct'
                    );
                    $smarty->assign($smartyItems);
                    $smarty->display('viewproduct.tpl');
                } else {
                    header('Location: index.php?page=home');
                    exit;
                }
            } else {
                header('Location: index.php?page=home');
                exit;
            }

        }  else {
            // session_destroy();
            header('Location: index.php?page=home');

            exit;
        }

    } else {
        header('Location: index.php?page=home');
        exit;
    }

}















else if (isset($_SESSION['admin'])) {
  $smarty->assign('page', $_GET['page']);
  if (isset($_GET['page'])) {
      if ($_GET['page'] === 'cp_dashboard') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          //
          // $totals = array();
          // $cat = getAll("SELECT * FROM categories");
          // foreach ($cat as $ct=>$c) {
          //     $totals[$c['name']] = array(
          //         'unsold' => getOne("SELECT count(*) FROM products WHERE category='" . addslashes($c['id']) . "' AND status='0'"),
          //         'sold'  => getOne("SELECT count(*) FROM products WHERE category='" . addslashes($c['id']) . "' AND status='1'"),
          //     );
          // }
          //
          //
          // if (isset($_GET['action'])) {
          //     if ($_GET['action'] === 'move') {
          //         $getOlds = getAll("SELECT * FROM products WHERE status='0' AND date < NOW() - INTERVAL 4 DAY");
          //
          //         $categoryID = getOne("SELECT id FROM categories WHERE slug='older-fullz'");
          //         foreach ($getOlds as $getOld=>$go) {
          //             if (intval($go['price']) <= 10) {
          //                 $price = 10;
          //             } else {
          //                 $priceFirst = intval($go['price']) - 5;
          //                 if ($priceFirst < 10) {
          //                     $price = 10;
          //                 } else {
          //                     $price = $priceFirst;
          //                 }
          //             }
          //
          //             execute("UPDATE products SET price = " . $price . ", category='" . addslashes($categoryID) . "' WHERE id='" . addslashes($go['id']) . "'");
          //         }
          //         $_SESSION['success'] = 1;
          //         header('Location: index.php');
          //         exit;
          //     } elseif ($_GET['action'] === 'enableChecker') {
          //         execute("UPDATE products SET checked='0' WHERE status='0'");
          //         $_SESSION['success'] = 2;
          //         header('Location: index.php');
          //         exit;
          //     } elseif ($_GET['action'] === 'disableChecker') {
          //         execute("UPDATE products SET checked='3' WHERE status='0'");
          //         $_SESSION['success'] = 3;
          //         header('Location: index.php');
          //         exit;
          //     } else {
          //         header('Location: index.php');
          //         exit;
          //     }
          // }

          $registeredUsers = countRow("SELECT * FROM users WHERE accountType='Member'");
          $bankLogsCount = countRow("SELECT * FROM accounts WHERE status='0'");
          $fullzCount = countRow("SELECT * FROM products WHERE status='0'");
          $freshFullzCount = countRow("SELECT * FROM products WHERE status='0' AND category='1'");
          $youngFullzCount = countRow("SELECT * FROM products WHERE status='0' AND category='2'");
          $oldFullzCount = countRow("SELECT * FROM products WHERE status='0' AND category='3'");
          $webLogsCount = countRow("SELECT * FROM webaccs WHERE status='0'");
          $tutorialsCount = countRow("SELECT * FROM tutorials WHERE status='0'");
          $toolsCount = countRow("SELECT * FROM tools WHERE status='0'");
          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $assign_items = array(
              'userDetails' => $userDetails,
              'registeredUsers' => $registeredUsers,
              'bankLogsCount' => $bankLogsCount,
              'fullzCount' => $fullzCount,
              'freshFullzCount' => $freshFullzCount,
              'youngFullzCount' => $youngFullzCount,
              'oldFullzCount' => $oldFullzCount,
              'webLogsCount' => $webLogsCount,
              'tutorialsCount' => $tutorialsCount,
              'toolsCount' => $toolsCount,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-dashboard.tpl');
      } elseif($_GET['page'] === 'cp_users') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allUsers = getAll(@"SELECT * FROM users WHERE accountType IN ('Member', 'Vendor', 'Banned', 'Deleted')");

          if (isset($_POST['editAccount'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE users SET username = '".addslashes($_POST['username'])."',password = '".addslashes(md5($_POST['username']))."',balance = '".addslashes($_POST['balance'])."',moneySpent = '".addslashes($_POST['moneySpent'])."',totalPurchase = '".addslashes($_POST['totalPurchase'])."', email = '".addslashes($_POST['email'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteUser'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"UPDATE users SET accountType = 'Deleted' WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['banUser'])) {
                  if ($_POST['banId'] !== "" && $_SESSION['admin'] !== "") {
                      execute(@"UPDATE users SET accountType = 'Banned' WHERE id='" . addslashes($_POST['banId']) . "'");
                      echo "ban success";
                    }
                    else {
                      echo "ban failed";
                    }
                }

                else if (isset($_POST['unbanUser'])) {
                    if ($_POST['unbanId'] !== "" && $_SESSION['admin'] !== "") {
                        execute(@"UPDATE users SET accountType = 'Member' WHERE id='" . addslashes($_POST['unbanId']) . "'");
                        echo "unban success";
                      }
                      else {
                        echo "unban failed";
                      }
                  }

                  else if (isset($_POST['recoverUser'])) {
                      if ($_POST['recoverId'] !== "" && $_SESSION['admin'] !== "") {
                          execute(@"UPDATE users SET accountType = 'Member' WHERE id='" . addslashes($_POST['recoverId']) . "'");
                          echo "recover success";
                        }
                        else {
                          echo "recover failed";
                        }
                    }

                    else if (isset($_POST['upgradeUser'])) {
                        if ($_POST['upgradeId'] !== "" && $_SESSION['admin'] !== "") {
                            execute(@"UPDATE users SET accountType = 'Vendor' WHERE id='" . addslashes($_POST['upgradeId']) . "'");
                            echo "upgrade success";
                          }
                          else {
                            echo "upgrade failed";
                          }
                      }

                      else if (isset($_POST['degradeUser'])) {
                          if ($_POST['degradeId'] !== "" && $_SESSION['admin'] !== "") {
                              execute(@"UPDATE users SET accountType = 'Member' WHERE id='" . addslashes($_POST['degradeId']) . "'");
                              echo "degrade success";
                            }
                            else {
                              echo "degrade failed";
                            }
                        }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allUsers' => $allUsers,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-users.tpl');
      } elseif($_GET['page'] === 'cp_fullz') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allFullz = getAll(@"SELECT * FROM products");

          if (isset($_POST['editFullz'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE products SET price = '".addslashes($_POST['price'])."',firstName = '".addslashes(md5($_POST['firstname']))."',lastName = '".addslashes($_POST['lastname'])."',mmn = '".addslashes($_POST['mmn'])."',dob = '".addslashes($_POST['dob'])."', telephone = '".addslashes($_POST['telephone'])."', address = '".addslashes($_POST['address'])."', postcode = '".addslashes($_POST['postcode'])."', cardHolder = '".addslashes($_POST['cardholdername'])."', cardNumber = '".addslashes($_POST['cardnumber'])."', cardBin = '".addslashes($_POST['cardbin'])."', cardExp = '".addslashes($_POST['cardexp'])."', ccv = '".addslashes($_POST['ccv'])."', accountNo = '".addslashes($_POST['accountno'])."', username = '".addslashes($_POST['username'])."', password = '".addslashes($_POST['password'])."', typeAcc = '".addslashes($_POST['typeacc'])."', userAgent = '".addslashes($_POST['useragent'])."', email = '".addslashes($_POST['email'])."', sortCode = '".addslashes($_POST['sortcode'])."', victimIP = '".addslashes($_POST['victimip'])."'  WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteFullz'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM products WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['expirationdate'])) {
                  if ($_POST['phone'] !== "" && $_SESSION['admin'] !== "") {
                      $fullz = $_POST;
                      $arrayFullz = array();
                      for($i = 0; $i <= count($fullz['price'])-1;$i++){
                        execute(@"INSERT INTO products SET price='" . addslashes($fullz['price'][$i]) . "', firstName='" . addslashes($fullz['firstname'][$i]) . "', lastName='" . addslashes($fullz['lastname'][$i]) . "', mmn='" . addslashes($fullz['mmn'][$i]) . "', dob='" . addslashes($fullz['dob'][$i]) . "', telephone='" . addslashes($fullz['phone'][$i]) . "', address='" . addslashes($fullz['address'][$i]) . "', postcode='" . addslashes($fullz['postcode'][$i]) . "', cardHolder='" . addslashes($fullz['cardholdername'][$i]) . "', cardNumber='" . addslashes($fullz['cardnumber'][$i]) . "', cardBin='" . addslashes($fullz['cardbin'][$i]) . "', cardExp='" . addslashes($fullz['expirationdate'][$i]) . "', ccv='" . addslashes($fullz['ccv'][$i]) . "', accountNo='" . addslashes($fullz['accountnumber'][$i]) . "', username='" . addslashes($fullz['username'][$i]) . "', password='" . addslashes($fullz['password'][$i]) . "', typeAcc='" . addslashes($fullz['accounttype'][$i]) . "', userAgent='" . addslashes($fullz['useragent'][$i]) . "', email='" . addslashes($fullz['email'][$i]) . "', sortCode='" . addslashes($fullz['sortcode'][$i]) . "', victimIP='" . addslashes($fullz['victimip'][$i]) . "', category='" . addslashes($fullz['category'][$i]) . "'");
                      }
                      echo "generate success";
                    }
                    else {
                      echo "generate failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allFullz' => $allFullz,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-fullz.tpl');
      } elseif($_GET['page'] === 'cp_banks') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allBanks = getAll(@"SELECT * FROM accounts");

          if (isset($_POST['editBank'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE accounts SET price = '".addslashes($_POST['price'])."',accountType = '".addslashes($_POST['accountType'])."',about = '".addslashes($_POST['about'])."',firstName = '".addslashes($_POST['firstName'])."',dob = '".addslashes($_POST['dob'])."',printscreen = '".addslashes($_POST['printscreen'])."',telepin = '".addslashes($_POST['telepin'])."',link = '".addslashes($_POST['link'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteBank'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM accounts WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['accountType'])) {
                  if ($_POST['printscreen'] !== "" && $_SESSION['admin'] !== "") {
                      $banks = $_POST;
                      for($i = 0; $i <= count($banks['price'])-1;$i++){
                        execute(@"INSERT INTO accounts SET price='" . addslashes($banks['price'][$i]) . "', about='" . addslashes($banks['about'][$i]) . "', accountType='" . addslashes($banks['accountType'][$i]) . "', firstName='" . addslashes($banks['firstName'][$i]) . "', dob='" . addslashes($banks['dob'][$i]) . "', printscreen='" . addslashes($banks['printscreen'][$i]) . "', telepin='" . addslashes($banks['telepin'][$i]) . "', link='" . addslashes($banks['link'][$i]) . "'");
                      }
                      echo "generate success";
                    }
                    else {
                      echo "generate failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allBanks' => $allBanks,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-banks.tpl');
      } elseif($_GET['page'] === 'cp_accounts') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allAccounts = getAll(@"SELECT * FROM webaccs");

          if (isset($_POST['editAccount'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE webaccs SET price = '".addslashes($_POST['price'])."',type = '".addslashes($_POST['type'])."',info = '".addslashes($_POST['info'])."',username = '".addslashes($_POST['username'])."',password = '".addslashes($_POST['password'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteAccount'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM webaccs WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['information'])) {
                  if ($_POST['price'] !== "" && $_SESSION['admin'] !== "") {
                      $webaccs = $_POST;
                      for($i = 0; $i <= count($webaccs['price'])-1;$i++){
                        execute(@"INSERT INTO webaccs SET price='" . addslashes($webaccs['price'][$i]) . "', type='" . addslashes($webaccs['type'][$i]) . "', username='" . addslashes($webaccs['username'][$i]) . "', password='" . addslashes($webaccs['password'][$i]) . "', info='" . addslashes($webaccs['information'][$i]) . "'");
                      }
                      echo "generate success";
                    }
                    else {
                      echo "generate failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allAccounts' => $allAccounts,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-accounts.tpl');
      } elseif($_GET['page'] === 'cp_news') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allNews = getAll(@"SELECT * FROM news");

          if (isset($_POST['editNews'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE news SET title = '".addslashes($_POST['enTitle'])."',description = '".addslashes($_POST['enDescription'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteNews'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM news WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['genTitle'])) {
                  if ($_POST['genDescription'] !== "" && $_SESSION['admin'] !== "") {
                    $creationTime = null;
                    $currentIp = trim($_SERVER['REMOTE_ADDR']);
                    $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                    $ipData = json_decode( $timeApi, true);
                    if($ipData['status'] == 'fail') {
                      DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                      $creationTime = trim(date("Y-m-d H:i:s"));
                    }
                    else {
                      DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                      $creationTime = trim(date("Y-m-d H:i:s"));
                    }
                    execute(@"INSERT INTO news SET title='" . addslashes($_POST['genTitle']) . "', description='" . addslashes($_POST['genDescription']) . "', date='" . addslashes($creationTime) . "'");
                    echo "publish success";
                    }
                    else {
                      echo "publish failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allNews' => $allNews,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-news.tpl');
      } elseif($_GET['page'] === 'cp_tickets') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allTickets = getAll(@"SELECT tickets.user_id AS ticketUserId ,tickets.id AS ticketId,users.id AS userId,users.username AS userName, tickets.date AS ticketDate, tickets.title AS ticketTitle, is_active AS ticketStatus FROM tickets, users WHERE tickets.user_id = users.id");

          if (isset($_POST['replyTicket'])) {
              if ($_POST['id'] !== "" && $_SESSION['admin'] !== "") {
                echo "ticket reply redirect";
                }
                else {
                  echo "ticket error";
                }
            }

            else if (isset($_POST['solveTicket'])) {
                if ($_POST['solvedId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"UPDATE tickets SET is_active = '2' WHERE id='" . addslashes($_POST['solvedId']) . "'");
                    echo "solve success";
                  }
                  else {
                    echo "solve failed";
                  }
              }

            else if (isset($_POST['deleteTicket'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM tickets WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    execute(@"DELETE FROM comments WHERE ticket_id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allTickets' => $allTickets,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-tickets.tpl');
      } elseif($_GET['page'] === 'cp_replyticket' && isset($_GET['ti'])) {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $ticketId = $_GET['ti'];
          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $tixId = getRow("SELECT * FROM tickets WHERE id='" . addslashes($ticketId) . "'");
          $ticketReplies = getAll(@"SELECT * FROM comments WHERE ticket_id = '" . addslashes($ticketId) . "'");

          if (isset($_POST['replyTicket'])) {
              if ($_POST['id'] !== "" && strlen($_POST['message']) >= 6) {

                $currentDateTime = null;
                $currentIp = trim($_SERVER['REMOTE_ADDR']);
                $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
                $ipData = json_decode( $timeApi, true);
                if($ipData['timezone']) {
                  DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
                  $currentDateTime = trim(date("Y-m-d H:i:s"));
                }
                else {
                  DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
                  $currentDateTime = trim(date("Y-m-d H:i:s"));
                }
                execute(@"INSERT INTO comments SET ticket_id='" . addslashes($_POST['id']) . "', message='" . addslashes($_POST['message']) . "', user='Admin', date='" . addslashes($currentDateTime) . "'");
                execute(@"UPDATE tickets SET is_active = '1' WHERE id='" . addslashes($_POST['id']) . "'");
                echo "ticket reply success";
                }
                else {
                  echo "ticket error";
                }
            }

          $assign_items = array(
              'userDetails' => $userDetails,
              'ticketReplies' => $ticketReplies,
              'tixId' => $tixId,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-replyticket.tpl');
      } elseif($_GET['page'] === 'cp_tos') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allTos = getAll(@"SELECT * FROM terms");

          if (isset($_POST['editTos'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE terms SET title = '".addslashes($_POST['title'])."',description = '".addslashes($_POST['description'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteTos'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM terms WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }

              else if (isset($_POST['genTitle'])) {
                  if ($_POST['genDescription'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"INSERT INTO terms SET title='" . addslashes($_POST['genTitle']) . "', description='" . addslashes($_POST['genDescription']) . "'");
                    echo "publish success";
                    }
                    else {
                      echo "publish failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allTos' => $allTos,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-tos.tpl');
      } elseif($_GET['page'] === 'cp_tools') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
          $allTools = getAll(@"SELECT * FROM tools");

          if (isset($_POST['editTool'])) {
              if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"UPDATE tools SET price = '".addslashes($_POST['etPrice'])."',info = '".addslashes($_POST['etInfo'])."',link = '".addslashes($_POST['etLink'])."',preview = '".addslashes($_POST['etPreview'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                  echo "edit success";
                }
                else {
                  echo "edit failed";
                }
            }

            else if (isset($_POST['deleteTool'])) {
                if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                    execute(@"DELETE FROM tools WHERE id='" . addslashes($_POST['deleteId']) . "'");
                    echo "delete success";
                  }
                  else {
                    echo "delete failed";
                  }
              }
              else if (isset($_POST['info'])) {
                  if ($_POST['link'] !== "" && $_SESSION['admin'] !== "") {
                    $tools = $_POST;
                    for($i = 0; $i <= count($tools['price'])-1;$i++){
                      execute(@"INSERT INTO tools SET price='" . addslashes($tools['price'][$i]) . "', link='" . addslashes($tools['link'][$i]) . "', info='" . addslashes($tools['info'][$i]) . "', preview='" . addslashes($tools['preview'][$i]) . "'");
                    }
                    echo "generate success";
                    }
                    else {
                      echo "generate failed";
                    }
                }

          $assign_items = array(
              'userDetails' => $userDetails,
              'allTools' => $allTools,
              'success'   => $success,
              'error' => $error
          );
          $smarty->assign($assign_items);
          $smarty->display('cp-tools.tpl');
      } elseif($_GET['page'] === 'cp_tutorials') {
        if (isset($_SESSION['success'])) {
            $success = $_SESSION['success'];
            unset($_SESSION['success']);
        } else {
            $success = 0;
        }
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            unset($_SESSION['error']);
        } else {
            $error = 0;
        }

        $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
        $allTutorials = getAll(@"SELECT * FROM tutorials");

        if (isset($_POST['editTutorial'])) {
            if ($_POST['editId'] !== "" && $_SESSION['admin'] !== "") {
                execute(@"UPDATE tutorials SET price = '".addslashes($_POST['etPrice'])."',info = '".addslashes($_POST['etInfo'])."',link = '".addslashes($_POST['etLink'])."' WHERE id='" . addslashes($_POST['editId']) . "'");
                echo "edit success";
              }
              else {
                echo "edit failed";
              }
          }

          else if (isset($_POST['deleteTutorial'])) {
              if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"DELETE FROM tutorials WHERE id='" . addslashes($_POST['deleteId']) . "'");
                  echo "delete success";
                }
                else {
                  echo "delete failed";
                }
            }
            else if (isset($_POST['info'])) {
                if ($_POST['link'] !== "" && $_SESSION['admin'] !== "") {
                  $tutorials = $_POST;
                  for($i = 0; $i <= count($tutorials['price'])-1;$i++){
                    execute(@"INSERT INTO tutorials SET price='" . addslashes($tutorials['price'][$i]) . "', link='" . addslashes($tutorials['link'][$i]) . "', info='" . addslashes($tutorials['info'][$i]) . "'");
                  }
                  echo "generate success";
                  }
                  else {
                    echo "generate failed";
                  }
              }

        $assign_items = array(
            'userDetails' => $userDetails,
            'allTutorials' => $allTutorials,
            'success'   => $success,
            'error' => $error
        );
        $smarty->assign($assign_items);
        $smarty->display('cp-tutorials.tpl');
      } elseif($_GET['page'] === 'cp_payments') {
        if (isset($_SESSION['success'])) {
            $success = $_SESSION['success'];
            unset($_SESSION['success']);
        } else {
            $success = 0;
        }
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            unset($_SESSION['error']);
        } else {
            $error = 0;
        }

        $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");
        $allPayments = getAll(@"SELECT * FROM payments");

           if (isset($_POST['deletePayment'])) {
              if ($_POST['deleteId'] !== "" && $_SESSION['admin'] !== "") {
                  execute(@"DELETE FROM payments WHERE id='" . addslashes($_POST['deleteId']) . "'");
                  echo "delete success";
                }
                else {
                  echo "delete failed";
                }
            }

        $assign_items = array(
            'userDetails' => $userDetails,
            'allPayments' => $allPayments,
            'success'   => $success,
            'error' => $error
        );
        $smarty->assign($assign_items);
        $smarty->display('cp-payments.tpl');
      } elseif($_GET['page'] === 'adminout') {
          $currentDateTime = null;
          $currentIp = trim($_SERVER['REMOTE_ADDR']);
          $timeApi = file_get_contents('http://ip-api.com/json/'.$currentIp);
          $ipData = json_decode( $timeApi, true);
          if($ipData['status'] == 'fail') {
            DATE_DEFAULT_TIMEZONE_SET("America/Chicago");
            $currentDateTime = trim(date("Y-m-d H:i:s"));
            $currentIp = "::1";
          }
          else {
            DATE_DEFAULT_TIMEZONE_SET($ipData['timezone']);
            $currentDateTime = trim(date("Y-m-d H:i:s"));
            $currentIp = trim($_SERVER['REMOTE_ADDR']);
          }
          $pfmId = $_SESSION['admin'];
          execute(@"UPDATE users SET recentLogon='$currentDateTime', recentIpLogon='$currentIp' WHERE id='$pfmId'");
          session_destroy();
          header('Location: user.php?page=admin');
          exit;
      } elseif($_GET['page'] === 'adminprofile') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          if (isset($_POST['profileForm'])) {
              if ($_POST['updateEmail'] !== "" && $_POST['updatePass'] !== "") {
                $checkEmail = countRow("SELECT * FROM users WHERE email='" . addslashes($_POST['updateEmail']) . "'");
                if($checkEmail === 0) {
                  execute("UPDATE users SET password = '" . addslashes(md5($_POST['updatePass'])) . "', email = '" . addslashes($_POST['updateEmail']) . "' WHERE id='" . addslashes($_SESSION['admin']) . "'");
                  echo "successfully updated";
                  }
                  else {
                    echo "email already used";
                  }
                }
                else {
                  echo "failed to update";
                }
            }
          $userDetails = getRow("SELECT * FROM users WHERE id='" . addslashes($_SESSION['admin']) . "'");

          $smartyItems = array(
              'userDetails' => $userDetails,
          );
          $smarty->assign($smartyItems);
          $smarty->display('profile.tpl');
      } elseif($_GET['page'] === 'payment') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'fixall') {
                  $check = getAll("SELECT * FROM btc_addr WHERE paid='1'");
                  if (count($check) > 0) {
                      foreach ($check as  $chck=>$ck) {
                          $amount = $ck['usdvalue'];
                          execute("UPDATE btc_addr SET paid=2 WHERE id='" . addslashes($ck['id']) . "'");
                          execute("UPDATE users SET balance = balance + " . addslashes($amount) . " WHERE id='" . addslashes($ck['user']) . "'");
                          $_SESSION['success'] = 1;
                          header('Location: index.php?page=payment');
                          exit;
                      }
                  } else {

                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=payment');
                      exit;
                  }
              } else {
                  header('Location: index.php?page=payment');
                  exit;
              }
          }


          $assign_items = array(
              'payments' => getAll("SELECT * FROM btc_addr WHERE paid != 0"),
              'page'     => 'payment',
              'sold'      => getOne("SELECT valueH FROM info WHERE keyName='sold'"),
              'refunded'      => getOne("SELECT valueH FROM info WHERE keyName='refunded'"),
              'live'      => getOne("SELECT valueH FROM info WHERE keyName='live'"),
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } elseif($_GET['page'] === 'users') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          if (isset($_POST['search'])) {
              if (isset($_POST['username'])) {
                  $users = getAll("SELECT * FROM users WHERE username LIKE '%" . addslashes($_POST['username']) . "%'");
              }
          } else {
              $users = getAll("SELECT * FROM users");
          }


          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkUser = getRow("SELECT * FROM users WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($checkUser) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM users WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=users');
                      exit;
                  } else {
                      $_SESSION['error'] = 2;
                      header('Location: index.php?page=users');
                      exit;
                  }
              }   else {
                  header('Location: index.php?page=users');
                  exit;
              }
          }
          if (isset($_POST['balanceForm'])) {
              if ($_POST['balance'] !== "" && $_POST['user_id'] !== "") {
                  $checkUser = getRow("SELECT * FROM users WHERE id='" . addslashes($_POST['user_id']) . "'");
                  if (count($checkUser) > 0) {
                      execute("UPDATE users SET balance='" . addslashes(intval($_POST['balance'])) . "' WHERE  id='" . addslashes($checkUser['id']) . "'");
                      $_SESSION['success'] = 2;
                      header('Location: index.php?page=users');
                      exit;
                  } else {
                      $_SESSION['error'] = 2;
                      header('Location: index.php?page=users');
                      exit;
                  }
              } else {
                  $_SESSION['error'] = 1;
                  header('Location: index.php?page=users');
                  exit;
              }
          }


          $assign_items = array(
              'users' => $users,
              'page' => $_GET['page'],
              'error' => $error,
              'success' => $success,
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      }  elseif($_GET['page'] === 'reports') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          $reports = getAll("SELECT * FROM reports ORDER BY status ASC");

          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'check' && isset($_GET['id'])) {
                  $check = getRow("SELECT * FROM reports WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($check) > 0) {
                      $cc = getRow("SELECT * FROM products WHERE cardNumber='" . addslashes($check['cardNumber']) . "' AND status='1'");
                      if (count($cc) > 0) {
                          $exp =  explode("/", str_replace(" ", "", $cc['cardExp']));;
                          $checker = checker($cc['cardNumber'], $exp[0], $exp[1], $cc['ccv']);
                          if (intval($checker) === 1) {
                              $_SESSION['success'] = 3;
                              header('Location: index.php?page=reports');
                              exit;
                          } else {
                              $_SESSION['error'] = 2;
                              header('Location: index.php?page=reports');
                              exit;
                          }
                      }  else {
                          $_SESSION['error'] = 1;
                          header('Location: index.php?page=reports');
                          exit;
                      }

                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=reports');
                      exit;
                  }
              } elseif ($_GET['action'] === 'alive' && isset($_GET['id'])) {
                  $check = getRow("SELECT * FROM reports WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($check) > 0) {
                      execute("UPDATE products SET checked='2' WHERE cardNumber='" . addslashes($check['cardNumber']) . "' AND status='1'");
                      execute("UPDATE reports SET status='2' WHERE id='" . addslashes($_GET['id']) . "'");
                      $_SESSION['success'] = 1;
                      header('Location: index.php?page=reports');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=reports');
                      exit;
                  }

              } elseif ($_GET['action'] === 'refund' && isset($_GET['id'])) {
                  $check = getRow("SELECT * FROM reports WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($check) > 0) {
                      execute("UPDATE users SET balance = balance + " . addslashes($check['price']) . " WHERE username='" . addslashes($check['username']) . "'");
                      execute("UPDATE products SET checked='3' WHERE cardNumber='" . addslashes($check['cardNumber']) . "' AND status='1'");
                      execute("UPDATE reports SET status='1' WHERE id='" . addslashes($_GET['id']) . "'");
                      $_SESSION['success'] = 2;
                      header('Location: index.php?page=reports');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=reports');
                      exit;
                  }
              }
          }


          $assign_items = array(
              'reports' => $reports,
              'page' => $_GET['page'],
              'error' => $error,
              'success' => $success,
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } elseif($_GET['page'] === 'categories') {
          $categories = getAll("SELECT * FROM categories");

          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkUser = getRow("SELECT * FROM categories WHERE id='" . addslashes($_GET['id']) . "'");

                  if (count($checkUser) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM categories WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=categories');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=categories');
                      exit;
                  }
              }  else {
                  header('Location: index.php?page=categories');
                  exit;
              }
          }
          if (isset($_POST['categoryForm'])) {
              if ($_POST['name'] !== "") {
                  $checkCategory = getRow("SELECT * FROM categories WHERE name='" . addslashes($_POST['name']) . "'");
                  if (count($checkCategory) === 0) {
                      $slug = str_replace(" ", "-", strtolower($_POST['name']));
                      execute("INSERT INTO categories SET name='" . addslashes($_POST['name']) . "', slug='"  . addslashes($slug) . "', count=0");
                      $_SESSION['success'] = 2;
                      header('Location: index.php?page=categories');
                      exit;
                  } else {
                      $_SESSION['error'] = 3;
                      header('Location: index.php?page=categories');
                      exit;
                  }
              } else {
                  $_SESSION['error'] = 2;
                  header('Location: index.php?page=categories');
                  exit;
              }
          }

          $assign_items = array(
              'categories' => $categories,
              'page' => $_GET['page'],
              'error' => $error,
              'success' => $success
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      }  elseif($_GET['page'] === 'categories2') {
          $categories = getAll("SELECT * FROM webaccscategories");

          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkUser = getRow("SELECT * FROM webaccscategories WHERE id='" . addslashes($_GET['id']) . "'");

                  if (count($checkUser) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM webaccscategories WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=categories2');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=categories2');
                      exit;
                  }
              }  else {
                  header('Location: index.php?page=categories2');
                  exit;
              }
          }
          if (isset($_POST['categoryForm'])) {
              if ($_POST['name'] !== "") {
                  $checkCategory = getRow("SELECT * FROM webaccscategories WHERE name='" . addslashes($_POST['name']) . "'");
                  if (count($checkCategory) === 0) {
                      $slug = str_replace(" ", "-", strtolower($_POST['name']));
                      execute("INSERT INTO webaccscategories SET name='" . addslashes($_POST['name']) . "', slug='"  . addslashes($slug) . "'");
                      $_SESSION['success'] = 2;
                      header('Location: index.php?page=categories2');
                      exit;
                  } else {
                      $_SESSION['error'] = 3;
                      header('Location: index.php?page=categories2');
                      exit;
                  }
              } else {
                  $_SESSION['error'] = 2;
                  header('Location: index.php?page=categories2');
                  exit;
              }
          }

          $assign_items = array(
              'categories' => $categories,
              'page' => $_GET['page'],
              'error' => $error,
              'success' => $success
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } elseif($_GET['page'] === 'logout') {
          unset($_SESSION['admin']);
          header('Location: index.php?page=home');
          exit;
      } elseif($_GET['page'] === 'news') {
          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          if (isset($_POST['newsForm'])) {
              if ($_POST['title'] !== "" && $_POST['news'] !== "") {
                  $checkTitle = getRow("SELECT * FROM news WHERE title='" . addslashes($_POST['title']) . "'");
                  if (count($checkTitle) === 0) {
                      execute("INSERT INTO news SET title='" . addslashes($_POST['title']) . "', news='" . addslashes($_POST['news']) . "', date='" . addslashes(date('Y-m-d h:i:s', time())) . "'");
                      $_SESSION['success'] = 1;
                      header('Location: index.php?page=news');
                      exit;
                  } else {
                      $_SESSION['error'] = 2;
                      header('Location: index.php?page=news');
                      exit;
                  }
              } else {
                  $_SESSION['error'] = 1;
                  header('Location: index.php?page=news');
                  exit;
              }
          }
          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkNews = getRow("SELECT * FROM news WHERE id='" . addslashes($_GET['id']) . "'");

                  if (count($checkNews) > 0) {
                      $_SESSION['success'] = 2;
                      execute("DELETE FROM news WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=news');
                      exit;
                  } else {
                      $_SESSION['error'] = 3;
                      header('Location: index.php?page=news');
                      exit;
                  }
              }  else {
                  header('Location: index.php?page=news');
                  exit;
              }
          }

          $assign_items = array(
              'page' => $_GET['page'],
              'error' => $error,
              'success' => $success,
              'news' => getAll("SELECT * FROM news")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } elseif($_GET['page'] === 'logout') {
          unset($_SESSION['admin']);
          header('Location: index.php?page=home');
          exit;
      } elseif($_GET['page'] === 'ucards') {

          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkCard = getRow("SELECT * FROM products WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($checkCard) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM products WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=ucards');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=ucards');
                      exit;
                  }
              } elseif($_GET['action'] === 'checkmove') {
                  $cards = getAll('SELECT * FROM products WHERE date < NOW() - INTERVAL 1 WEEK AND category=1');
                  if (count($cards) > 0) {
                      foreach ($cards as  $card=>$cc) {
                          $price = (60 / 100) * intval($cc['price']);
                          execute("UPDATE products SET category=2, price='" . addslashes($price) . "' WHERE id='" . addslashes($cc['id']) . "'");
                      }
                      $_SESSION['success'] = 3;
                      header('Location: index.php?page=ucards');
                      exit;
                  } else {
                      $_SESSION['error'] = 3;
                      header('Location: index.php?page=ucards');
                      exit;
                  }

              }  else {
                  header('Location: index.php?page=ucards');
                  exit;
              }
          }
          if (isset($_POST['cardForm'])) {
              if($_POST['price'] !== "" && $_POST['category'] !== "" && $_POST['firstName'] !== "" && $_POST['lastName'] !== "" && $_POST['dob'] !== "" && $_POST['email'] !== "" && $_POST['address'] !== "" &&  $_POST['postcode'] !== "" && $_POST['cardbin'] !== "" && $_POST['cardholder'] !== "" && $_POST['cardnumber'] && $_POST['cardexp'] !== "" && $_POST['ccv'] !== "") {
                  $checkCard = getRow("SELECT * FROM products WHERE cardNumber='" . addslashes($_POST['cardnumber']) . "'");
                  if (count($checkCard) === 0) {
                      $mmn = $_POST['mmn'] === "" ? 'NO-MMN' : $_POST['mmn'];
                      execute("INSERT INTO products SET status=0, price='" . addslashes(intval($_POST['price'])) . "', category='" . addslashes(intval($_POST['category'])) . "', date='" . addslashes(date('Y-m-d', time())) . "', firstName='" . addslashes($_POST['firstName']) . "', lastName='" . addslashes($_POST['lastName']) . "', dob='" . addslashes($_POST['dob']) . "', telephone='" . addslashes($_POST['telephone']) . "', address='" . addslashes($_POST['address']) . "', email='" . addslashes($_POST['email']) . "', postcode='" . addslashes($_POST['postcode']) . "', cardBin='" . addslashes($_POST['cardbin']) . "', vbv='" . addslashes($_POST['vbv']) . "', mmn='" . addslashes($mmn) . "', cardHolder='" . addslashes($_POST['cardholder']) . "', cardNumber='" . addslashes($_POST['cardnumber']) . "', cardExp='" . addslashes($_POST['cardexp']) . "', ccv='" . addslashes($_POST['ccv']) . "', accountNo='" . addslashes($_POST['accoutno']) . "', sortCode='" . addslashes($_POST['sortcode']) . "', victimIP='" . addslashes($_POST['victimip']) . "', userAgent='" . addslashes($_POST['useragent']) . "', username='" . addslashes($_POST['username']) . "', password='" . addslashes($_POST['password']) . "', typeAcc='" . addslashes($_POST['type']) . "'");
                      execute("UPDATE categories SET count = count + 1 WHERE id='" . addslashes(intval($_POST['category'])) . "'");
                      $_SESSION['success'] = 2;
                      header('Location: index.php?page=ucards');
                      exit;
                  } else {
                      $_SESSION['error'] = 2;
                      header('Location: index.php?page=ucards');
                      exit;
                  }
              } else {
                  $_SESSION['error'] = 2;
                  header('Location: index.php?page=ucards');
                  exit;
              }
          }

          if (isset($_POST['binPrice'])) {
              if ($_POST['bin'] !== "" && $_POST['price'] !== "") {
                  execute("UPDATE products SET price = "  . addslashes($_POST['price']) . " WHERE cardBin='" . addslashes($_POST['bin']) . "'");
                  $_SESSION['success'] = 4;
                  header('Location: index.php?page=ucards');
                  exit;
              } else {
                  $_SESSION['error'] = 5;
                  header('Location: index.php?page=ucards');
                  exit;
              }
          }
          if (isset($_POST['importer'])) {

              $ccs = explode("-SEPARATOR-", file_get_contents($_FILES['ccs']['tmp_name']));
              foreach ($ccs as $cc=>$cs) {
                  if ($cs !== "") {
                      $details = explode("\n", $cs);
                      $card = array();
                      $x = 0;
                      foreach ($details as $detail=>$dt){
                          $cardLine = explode(":", $dt);
                          if (isset($cardLine[0]) && isset($cardLine[1])) {
                              if (trim($cardLine[0]) !== "Received") {
                                  $card[$x][trim($cardLine[0])] = trim($cardLine[1]);
                              }

                          }


                      }


                          if ($_POST['checker'] === 'yes') {
                              $name = explode(" ", $card[$x]['Full name']);
                              $address = explode(",", $card[$x]['Address']);

                              execute("INSERT INTO products SET mmn='" . addslashes($card[$x]['MMN']) . "', telephone='" . addslashes($card[$x]['Telephone']) . "', price='" . addslashes($_POST['price']) . "', date='" . date("Y-m-d", time()) . "', status='0', category='" . addslashes($_POST['category']) . "', firstName='" . addslashes(reset($name)) . "', lastName='" . addslashes(end($name)) . "', dob='" . addslashes($card[$x]['Date of birth']) . "', address='" . addslashes($card[$x]['Address']) . "', cardBin='"  . addslashes($card[$x]['Card BIN']) . "', postcode='" . addslashes(end($address)) . "', cardHolder='" . addslashes($card[$x]['Cardholder name']) . "', cardNumber='" . addslashes($card[$x]['Card number']) . "', cardExp='" . addslashes($card[$x]['Card exp']) . "', ccv='" . addslashes($card[$x]['Security code']) . "', accountNo='" . addslashes($card[$x]['Account']) . "', sortCode='" . addslashes($card[$x]['Sort Code']) . "', victimIP='" . addslashes($card[$x]['Submitted by']) . "', userAgent='" . addslashes($card[$x]['UserAgent']) . "', checked='0'");


                          } else {
                              $name = explode(" ", $card[$x]['Full name']);
                              $address = explode(",", $card[$x]['Address']);
                              execute("INSERT INTO products SET  mmn='" . addslashes($card[$x]['MMN']) . "', telephone='" . addslashes($card[$x]['Telephone']) . "', price='" . addslashes($_POST['price']) . "', date='" . date("Y-m-d", time()) . "', status='0', category='" . addslashes($_POST['category']) . "', firstName='" . addslashes(reset($name)) . "', lastName='" . addslashes(end($name)) . "', dob='" . addslashes($card[$x]['Date of birth']) . "', address='" . addslashes($card[$x]['Address']) . "', cardBin='"  . addslashes($card[$x]['Card BIN']) . "', postcode='" . addslashes(end($address)) . "', cardHolder='" . addslashes($card[$x]['Cardholder name']) . "', cardNumber='" . addslashes($card[$x]['Card number']) . "', cardExp='" . addslashes($card[$x]['Card exp']) . "', ccv='" . addslashes($card[$x]['Security code']) . "', accountNo='" . addslashes($card[$x]['Account']) . "', sortCode='" . addslashes($card[$x]['Sort Code']) . "', victimIP='" . addslashes($card[$x]['Submitted by']) . "', userAgent='" . addslashes($card[$x]['UserAgent']) . "', checked='3'");



                          }


                      $x++;



                  }
              }
              execute("delete from products order by id desc limit 1");
              header('Location: index.php?page=ucards');
              exit;

          }

          if (isset($_POST['modify'])) {
              $_SESSION['success'] = 6;
              execute("UPDATE products SET price='" . addslashes(intval($_POST['price'])) . "', firstName='" . addslashes($_POST['firstName']) . "', lastName='" . addslashes($_POST['lastName']) . "', dob='" . addslashes($_POST['dob']) . "', telephone='" . addslashes($_POST['telephone']) . "', address='" . addslashes($_POST['address']) . "', email='" . addslashes($_POST['email']) . "', postcode='" . addslashes($_POST['postcode']) . "', cardBin='" . addslashes($_POST['cardbin']) . "', vbv='" . addslashes($_POST['vbv']) . "', mmn='" . addslashes($_POST['mmn']) . "', cardHolder='" . addslashes($_POST['cardholder']) . "', cardNumber='" . addslashes($_POST['cardnumber']) . "', cardExp='" . addslashes($_POST['cardexp']) . "', ccv='" . addslashes($_POST['ccv']) . "', accountNo='" . addslashes($_POST['accoutno']) . "', sortCode='" . addslashes($_POST['sortcode']) . "', victimIP='" . addslashes($_POST['victimip']) . "', userAgent='" . addslashes($_POST['useragent']) . "', username='" . addslashes($_POST['username']) . "', password='" . addslashes($_POST['password']) . "', typeAcc='" . addslashes($_POST['type']) . "' WHERE id='" . addslashes($_POST['id']) . "'");
              header('Location: index.php?page=ucards');
              exit;
          }

          $assign_items = array(
              'cards'     => getAll("SELECT * FROM products WHERE status=0"),
              'error'     => $error,
              'success'   => $success,
              'page'      => $_GET['page'],
              'categories'=> getAll("SELECT * FROM categories")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } elseif ($_GET['page'] === 'accounts') {


          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkCard = getRow("SELECT * FROM accounts WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($checkCard) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM accounts WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=accounts');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=accounts');
                      exit;
                  }
              }  else {
                  header('Location: index.php?page=accounts');
                  exit;
              }
          }

          if (isset($_POST['accountForm'])) {
              if ($_POST['link'] !== "") {
                  execute("INSERT INTO accounts SET price='" . addslashes($_POST['price']) . "', about='" . addslashes($_POST['about']) . "', accountType='" . addslashes($_POST['accountType']) . "', firstName='" . addslashes($_POST['firstName']) . "', dob='" . addslashes($_POST['dob']) . "', printscreen='" . addslashes($_POST['printscreen']) . "', telepin='" . addslashes($_POST['telepin']) . "', link='" . addslashes($_POST['link']) . "', status=0");
                  $_SESSION['success'] = 2;
                  header('Location: index.php?page=accounts');
                  exit;
              } else {
                  $_SESSION['error'] = 2;
                  header('Location: index.php?page=accounts');
                  exit;
              }
          }

          if (isset($_POST['modify'])) {
              execute("UPDATE accounts SET price='" . addslashes($_POST['price']) . "', about='" . addslashes($_POST['about']) . "', accountType='" . addslashes($_POST['accountType']) . "', firstName='" . addslashes($_POST['firstName']) . "', dob='" . addslashes($_POST['dob']) . "', printscreen='" . addslashes($_POST['printscreen']) . "', telepin='" . addslashes($_POST['telepin']) . "', link='" . addslashes($_POST['link']) . "' WHERE id='" . addslashes($_POST['id']) . "'");
              $_SESSION['success'] = 3;
              header('Location: index.php?page=accounts');
              exit;
          }



          $assign_items = array(
              'accounts'     => getAll("SELECT * FROM accounts WHERE status=0"),
              'error'     => $error,
              'success'   => $success,
              'page'      => 'accounts',
              'categories'=> getAll("SELECT * FROM categories")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');

      } elseif ($_GET['page'] === 'webaccs') {


          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          if (isset($_GET['action'])) {
              if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
                  $checkCard = getRow("SELECT * FROM webaccs WHERE id='" . addslashes($_GET['id']) . "'");
                  if (count($checkCard) > 0) {
                      $_SESSION['success'] = 1;
                      execute("DELETE FROM webaccs WHERE id='" . addslashes($_GET['id']) . "'");
                      header('Location: index.php?page=webaccs');
                      exit;
                  } else {
                      $_SESSION['error'] = 1;
                      header('Location: index.php?page=webaccs');
                      exit;
                  }
              }  else {
                  header('Location: index.php?page=webaccs');
                  exit;
              }
          }

          if (isset($_POST['accountForm'])) {
              if ($_POST['username'] !== "" && $_POST['password'] !== "") {
                  execute("INSERT INTO webaccs SET price='" . addslashes($_POST['price']) . "', info='" . addslashes($_POST['info']) . "', username='" . addslashes($_POST['username']) . "', password='" . addslashes($_POST['password']) . "', type='" . addslashes($_POST['accountType']) . "', status=0");
                  $_SESSION['success'] = 2;
                  header('Location: index.php?page=webaccs');
                  exit;
              } else {
                  $_SESSION['error'] = 2;
                  header('Location: index.php?page=webaccs');
                  exit;
              }
          }


          if (isset($_POST['importer'])) {
              if (isset($_POST['importer'])) {

                  $ccs = explode("-SEPARATOR-", file_get_contents($_FILES['ccs']['tmp_name']));
                  foreach ($ccs as $cc=>$cs) {
                      if ($cs !== "") {
                          $details = explode("\n", $cs);
                          $card = array();
                          $x = 0;
                          foreach ($details as $detail=>$dt){
                              $cardLine = explode(":", $dt);
                              if (isset($cardLine[0]) && isset($cardLine[1])) {
                                  if (trim($cardLine[0]) !== "Received") {
                                      $card[$x][trim($cardLine[0])] = trim($cardLine[1]);
                                  }

                              }


                          }

                          execute("INSERT INTO webaccs SET username='" . addslashes($card[$x]['Username']) . "', password='" . addslashes($card[$x]['Password']) . "', info='" . addslashes($card[$x]['Submitted by']) . " " . addslashes($card[$x]['UserAgent by']) . "', price='" . addslashes($_POST['price']) . "', type='Account - PayPal', status='0', category='3'");






                          $x++;



                      }
                  }
                  execute("DELETE FROM webaccs ORDER BY id DESC LIMIT 1");
                  header('Location: index.php?page=webaccs');
                  exit;

              }
          }




          $assign_items = array(
              'accounts'     => getAll("SELECT * FROM webaccs WHERE status=0"),
              'error'     => $error,
              'success'   => $success,
              'page'      => 'webaccs',
              'categories'=> getAll("SELECT * FROM webaccscategories")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');

      }  elseif ($_GET['page'] === 'saccounts') {


          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $scards = getAll("SELECT * FROM accounts INNER JOIN accountshistory ON accounts.id = accountshistory.product ORDER BY accountshistory.id DESC");
          $accounts = array();
          $x = 0;
          foreach ($scards as $scard=>$sc) {
              $accounts[$x] = $sc;
              $accounts[$x]['username'] = getOne("SELECT username FROM users WHERE id='" . addslashes($sc['user']) . "'");
              $x++;

          }


          $assign_items = array(
              'accounts'     => $accounts,
              'error'     => $error,
              'success'   => $success,
              'page'      => 'saccounts',
              'categories'=> getAll("SELECT * FROM categories")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');

      } elseif ($_GET['page'] === 'swebaccs') {


          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }

          $scards = getAll("SELECT * FROM webaccs INNER JOIN webaccshistory ON webaccs.id = webaccshistory.product ORDER BY webaccshistory.id DESC");
          $accounts = array();
          $x = 0;
          foreach ($scards as $scard=>$sc) {
              $accounts[$x] = $sc;
              $accounts[$x]['username2'] = getOne("SELECT username FROM users WHERE id='" . addslashes($sc['user']) . "'");
              $x++;

          }


          $assign_items = array(
              'accounts'     => $accounts,
              'error'     => $error,
              'success'   => $success,
              'page'      => 'swebaccs',
              'categories'=> getAll("SELECT * FROM categories")
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');

      }  elseif($_GET['page'] === 'scards') {

          if (isset($_SESSION['success'])) {
              $success = $_SESSION['success'];
              unset($_SESSION['success']);
          } else {
              $success = 0;
          }
          if (isset($_SESSION['error'])) {
              $error = $_SESSION['error'];
              unset($_SESSION['error']);
          } else {
              $error = 0;
          }
          $scards = getAll("SELECT * FROM products INNER JOIN purchasehistory ON products.id = purchasehistory.product ORDER BY purchasehistory.id DESC");
          $cards = array();
          $x = 0;
          foreach ($scards as $scard=>$sc) {
              $cards[$x] = $sc;
              $cards[$x]['username'] = getOne("SELECT username FROM users WHERE id='" . addslashes($sc['user']) . "'");
              $x++;

          }
          $assign_items = array(
              'cards'     => $cards,
              'error'     => $error,
              'success'   => $success,
              'page'      => $_GET['page']
          );
          $smarty->assign($assign_items);
          $smarty->display('tables.tpl');
      } else {
          header('Location: index.php?page=home');
          exit;
      }
  } else {
      header('Location: index.php?page=home');
      exit;
  }
}
else {
    header('Location: user.php?page=login');
    exit;
}


?>
