 <?php
function __autoload($class_name) {
        require_once ("/classes/".$class_name."_class.php");
    }
    $makeTable = new Table();
?>
<!DOCTYPE html>
<html>
<head>
	<title>������ ��� ������</title>
</head>
<body>
                    <table  cellspacing="0" cellpadding="3" border="1" width="900" >
                            <thead class="tThead">
                                    <tr>
                                            
                                            <td> Id </td>
                                            <td>   �����   </td>
                                            <td> ���������� </td>
                                            <td> ����������� </td>
                                            <td> ������ �� ������� </td>
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

