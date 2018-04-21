<?php
  session_start();

  if(isset($_POST['total_cart_items']))
  {
	echo count($_SESSION['name']);
	exit();
  }
  if(isset($_POST['cname']))
  {
      $cname = $_POST['cname'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $_SESSION['login']['cname'] = $cname;
      $_SESSION['login']['email'] = $email;
      $_SESSION['login']['number']=$number;

       echo '<script>window.location.href = "checkout.php";</script>';

      exit();
  }
  if(isset($_POST['logout']))
  {
      $_SESSION['login'] = array();
      echo "Logout SuccessFull Done...";
      exit();
  }

  if(isset($_POST['one']))
  {      
      $_SESSION['one'] = array();
      $_SESSION['one1'] = array();
      if($_POST['sa'] > 0)
      {
           $arr = array($_POST['n1'],$_POST['ssa']/$_POST['sa'],$_POST['sa'],$_POST['ssa']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['sp'] > 0)
      {
           $arr = array($_POST['n2'],$_POST['ssp']/$_POST['sp'] ,$_POST['sp'],$_POST['ssp']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['sc'] > 0)
      {
           $arr = array($_POST['n3'],$_POST['ssc']/$_POST['sc'] ,$_POST['sc'] ,$_POST['ssc']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['fa'] > 0)
      {
           $arr = array($_POST['n4'],$_POST['sfa']/$_POST['fa'] ,$_POST['fa'] ,$_POST['sfa']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['fc'] > 0)
      {
           $arr = array($_POST['n5'],$_POST['sfc']/$_POST['fc'],$_POST['fc'] ,$_POST['sfc']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['b1'] > 0)
      {
           $arr = array($_POST['n6'],$_POST['sb1']/$_POST['b1'] ,$_POST['b1'] ,$_POST['sb1']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['b2'] > 0)
      {
           $arr = array($_POST['n7'],$_POST['sb2']/$_POST['b2'],$_POST['b2'],$_POST['sb2']);
           array_push($_SESSION['one'], $arr);
      }
      if($_POST['b3'] > 0)
      {
           $arr = array($_POST['n8'],$_POST['sb3']/$_POST['b3'] ,$_POST['b3'] ,$_POST['sb3']);
           array_push($_SESSION['one'], $arr);
      }
        $_SESSION['one1']['day'] = $_POST['day'];
        $_SESSION['one1']['name'] = $_POST['name'];
        $_SESSION['one1']['time']=$_POST['time'];
        $_SESSION['one1']['price1']=$_POST['price1'];
    echo count($_SESSION['one']);
    exit();
  }

  if(isset($_POST['two']))
  {      
      $_SESSION['two'] = array();
      $_SESSION['two2'] = array();
      if($_POST['sa'] > 0)
      {
           $arr = array($_POST['n1'],$_POST['ssa']/$_POST['sa'],$_POST['sa'],$_POST['ssa']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['sp'] > 0)
      {
           $arr = array($_POST['n2'],$_POST['ssp']/$_POST['sp'] ,$_POST['sp'],$_POST['ssp']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['sc'] > 0)
      {
           $arr = array($_POST['n3'],$_POST['ssc']/$_POST['sc'] ,$_POST['sc'] ,$_POST['ssc']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['fa'] > 0)
      {
           $arr = array($_POST['n4'],$_POST['sfa']/$_POST['fa'] ,$_POST['fa'] ,$_POST['sfa']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['fc'] > 0)
      {
           $arr = array($_POST['n5'],$_POST['sfc']/$_POST['fc'],$_POST['fc'] ,$_POST['sfc']);
           array_push($_SESSION['tow'], $arr);
      }
      if($_POST['b1'] > 0)
      {
           $arr = array($_POST['n6'],$_POST['sb1']/$_POST['b1'] ,$_POST['b1'] ,$_POST['sb1']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['b2'] > 0)
      {
           $arr = array($_POST['n7'],$_POST['sb2']/$_POST['b2'],$_POST['b2'],$_POST['sb2']);
           array_push($_SESSION['two'], $arr);
      }
      if($_POST['b3'] > 0)
      {
           $arr = array($_POST['n8'],$_POST['sb3']/$_POST['b3'] ,$_POST['b3'] ,$_POST['sb3']);
           array_push($_SESSION['two'], $arr);
      }
        $_SESSION['two2']['day'] = $_POST['day'];
        $_SESSION['two2']['name'] = $_POST['name'];
        $_SESSION['two2']['time']=$_POST['time'];
        $_SESSION['two2']['price1']=$_POST['price1'];
    echo count($_SESSION['two']);
    exit();
  }
  
  if(isset($_POST['three']))
  {      
      $_SESSION['three'] = array();
      $_SESSION['three3'] = array();
      if($_POST['sa'] > 0)
      {
           $arr = array($_POST['n1'],$_POST['ssa']/$_POST['sa'],$_POST['sa'],$_POST['ssa']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['sp'] > 0)
      {
           $arr = array($_POST['n2'],$_POST['ssp']/$_POST['sp'] ,$_POST['sp'],$_POST['ssp']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['sc'] > 0)
      {
           $arr = array($_POST['n3'],$_POST['ssc']/$_POST['sc'] ,$_POST['sc'] ,$_POST['ssc']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['fa'] > 0)
      {
           $arr = array($_POST['n4'],$_POST['sfa']/$_POST['fa'] ,$_POST['fa'] ,$_POST['sfa']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['fc'] > 0)
      {
           $arr = array($_POST['n5'],$_POST['sfc']/$_POST['fc'],$_POST['fc'] ,$_POST['sfc']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['b1'] > 0)
      {
           $arr = array($_POST['n6'],$_POST['sb1']/$_POST['b1'] ,$_POST['b1'] ,$_POST['sb1']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['b2'] > 0)
      {
           $arr = array($_POST['n7'],$_POST['sb2']/$_POST['b2'],$_POST['b2'],$_POST['sb2']);
           array_push($_SESSION['three'], $arr);
      }
      if($_POST['b3'] > 0)
      {
           $arr = array($_POST['n8'],$_POST['sb3']/$_POST['b3'] ,$_POST['b3'] ,$_POST['sb3']);
           array_push($_SESSION['three'], $arr);
      }
        $_SESSION['three3']['day'] = $_POST['day'];
        $_SESSION['three3']['name'] = $_POST['name'];
        $_SESSION['three3']['time']=$_POST['time'];
        $_SESSION['three3']['price1']=$_POST['price1'];
    echo count($_SESSION['three']);
    exit();
  }
  
  if(isset($_POST['four']))
  {      
      $_SESSION['four'] = array();
      $_SESSION['four4'] = array();
      if($_POST['sa'] > 0)
      {
           $arr = array($_POST['n1'],$_POST['ssa']/$_POST['sa'],$_POST['sa'],$_POST['ssa']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['sp'] > 0)
      {
           $arr = array($_POST['n2'],$_POST['ssp']/$_POST['sp'] ,$_POST['sp'],$_POST['ssp']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['sc'] > 0)
      {
           $arr = array($_POST['n3'],$_POST['ssc']/$_POST['sc'] ,$_POST['sc'] ,$_POST['ssc']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['fa'] > 0)
      {
           $arr = array($_POST['n4'],$_POST['sfa']/$_POST['fa'] ,$_POST['fa'] ,$_POST['sfa']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['fc'] > 0)
      {
           $arr = array($_POST['n5'],$_POST['sfc']/$_POST['fc'],$_POST['fc'] ,$_POST['sfc']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['b1'] > 0)
      {
           $arr = array($_POST['n6'],$_POST['sb1']/$_POST['b1'] ,$_POST['b1'] ,$_POST['sb1']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['b2'] > 0)
      {
           $arr = array($_POST['n7'],$_POST['sb2']/$_POST['b2'],$_POST['b2'],$_POST['sb2']);
           array_push($_SESSION['four'], $arr);
      }
      if($_POST['b3'] > 0)
      {
           $arr = array($_POST['n8'],$_POST['sb3']/$_POST['b3'] ,$_POST['b3'] ,$_POST['sb3']);
           array_push($_SESSION['four'], $arr);
      }
        $_SESSION['four4']['day'] = $_POST['day'];
        $_SESSION['four4']['name'] = $_POST['name'];
        $_SESSION['four4']['time']=$_POST['time'];
        $_SESSION['four4']['price1']=$_POST['price1'];
    echo count($_SESSION['four']);
    exit();
  }
  
  if(isset($_POST['showcart']))
  {
      if(isset($_SESSION['login']) && count($_SESSION['login']) > 0)
      {
          echo "<a href='checkout.php'><button>Checkout</button></a>";
      }
      else
      {
         echo " <button onclick='div_show()'>Checkout</button>";
      }
    if(isset($_SESSION['one']) && count($_SESSION['one']) > 0){
            echo "<div class='cart_items'>";
            $val = "one";
            echo $_SESSION['one1']['name'] . "<br/>";
            echo "Showing at " . $_SESSION['one1']['day'] . $_SESSION['one1']['time'];
            echo "<button onclick='deletecart(\"one\",1)'>Delete</button>";
            echo "<table id='tab1'>";
            foreach ($_SESSION['one'] as $ses)
            {
                 echo "<tr>";
                 echo "<td>". $ses[0] ."</td>";
                 echo "<td>". $ses[1] ."</td>";
                 echo "<td>". $ses[2] ."</td>";
                 echo "<td>". $ses[3] ."</td>";
                 echo "</tr>";
            }
            echo "<tr><td colspan='3'>SubTotal : </td><td>".$_SESSION['one1']['price1']."</td></tr>";
            echo "</table>";
            echo "</div>";
    }  
    if(isset($_SESSION['two']) && count($_SESSION['two']) > 0){
            echo "<div class='cart_items'>";
            echo $_SESSION['two2']['name'] . "<br/>";
            echo "Showing at " . $_SESSION['two2']['day'] . $_SESSION['two2']['time'];
            echo "<button onclick='deletecart(\"two\",2)'>Delete</button>";            
            echo "<table id='tab1'>";
            foreach ($_SESSION['two'] as $ses)
            {
                 echo "<tr>";
                 echo "<td>". $ses[0] ."</td>";
                 echo "<td>". $ses[1] ."</td>";
                 echo "<td>". $ses[2] ."</td>";
                 echo "<td>". $ses[3] ."</td>";
                 echo "</tr>";
            }
            echo "<tr><td colspan='3'>SubTotal : </td><td>".$_SESSION['two2']['price1']."</td></tr>";
            echo "</table>";
            echo "</div>";
    }
    
    if(isset($_SESSION['three']) && count($_SESSION['three']) > 0){
            echo "<div class='cart_items'>";
            echo $_SESSION['three3']['name'] . "<br/>";
            echo "Showing at " . $_SESSION['three3']['day'] . $_SESSION['three3']['time'];
            echo "<button onclick='deletecart(\"three\",3)'>Delete</button>";
            echo "<table id='tab1'>";
            foreach ($_SESSION['three'] as $ses)
            {
                 echo "<tr>";
                 echo "<td>". $ses[0] ."</td>";
                 echo "<td>". $ses[1] ."</td>";
                 echo "<td>". $ses[2] ."</td>";
                 echo "<td>". $ses[3] ."</td>";
                 echo "</tr>";
            }
            echo "<tr><td colspan='3'>SubTotal : </td><td>".$_SESSION['three3']['price1']."</td></tr>";
            echo "</table>";
            echo "</div>";
    }
     if(isset($_SESSION['four']) && count($_SESSION['four']) > 0){
            echo "<div class='cart_items'>";
            echo $_SESSION['four4']['name'] . "<br/>";
            echo "Showing at " . $_SESSION['four4']['day'] . $_SESSION['four4']['time'];
            echo "<button onclick='deletecart(\"four\",4)'>Delete</button>";                        
            echo "<table id='tab1'>";
            foreach ($_SESSION['four'] as $ses)
            {
                 echo "<tr>";
                 echo "<td>". $ses[0] ."</td>";
                 echo "<td>". $ses[1] ."</td>";
                 echo "<td>". $ses[2] ."</td>";
                 echo "<td>". $ses[3] ."</td>";
                 echo "</tr>";
            }
            echo "<tr><td colspan='3'>SubTotal : </td><td>".$_SESSION['four4']['price1']."</td></tr>";
            echo "</table>";
            echo "</div>";
    }
  }
  if(isset($_POST['deletecart']))
  {
        $_SESSION[$_POST['deletecart']] = array();
        $_SESSION[$_POST['deletecart']. $_POST['n']] = array();
  }
  
  if(isset($_POST['download']))
  {
       $data = "";
       $data1 = "";
       $data2 ="";
       $data3 ="";
       if(isset($_SESSION['one']) && count($_SESSION['one']) > 0){
            $data = "Movie name : " . $_SESSION['one1']['name'] . "\n";
            $data .= "Showing at " . $_SESSION['one1']['day'] . $_SESSION['one1']['time'] . "\n";
            foreach ($_SESSION['one'] as $ses)
            {
                $data .= $ses[0] . $ses[1] .$ses[2] .$ses[3] . "\n";
            }
            $data .=  "SubTotal : ".$_SESSION['one1']['price1'];
        }
        if(isset($_SESSION['two']) && count($_SESSION['two']) > 0){
            $data1 = "Movie name : " . $_SESSION['two2']['name'] . "\n";
            $data1 .= "Showing at " . $_SESSION['two2']['day'] . $_SESSION['two2']['time'] . "\n";
            foreach ($_SESSION['two'] as $ses)
            {
                $data1 .= $ses[0] . $ses[1] .$ses[2] .$ses[3] . "\n";
            }
            $data1 .=  "SubTotal : ".$_SESSION['two2']['price1'];
        }
        if(isset($_SESSION['three']) && count($_SESSION['three']) > 0){
            $data2 = "Movie name : " . $_SESSION['three3']['name'] . "\n";
            $data2 .= "Showing at " . $_SESSION['three3']['day'] . $_SESSION['three3']['time'] . "\n";
            foreach ($_SESSION['three'] as $ses)
            {
                $data2 .= $ses[0] . $ses[1] .$ses[2] .$ses[3] . "\n";
            }
            $data2 .=  "SubTotal : ".$_SESSION['three3']['price1'];
        }
        if(isset($_SESSION['four']) && count($_SESSION['four']) > 0){
            $data3 = "Movie name : " . $_SESSION['four4']['name'] . "\n";
            $data3 .= "Showing at " . $_SESSION['four4']['day'] . $_SESSION['four4']['time'] . "\n";
            foreach ($_SESSION['four'] as $ses)
            {
                $data3 .= $ses[0] . $ses[1] .$ses[2] .$ses[3] . "\n";
            }
            $data3 .=  "SubTotal : ".$_SESSION['four4']['price1'];
        }
      
       
  }
?>