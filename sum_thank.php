<?php 


$servername = "localhost";
$username = "ccstrans_thank";
$password = "nuy037964";
$dbname = "ccstrans_thank";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ccstrans_thank  ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ร่วมส่งกำลังใจให้กับบุคลากรทางการเเพทย์</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
    
   

</head>

<style>
    
</style>


<body>
<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
            <li ><a href="index.php">หน้าเเรก</a></li>
            <li><a href="about.html">เกี่ยวกับ</a></li>
            <li class="has-children">
            <a href="#">บทความ</a>
              <ul class="dropdown">
              <li><a href="article1.html">รู้จักอาการ Covid-19</a></li>
                <li><a href="article2.html">วิธีการใช้หน้ากากอนามัย</a></li>
              </ul>
            </li>
            <li class="active"><a href="sum_thank.php">รวมคำขอบคุณ</a></li>
            <li><a href="index.php#conent">ส่งกำลังใจ</a></li>
            <li class="active"><a href="form.html">เเบบประเมิน</a></li>
          </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light text-uppercase font-weight-bold">รวมคำขอบคุณ</h1>
              <p class="breadcrumb-custom"><a href="index.php">หน้าเเรก</a> <span class="mx-2">&gt;</span> <span>รวมคำขอบคุณ</span></p>
            </div>
          </div>
        </div>
      </div>  

  <div class="form-send" id="conent">
  <div class="row mb-5">
            
            
        <div class="container">
        
          
          <br><br>
      
          
            <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center border-primary">
              <h2 class="mb-0 text-primary">ร่วมส่งกำลังใจให้กับบุคลากรทางการเเพทย์</h2>
              <p class="color-black-opacity-5"><br>&nbsp;&nbsp;&nbsp;&nbsp;โครงการนี้เป็นโครงการเล็ก ๆ โครงการหนึ่งจากนักศึกษาในรายวิชา 080303601 มนุษยสัมพันธ์ สาขา คอมพิวเตอร์ช่วยออกเเบบเเละบริหารงานก่อสร้าง คณะ เทคโนโลบีเเละการจัดการอุตสาหกรรม มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ วิทยาเขตปราจีนบุรี
      ซึ่งจัดขึ้นเพื่อมอบขวัญเเละกำลังใจในการทำงานแก่บุคลากรทางการเเพทย์ทุกท่าน 
      ได้ผ่านพ้นวิกฤตโรคระบาด COVID-19 ที่ยากลำบากนี้ไปด้วยกัน
       พวกเราขอเป็นอีกหนึ่งช่องทางเพื่อมอบคำขอบคุณให้แก่บุคลากรทางการเเพทย์ทุกท่าน ที่ทำงานกันอย่างหนัก
      เพื่อช่วยเหลือประชาชนคนไทย</p>
            </div>
          </div>
        <div class="card">
          
      
      <div class="card-body">
        <table class="display table table-hover" style="width:100%">

            <thead>
                <tr>
                <th>ลำดับ</th>
                    <th>ว/ด/ป</th>
                    <th>ข้อความ</th>
                    <th>Like</th>
                    
                </tr>
            </thead>
            <tbody>
              
            <?php 
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {  ?>
                  <tr>
                  <?php $row["id"];?>
                  <td><?php echo $row["id"];?></td>
                      <td><?php echo $row["date-thank"];?></td>
                      <td><?php echo $row["text_thank"];?></td>
                      
                      <td>
                      
                      <button class="btn btn-danger like-btn"  
                      thnak_id = "<?php echo $row["id"];?>" id="like-btn">
                      <i class="far fa-heart"></i> 
                      <?php echo $row['like_thank']?>Like</button>
                    
                      </td>
                  </tr>
                  <?php  
                }
            }?>
            </tbody>
            <tfoot>
                <tr>
                <th>ลำดับ</th>
                    <th>ว/ด/ป</th>
                    <th>ข้อความ</th>
                    <th>Like</th>
                    
                </tr>
            </tfoot>
        </table>
      </div> 
      
    </div>
            
      

        </div>
  </div>
  <footer class="site-footer">
        <div class="container">
        
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | CA @FITM KMUTNB<i class="icon-heart" aria-hidden="true"></i> 
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>
            
          </div>
        </div>
  </footer>
  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- DataTables -->
  <!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script>

    $(document).ready(function() {
      var table = $('table.display').DataTable({
        // "lengthChange": false,
        // "responsive": true,
        // "autoWidth": false,
        "ordering": true,
        "order": [[0, "desc"]],
      });
    });

$(document).ready(function(){

      // กรณี กดปุ่ม like
      $(document).on('click','.like-btn',function(e) {
          var id_like = $(this).attr("thnak_id");
          console.log("ID : " + id_like  );
          $.ajax({
              url: 'like.php',    
              type: 'POST' ,
              data:{like_id:id_like}  , 
              dataType: 'json',       // โยนสูตร id ไปครับ
              success:function(data){
                  if(data.status == 1){
                  //Success Message == 'Title', 'Message body', Last one leave as it is
                  swal({title: "Like +1", text: "คุณได้กดถูกใจบทความเเล้ว!", type: "success"})
                  .then(function(){ location.reload();});
                      
                  }
              }
          });
      });

    });
    
  </script>

  <script >
    $(window).on("load",function() {
      $(window).scroll(function() {
        var windowBottom = $(this).scrollTop() + $(this).innerHeight();
        $(".fade").each(function() {
          /* Check the location of each desired element */
          var objectBottom = $(this).offset().top + $(this).outerHeight();
          
          /* If the element is completely within bounds of the window, fade it in */
          if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
          } else { //object goes out of view (scrolling up)
            if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
          }
        });
      }).scroll(); //invoke scroll-handler on page-load
    });
  </script>

</body>
</html>
