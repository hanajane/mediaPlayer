<?php
// $numbers = array(1,2,3,4);
// $total = count($numbers);
// $sum = 0;
// $loop = 0;

// foreach($numbers as $number)
// {
//     $loop = $loop + 1;
//     if ($loop < $total) {
//         $sum = $sum + $number;
//     }
// }

// echo $sum;
?>

<!-- 1 loop
1<5
1- sum
2 number
1 loop +1 = 2
1 sum 2 = 3
3 number 
2 loop + 1 =3
3 sum 3 = 6
3 loop +1
if 4<4... -->


<?php
$numbers = array(1,2,3,4);
$total = count($numbers);
$sum = 0;
$output = "";
$loop = 0;

foreach($numbers as $number) {
    $loop = $loop + 1;
    if ($loop < $total) {
        $output = $number . $output;
    }
}

echo $output;

?>

<!-- 
1 number 
0 loop + 1 = 1
1 output "" = 1

2 number 
1 loop + 1 = 2
2 number + output 1 = 3

3 number
2 loop + 1 =3
3 number + output 3 = 6

4 number 
3 loop + 1 = 4
4<total..... -->

<!-- 1 number
0 loop + 1 =1
1 number . "" output = 1""

2 number 
1 loop + 1 = 2
2 number . 1output = 21

3 number
2 loop + 1 = 3
3 number . 21 output = 321

4 number 
3 loop + 1 = 4
4 loop < 4 = false
 -->


<?php 
// $catalog[201] = [
//     "title" => "Forrest Gump",
//     "img" => "img/media/forest_gump.jpg",
//     "genre" => "Drama",
//     "format" => "DVD",
//     "year" => 1994,
//     "category" => "Movies",
//     "director" => "Robert Zemeckis",
//     "writers" => [
//         "Winston Groom",
//         "Eric Roth"
//     ],
//     "stars" => [
//         "Tom Hanks",
//         "Rebecca Williams",
//         "Sally Field",
//         "Michael Conner Humphreys"
//     ]
// ];
// ?>
<!-- //   <ul class="items"> -->
//             <?php
//             foreach ($catalog as $id=>$item) {
//                 // echo get_item_html($id,$item);
//               $output = "<li><a href='#'><img src='" 
//               . $item["img"] . "' alt='" 
//               . $item["title"] . "' />" 
//               . "<p>View Details</p>"
//               . "</a></li>";
//               echo $output;
//                             echo $output;

//             }
//             ?>                              
<!-- // </ul> -->



 <!-- redirect page and $_GET -->
<!-- <?php 
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $test = $_POST["test"];
//     header("location:test.php?status=done");
//     exit;
//   }  ?>
<html>
<head>
</head>
<body>
  <form action="quiz.php" method="POST">
       <?php
    //    if (isset($_GET["status"]) && $_GET["status"] == "done") {
    //             // echo $test;
    //               echo "<h1>hello</h1>"; -->
    //   } ?>
      <input type="text" name="test" id="test">
      <input type="submit">
  </form>
</body>
</html> -->


<!-- Modal PHP  -->
<?php if ($modal==true) { ?>
 
<script>
$(function() {
$("#myModal").modal();//if you want you can have a timeout to hide the window after x seconds
});
</script>
 
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Sample modal window</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
 
    </div>
  </div>
 
<?php } ?>