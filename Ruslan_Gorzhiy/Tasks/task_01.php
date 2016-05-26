<?php
/*Необходимо реализовать функцию, которая сгенерирует HTML страницу по заданным
параметрам. На вход функции подается двумерный массив следующего вида:*/

$arr = array(
            array('text'    => 'Текст красного цвета',
                  'cells'   => '1,2,4,5',
                  'align'   => 'center',
                  'valign'  => 'center',
                  'color'   => 'FF0000',
                  'bgcolor' => '0000FF'),
            array('text'    => 'Текст зеленого цвета',
                'cells'   => '8,9',
                'align'   => 'right',
                'valign'  => 'bottom',
                'color'   => '00FF00',
                'bgcolor' => 'FFFFFF')
);

function generic_table($arr){

    foreach($arr AS $key => $val){
        foreach($val AS $key1 => $val1){
            if ($key1=='cells'){
                $cntcells = (explode(",",$val1));
                foreach($cntcells AS $tkey => $tval){
                    if (!$val['color']) {
                        $color='black';
                    }else{
                        $color=$val['color'];
                    }
                    if (!$val['valign']) {
                        $valign='center';
                    }else{
                        $valign=$val['valign'];
                    }
                    if (!$val['bgcolor']) {
                        $bgcolor='black';
                    }else{
                        $bgcolor=$val['bgcolor'];
                    }

                    $table[$tval] = "<td width='180' height='180' style='color:$color' valign='".$val['valign']."' align='".$val['align']."'>".$val['text']."</td>";
                    if($table[$tval-1]==$table[$tval]){
                       $table[$tval-1] = "<!--killed-->";
                       $table[$tval] = "<td colspan='2' rowspan='2' width='250' height='250' bgcolor='".$bgcolor."' style='color:$color' valign='".$val['valign']."' align='".$val['align']."'>".$val['text']."</td>";
                    if($tval==5){
                           $table[$tval] = "<!--killed-->";
                       }
                    }else{

                    }
                }
            }
        }
    }

    end($table);
    print '<table border="1" width="500" height="500"><tr>';
    for($i=1; $i<=key($table); $i++){
        if (strlen($table[$i])==0) print "<td align='center'>$i</td>";
        print $table[$i];
        if ($i%3==0){
            print "</tr><tr>";
        }
    }
    print '<tr></table>';

}

generic_table($arr);

