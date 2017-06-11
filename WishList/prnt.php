 <?php
function __autoload($class_name) {
        require_once ("/classes/".$class_name."_class.php");
    }
    $makeTable = new Table();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Версия для печати</title>
</head>
<body>
                    <table  cellspacing="0" cellpadding="3" border="1" width="900" >
                            <thead class="tThead">
                                    <tr>
                                            
                                            <td> Id </td>
                                            <td>   Товар   </td>
                                            <td> Количество </td>
                                            <td> Обязательно </td>
                                            <td> Купить не позднее </td>
                                    </tr>
                            </thead>
                            <tbody >
                                    <?php 
                                        $makeTable->WriteTable2();
                                    ?>                  
                            </tbody>
                    </table>
</body>
</html>

