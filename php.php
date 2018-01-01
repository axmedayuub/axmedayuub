<?php
    if(isset($_POST['charsub'])){
        echo "<table class='table table-striped'>";
        echo    "<tr>
                    <th>Char</th> 
                    <th>Binary</th>
                    <th>Dec</th>
                    <th>Hex</th>
                    <th>Oct</th>
                </tr>";
        $string = $_POST['charsub'];
        $char = str_split($string,1);
        foreach($char as $key=>$value){
            $dec = ord($value);
            $binary = decbin($dec);
            $hex = dechex($dec);
            $oct = decoct($dec);
            echo "<tr><td>".$value."</td><td>".$binary."</td><td>".$dec."</td><td>".$hex."</td><td>".$oct."</td></tr>";
        }
        echo "</table>";
    }
    
    
    
    if(!empty($_POST['cal'])){
        if(strstr($_POST['cal'], '+')){
            $array = explode('+', $_POST['cal']);
            echo $array[0]+$array[1];
        }else if(strstr($_POST['cal'], '*')){
            $array = explode('*', $_POST['cal']);
            echo $array[0]*$array[1];
        }
        else if(strstr($_POST['cal'], '-')){
            $array = explode('-', $_POST['cal']);
            echo $array[0]-$array[1];
        }
        else if(strstr($_POST['cal'], '/')){
            $array = explode('/', $_POST['cal']);
            if($array[1]!=0){
                echo $array[0]/$array[1];
            }else{
                echo 'can not devide by zero';
            }
            
        }else{
            echo $_POST['cal'];
        }
    }
?>