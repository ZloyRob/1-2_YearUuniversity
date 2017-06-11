<?php

class Table {
    
    function WriteTable() {
    
        $db = "guitardatabase";
        $link = mysql_connect('localhost','root','');
        mysql_query ("SET CHARACTER SET 'cp1251'", $link);
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_query ("SET NAMES cp1251");
        if (!$link) die('Невозможно подключиться к базе данных');
        mysql_select_db($db) or die('Невозможно подключиться к таблице');  

        $qr_get = mysql_query('SELECT * FROM guitar');
            
        while($data = mysql_fetch_array($qr_get)){   
                if ($data['viltur']==0)
        {
            $rab="нет";
        } 
        else
        {
            $rab="да";
         }                                          
            echo '<tr class="prob">
                    <td><input type="checkbox" 
                            onclick="setId('.$data['id'].', \''.$data['model'].'\', \''.$data['country'].'\', '.$data['viltur'].', \''.$data['date'].'\')" 
                            name="check['.$data['id'].']" 
                            value="'.$data['id'].'"></td>
                    <td>'.$data['id'].'</td>
                    <td>'.$data['model'].'</td>
                    <td>'.$data['country'].'</td>
                    <td>'.$rab.'</td>
                    <td>'.$data['date'].'</td>

                    </tr>';                                             
        }

        mysql_close($link);
        
    }
        function WriteTable2() {
    
        $db = "guitardatabase";
        $link = mysql_connect('localhost','root','');
         mysql_query ("SET CHARACTER SET 'cp1251'", $link);
mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_query ("SET NAMES cp1251");

        if (!$link) die('Невозможно подключиться к базе данных');
        mysql_select_db($db) or die('Невозможно подключиться к таблице');  

        $qr_get = mysql_query('SELECT * FROM guitar');
            
        while($data = mysql_fetch_array($qr_get)){   
        if ($data['viltur']==0)
        {
            $rab="нет";
        } 
        else
        {
            $rab="да";
        }    
        $d=$data['date'];
        $dn=date("Y.m.d");
        if ( $d < $dn)  
        {
             echo '<tr class="prob" style ="   text-decoration:line-through ">  
                 
                    <td>'.$data['id'].'</td>
                    <td>'.$data['model'].'</td>
                    <td>'.$data['country'].'</td>
                    <td>'.$rab.'</td>
                    <td>'.$data['date'].'</td>

                    </tr>';   
        }                                    
           else { echo '<tr class="prob">      
                    <td>'.$data['id'].'</td>
                    <td>'.$data['model'].'</td>
                    <td>'.$data['country'].'</td>
                    <td>'.$rab.'</td>
                    <td>'.$data['date'].'</td>

                    </tr>';    
                    }                                         
        }

        mysql_close($link);
        
    }
}

