<script>
function myFunction() {
    window.print();
}
function logout()
{
                $.ajax({
                    type: 'post',
                    url: 'store_items.php',
                    data: { logout : 1 },
                    success: function (response) {
                        alert(response);
                        window.location.href = "movies.php";
                    }
                });
}
</script>
<style>
    .ticket {
    background-color:#eeeeee;
    width:350px;
    float:left;
    padding:5px;
    border-radius: 15px;
    /*background-image: url('Images/tic1.jpg');*/
    font-style: italic;
}
</style>
<?php
session_start();
echo "<button onclick='logout()'>Logout</button>";
echo "<br/><br/>";
echo "<button onclick='print()'>Print this page</button>";
echo "<br/><br/>";
echo "<form method='post' action='store_items.php'>";
echo "</form>";
if(isset($_SESSION['one']))
{
    if(count($_SESSION['one']))
    {
        $total = 0;
        foreach ($_SESSION['one'] as $ss)
            $total += $ss[3];
        echo "<br/><br/><br/>";
        echo "<div class='ticket' style='border:1px solid'>";        
        echo "<table style='width:400px'>";
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['cname'] ."</td>";
        echo "<td>Silverado</td>";
        echo "</tr>";       
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['email'] .  "</td>";
        echo "<td>". $_SESSION['one1']['name'] ."</td>";
        echo "</tr>";        
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['number'] ."</td>";
        echo "<td>". $_SESSION['one1']['day'] .  $_SESSION['one1']['time'] ."</td>";
        echo "</tr>";        
        echo "</table>";
        echo "<br/>"; 
        echo "<table style='width:400px'>";
        foreach ($_SESSION['one'] as $one)
        {
             echo "<tr>";
             echo "<td>".$one[2]." X ". $one[0] ."</td>";
             echo "<td>".$one[3]."</td>";
             echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
        echo "<div style='margin-left:65%'>Total : $". $total ."</div>";        
        foreach ($_SESSION['one'] as $one)
        {
            echo "<hr>";
            echo "<table>";
            echo "<tr><td>Silverado</td></tr>";
            echo "<tr><td>". $_SESSION['one1']['day'] .  $_SESSION['one1']['time'] ."</td></tr>";
            echo "<tr><td> " . $_SESSION['one1']['name'] ."</td></tr>";
            echo "<tr><td>".$one[0] ."</td></tr>";
            echo "</table>";
         }
        echo "</div>";
        
    }
}



if(isset($_SESSION['two']))
{
    if(count($_SESSION['two']))
    {
        $total = 0;
        foreach ($_SESSION['two'] as $ss)
            $total += $ss[3];
        echo "<br/><br/><br/>";
        echo "<div class='ticket' style='margin-right:10%; border:1px solid'>";        
        echo "<table style='width:400px'>";
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['cname'] ."</td>";
        echo "<td>Silverado</td>";
        echo "</tr>";       
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['email'] .  "</td>";
        echo "<td>". $_SESSION['two2']['name'] ."</td>";
        echo "</tr>";        
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['number'] ."</td>";
        echo "<td>". $_SESSION['two2']['day'] .  $_SESSION['two2']['time'] ."</td>";
        echo "</tr>";        
        echo "</table>";
        echo "<br/>"; 
        echo "<table style='width:400px'>";
        foreach ($_SESSION['two'] as $one)
        {
             echo "<tr>";
             echo "<td>".$one[2]." X ". $one[0] ."</td>";
             echo "<td>".$one[3]."</td>";
             echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
        echo "<div style='margin-left:65%'>Total : $". $total ."</div>";        
        foreach ($_SESSION['two'] as $one)
        {
            echo "<hr>";
            echo "<table>";
            echo "<tr><td>Silverado</td></tr>";
            echo "<tr><td>". $_SESSION['two2']['day'] .  $_SESSION['two2']['time'] ."</td></tr>";
            echo "<tr><td> " . $_SESSION['two2']['name'] ."</td></tr>";
            echo "<tr><td>".$one[0] ."</td></tr>";
            echo "</table>";
         }
        echo "</div>";
    }
}



if(isset($_SESSION['three']))
{
    if(count($_SESSION['three']))
    {
        $total = 0;
        foreach ($_SESSION['three'] as $ss)
            $total += $ss[3];
        echo "<br/><br/><br/>";
        echo "<div class='ticket' style='border:1px solid'>";        
        echo "<table style='width:400px'>";
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['cname'] ."</td>";
        echo "<td>Silverado</td>";
        echo "</tr>";       
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['email'] .  "</td>";
        echo "<td>". $_SESSION['three3']['name'] ."</td>";
        echo "</tr>";        
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['number'] ."</td>";
        echo "<td>". $_SESSION['three3']['day'] .  $_SESSION['three3']['time'] ."</td>";
        echo "</tr>";        
        echo "</table>";
        echo "<br/>"; 
        echo "<table style='width:400px'>";
        foreach ($_SESSION['three'] as $one)
        {
             echo "<tr>";
             echo "<td>".$one[2]." X ". $one[0] ."</td>";
             echo "<td>".$one[3]."</td>";
             echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
        echo "<div style='margin-left:65%'>Total : $". $total ."</div>";        
        foreach ($_SESSION['three'] as $one)
        {
            echo "<hr>";
            echo "<table>";
            echo "<tr><td>Silverado</td></tr>";
            echo "<tr><td>". $_SESSION['three3']['day'] .  $_SESSION['three3']['time'] ."</td></tr>";
            echo "<tr><td> " . $_SESSION['three3']['name'] ."</td></tr>";
            echo "<tr><td>".$one[0] ."</td></tr>";
            echo "</table>";
         }
        echo "</div>";
    }
}



if(isset($_SESSION['four']))
{
    if(count($_SESSION['four']))
    {
        $total = 0;
        foreach ($_SESSION['four'] as $ss)
            $total += $ss[3];
        echo "<br/><br/><br/>";
        echo "<div class='ticket' style='border:1px solid'>";        
        echo "<table style='width:400px'>";
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['cname'] ."</td>";
        echo "<td>Silverado</td>";
        echo "</tr>";       
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['email'] .  "</td>";
        echo "<td>". $_SESSION['four4']['name'] ."</td>";
        echo "</tr>";        
        echo "<tr>";
        echo "<td>" . $_SESSION['login']['number'] ."</td>";
        echo "<td>". $_SESSION['four4']['day'] .  $_SESSION['four4']['time'] ."</td>";
        echo "</tr>";        
        echo "</table>";
        echo "<br/>"; 
        echo "<table style='width:400px'>";
        foreach ($_SESSION['four'] as $one)
        {
             echo "<tr>";
             echo "<td>".$one[2]." X ". $one[0] ."</td>";
             echo "<td>".$one[3]."</td>";
             echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
        echo "<div style='margin-left:65%'>Total : $". $total ."</div>";        
        foreach ($_SESSION['four'] as $one)
        {
            echo "<hr>";
            echo "<table>";
            echo "<tr><td>Silverado</td></tr>";
            echo "<tr><td>". $_SESSION['four4']['day'] .  $_SESSION['four4']['time'] ."</td></tr>";
            echo "<tr><td> " . $_SESSION['four4']['name'] ."</td></tr>";
            echo "<tr><td>".$one[0] ."</td></tr>";
            echo "</table>";
         }
        echo "</div>";
    }
	
}
session_destroy();
unset($_SESSION['one']);
unset($_SESSION['two']);
unset($_SESSION['three']);
unset($_SESSION['four']);
?>