<?php
//date_default_timezone_set('Asia/Karachi');
//echo $running_day = date('w',mktime(0,0,0,1,1,2017));
echo sha1('hamad749')."<br>";
//echo round('9.1239',2);
// $date1 = date_create("2011-01-01");
// $date2 = date_create("2015-01-01");
//  $diff=date_diff($date1,$date2);
 //echo $days = $diff->format("%R%a");
//echo  "<br>".$days/365;

 //var_dump("<pre>",date('Y-m-d',strtotime($diff)));
//echo date('Y-m',strtotime("2017-13"));
// $array[] = array(
// 			'name' => 'ame 1',
// 			'e_id' => '1'
// 			);
// $array[] = array(
// 			'name' => 'dame 1',
// 			'e_id' => '1'
// 			);
// $array[] = array(
// 			'name' => 'bame 1',
// 			'e_id' => '1'
// 			);
// sort($array);
//var_dump("<pre>",uniqid());
$client  = $_SERVER['HTTP_CLIENT_IP']."<br>";
$forward = $_SERVER['HTTP_X_FORWARDED_FOR']."<br>";
$remote  = $_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        //echo $_SERVER['REMOTE_ADDR'];
        //echo gethostname();



        //add VENDOR to purchase table
        //add company to product table
        // $array = array('1','2','3','4','5');
        // echo $ser = serialize($array);
        // echo "<br>";
        // $unser = unserialize($ser);
        // var_dump($unser);
        date_default_timezone_set("Asia/Karachi");
          $dateLast = date('Y-m-d',strtotime("2017-02-01"));
          $d = new DateTime($dateLast);
          echo $d->format('Y-m-t')."<br>";


          echo "Password = ".password_hash('dx001za',PASSWORD_DEFAULT);
          echo "<br>";

          array(
            '0001' => 'dx001za',
            '0002' => 'ss001qw'
            );


          var_dump([1, 2, 3]);
          echo "sha1:".sha1('hamad');
          echo "<br><br><br><br><br><br><br><br>";

            echo base64_decode('ZHgwMDF6YQ==');
            
          echo "<br><br><br><br><br><br><br><br>";
          ?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
  echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
  //$browser = get_browser(null, true);
  //print_r($browser);
  echo phpversion();
  echo "some changes has been made to the file";
?>
</body>
</html>