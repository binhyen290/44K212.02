<?php
include 'header.php';
require 'connect.php';

if(date('D') === 'Mon') 
    $monday =  date('d-m-Y');
else
    $monday = date('d-m-Y',strtotime('last monday')); 
 
$sql_san1= "SELECT * FROM `dat_san` WHERE ten_san = 'Sân 1' AND xu_ly = 'chap_nhan' AND ngay_dat_san BETWEEN '". date('Y-m-d',strtotime('last monday')). "' AND '". date('Y-m-d',strtotime($monday.' + 6 day'))."' ORDER BY `ngay_dat_san` ASC";

$sql_san2= "SELECT * FROM `dat_san` WHERE ten_san = 'Sân 2' AND xu_ly = 'chap_nhan' AND ngay_dat_san BETWEEN '". date('Y-m-d',strtotime('last monday')). "' AND '". date('Y-m-d',strtotime($monday.' + 6 day'))."' ORDER BY `ngay_dat_san` ASC";
    $result = mysqli_query($connect,$sql_san1);
    
    while ($row=mysqli_fetch_assoc($result)) {
        $data_1[] = $row;
    }

    $result2 = mysqli_query($connect,$sql_san2);
    
    while ($row=mysqli_fetch_assoc($result2)) {
        $data_2[] = $row;
    }

// echo '<pre>';
// var_dump($data_1);
// var_dump($data_2);
// echo '</pre>';
	 
// function week_from_monday($date) {
//     // Assuming $date is in format DD-MM-YYYY
//     list($day, $month, $year) = explode("-", $date);
  
//     // Get the weekday of the given date
//     $wkday = date('l',mktime('0','0','0', $month, $day, $year));
  
  
  
//     switch($wkday) {
//         case 'Monday': $numDaysToMon = 0; break;
//         case 'Tuesday': $numDaysToMon = 1; break;
//         case 'Wednesday': $numDaysToMon = 2; break;
//         case 'Thursday': $numDaysToMon = 3; break;
//         case 'Friday': $numDaysToMon = 4; break;
//         case 'Saturday': $numDaysToMon = 5; break;
//         case 'Sunday': $numDaysToMon = 6; break;   
//     }
  
//     // Timestamp of the monday for that week
//     $monday = mktime('0','0','0', $month, $day-$numDaysToMon, $year);
  
//     $seconds_in_a_day = 86400;
  
//     // Get date for 7 days from Monday (inclusive)
//     for($i=0; $i<7; $i++)
//     {
//         $dates[$i] = date('d/m',$monday+($seconds_in_a_day*$i));
//     }
  
//     return $dates;
//   }
?>
<?php 
    // $i = 0 ;
    // while ($i <= 6) {
        // switch (date('d-m-Y', strtotime($data_1[$i]['ngay_dat_san'])) {
        //     case 'value':
        //         # code...
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }
    //     echo $i . ' ' . $data_1[$i]['ten_nguoi_dat'];
    //     $day = date('d-m-Y', strtotime($data_1[$i]['ngay_dat_san']));
    //     $date_c = date('d-m-Y', strtotime($monday .' +'.$i.' day'));
    //     // echo $date_c;
    //     $day_m = $date_c;
    //     if ($day == $date_c) {
    //         echo '<td>'.$data_1[$i]['ten_nguoi_dat'].'</td>';
    //     }
    //     else {
    //         echo '<td></td>';
    //     }
    //     $i++;
    // }
?>
<section class="lich_dat_san container">
    <div class="row">
        <div class="col-md-12">
            <table>
                <thead>
                    <tr>
                        <th>Thời Gian</th>
                        <th>Sân</th>
                        <th>Thứ 2 <?php echo date('d-m', strtotime($monday)); ?></th>
                        <th>Thứ 3 <?php echo date('d-m', strtotime($monday .' +1 day')); ?></th>
                        <th>Thứ 4 <?php echo date('d-m', strtotime($monday .' +2 day')); ?></th>
                        <th>Thứ 5 <?php echo date('d-m', strtotime($monday .' +3 day')); ?></th>
                        <th>Thứ 6 <?php echo date('d-m', strtotime($monday .' +4 day')); ?></th>
                        <th>Thứ 7 <?php echo date('d-m', strtotime($monday .' +5 day')); ?></th>
                        <th>Chủ Nhật <?php echo date('d-m', strtotime($monday .' +6 day')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th rowspan="2">16:30-17:30</th>
                        <td>Sân 1 </td>
                        <?php 
                            // foreach($data_1 as $key => $value) { 
                            //     $day = date('d-m-Y', strtotime($value['ngay_dat_san']));
                            //     $day_m = $monday;
                            //     if ($day == $monday) {
                            //         echo '<td>'.$value['ten_nguoi_dat'].'</td>';
                            //     }
                            //     else {
                            //         echo '<td></td>';
                            //     }
                            //     while ($data) {
                            //         # code...
                            //     }
                            // }
                            // while ($i <= 6) {
                            //     echo $i . ' ' . $data_1[$i]['ten_nguoi_dat'];
                            //     $day = date('d-m-Y', strtotime($data_1[$i]['ngay_dat_san']));
                            //     $date_c = date('d-m-Y', strtotime($monday .' +'.$i.' day'));
                            //     // echo $date_c;
                            //     $day_m = $date_c;
                            //     if ($day == $date_c) {
                            //         echo '<td>'.$data_1[$i]['ten_nguoi_dat'].'</td>';
                            //     }
                            //     else {
                            //         echo '<td></td>';
                            //     }
                            //     $i++;

                            // }
                        ?>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                         <td class="item_1_16_17"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="display:none"></th>
                        <td>Sân 2</td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                         <td class="item_2_16_17"> </td>
                    </tr>
                    
                    <tr>
                        <th rowspan="2">17:30-18:30</th>
                        <td>Sân 1 </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                         <td class="item_1_17_18"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="display:none"></th>
                        <td>Sân 2</td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                         <td class="item_2_17_18"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2">18:30-19:30</th>
                        <td>Sân 1 </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                         <td class="item_1_18_19"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="display:none"></th>
                        <td>Sân 2</td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                         <td class="item_2_18_19"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2">19:30-20:30</th>
                        <td>Sân 1 </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                         <td class="item_1_19_20"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="display:none"></th>
                        <td>Sân 2</td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                         <td class="item_2_19_20"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2">20:30-21:30</th>
                        <td>Sân 1 </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                         <td class="item_1_20_21"> </td>
                    </tr>
                    <tr>
                        <th rowspan="2" style="display:none"></th>
                        <td>Sân 2</td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                         <td class="item_2_20_21"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>