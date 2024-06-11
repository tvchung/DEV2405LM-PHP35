<?php
    // tham số là đối tượng mảng
    class PhepToan{

        // Phương thức tính tổng
        function tinhTong($arrParam){
            if(is_array($arrParam)){
                $tong=0;
                foreach ($arrParam as $key => $value) {
                    $tong += $value;
                }
                echo "<h2> Tổng: ".$tong;
            }else{
                echo "<h2> Không phải là mảng.";
            }
        }
    }

    $pt = new PhepToan();
    $arr = [1,2,3,4,5];
    $pt->tinhTong($arr);
    $arr = "Devmaster";
    $pt->tinhTong($arr);