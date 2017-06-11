<?php
function __autoload($class_name) {
        require_once ("/classes/".$class_name."_class.php");
    }
    $makeTable = new Table();
?>
<!DOCTYPE html>

<html>
<head>
    <title>Wish List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="themes/green/style.css">
    <script type="text/javascript" src="java.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
    <script type="text/javascript" src="jquery.tablesorter.js"></script> 


</script>
</head>
<body class="body">
<div class="header" style="text-align: center;">
   <label class="h1">Wish</label><label class="h2">List</label> <br/>
   <label class="h3"> ������ ���� ������ ������� </label>
</div>
    <div class="tblleft"></div>
    <div class="dIn">
        <form action="insert.php" method="POST">
        <label>������� ����� ������� �� ������ ������</label><br/>
            <table >
                <tr>
                    <td>�����</td>
                    <td><input type="text" name="model" ></td>
                </tr>           
                <tr>
                    <td>����������</td>
                    <td>
                        <select name="country" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td
>                </tr>
                <tr>
                    <td>�����������</td>
                    <td><input type="checkbox" name="viltur" ></td>
                </tr>
                <tr>
                    <td>������ �� �������</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td><input class="button button-green" type="submit" value="��������"></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="dUP" id="Up" style="position: fixed; right:250px; top:300px; display:none;">
            <form action="update.php" method="POST">
                    <table>     
                                           <tr>
                                    <td>Id</td>
                                    <td><input type="text" name="id" id="idU" readonly></td>
                            </tr>
                            <tr>
                                    <td>�����</td>
                                    <td><input type="text" name="model" id="modelU"></td>
                            </tr>           
                            <tr>
                                    <td>����������</td>
                                    <td><select name="country" id="countryU">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                            </select></td>
                            </tr>
                            <tr>
                                    <td>�����������</td>
                                    <td><input type="checkbox" name="vilturU" id="vilturU"></td>
                            </tr>
                            <tr>
                                    <td>������ �� �������</td>
                                    <td><input type="date" name="date"></td>
                            </tr>
                            <tr>
                                    <td><input type="submit" value="��"></td>
                            </tr>
                    </table>
            </form>
    </div>
    <input type="button" onclick="showUp()" value="��������" class="btnUp">

    <form action="delete.php" method="POST">
            <div class="tDiv">
                    <table  id="myTable" class="tablesorter" >
                    
                            <thead  >
                                    <tr>
                                            <th style="width:5px;   background-color: #ace1af" > </th>
                                            <th style="width:10px"> Id </th>
                                            <th style="width:50px">   �����   </th>
                                            <th style="width:10px"> ���������� </th>
                                            <th style="width:10px"> ����������� </th>
                                            <th style="width:40px"> ������ �� </th>
                                    </tr>
                            </thead>
                            <tbody style="font-size: 11pt">
                                    <?php 
                                        $makeTable->WriteTable();
                                    ?>                  
                            </tbody>
                       
                    </table>
            </div>
            <div style="position: fixed; top:10px; margin-top: 250px; right:350px">
                    <input class="button button-green" type="submit" value="�������">
            </div>
    </form>
    <form action="cleanTable.php">
        <input class="button button-green" style="position: fixed; top:10px; margin-top: 250px; right:150px" type="submit" value="�������� �������">
    </form>
    <form action="prnt.php">
        <input class="button button-green" style="position: fixed; top:10px; margin-top: 550px; right:150px" type="submit" value="������ ��� ������">
    </form>
    <form>
        <div class="inf" id="inf">
            <pre>
  Wish List (�����. "������ �������") � ������,  
  ������� �������� ��������� �������� ������� � ��������������  
  � ������������ ������� � �������� ������, � ������� ��������� 
  ��� ������� ��������, ������� �� ������� � ����������� �����  
  � ���������� ������ ����������� ������� ��� �������� ���,   
  ���������, ������� � �. �.

                                         &copy; 2015. WishList
        </pre>
        </div>
        <input type="button" onclick="showSP()" value="� �����" class="button button-green" style="position: fixed; top:10px; margin-top: 930px; right:30px;">
    </form>
</body>
</html>