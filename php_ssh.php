<?php
/**
 * Created by PhpStorm.
 * User: NAT-PC
 * Date: 12/16/2015
 * Time: 6:01 PM
 */

//send


$hostname = '172.29.101.21'; //christmas101 172.29.101.21
$port = '22';
$username = 'infrubber';

$pubkey = "D:/keys/infrubber.pub";
$prikey = "D:/keys/infrubber.ppk";
$pub_key = file_get_contents($pubkey);
print "<pre>";
var_export($pub_key);
print "</pre>";

$prv_key = file_get_contents($prikey);
print "<pre>";
var_export($prv_key);
print "</pre>";
$conn = ssh2_connect($hostname, 22,array('hostkey'=>'ssh-rsa'));
if (!$conn) {
    echo "fail: unable to establish connection\n";
} else {
    echo "Successful :  connection\n";
}

$sftp = ssh2_sftp($conn);
if ($sftp) {
    echo " sftp Success";
}else{
    echo " sftp Failed";
}

$booAut = ssh2_auth_pubkey_file($conn,'infrubber', $pubkey,$prikey

);

if ($booAut) { #  Authen  OK

    #Send File 2 Host
    /* $booSend = ssh2_scp_send($conn, $pathlocal . $namefile, $pathremote . $namefile, 0644);

     if ($booSend) { # Send Succ
         return true;
     } else { # send Fail
         return false;
     }
    */
    echo "Public Key Authentication Successful\n";
} else { # Authen Fail
    //  return false;
    echo "Public Key Authentication Failed";
}


/*
 *
 *
 * //$pathlocal = 'D:/project_sps0019/Data/ToChrist/';
//$namefile = "test.txt";
//$pathremote = '/home/interfaces/inf/infrubber/FromCIF';



$prv_key = file_get_contents('D:/keys/infrubber.ppk');
print "<pre>";
var_export($prv_key);
print "</pre>";

$callbacks = array('disconnect' => 'my_ssh_disconnect');
//recv
$conn = ssh2_connect($hostname, $port);
$booAut = ssh2_auth_pubkey_file($conn, $username, $pubkey, $prikey);

if ($booAut) { #  Authen  OK

    #Recive File 2 Host
    $booRecv = ssh2_scp_recv($conn, $pathremote . $namefile, $pathlocal . $namefile);

    if ($booRecv) { # Recv Succ
        return true;
    } else { # Recv Fail
        return false;
    }
} else { # Authen Fail
    return false;
}
*/