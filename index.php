<!DOCTYPE html >
<html dir="rtl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />

   

</head>
<?php
include ('connect.php');

$query = 'SELECT * FROM motors';
$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);


if(isset($_POST["send"])){
$a = $_POST['mo'];
$b = $_POST['mo2'];
$c = $_POST['mo3'];
$d = $_POST['mo4'];
$e = $_POST['mo5'];
$f = $_POST['mo6'];
$query1 ="delete from motors";

mysqli_query($conn , $query1);
    $query ="INSERT INTO motors(motora,motorb, motorc, motord, motore, motorf) VALUES($a,$b,$c,$d,$e,$f)";
    mysqli_query($conn , $query);
    echo"Post Published SuccessFully";
    
$query = 'SELECT * FROM motors';
$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);

}
?><div class="header">
<h1></h1>
</div>
<body>

    <div class="form_wrapper">

        <div class="form_container">

            <div class="title_container">

                <h2>robotics control panel</h2>

            </div>

            <div class="row clearfix">

                <div class="">

                <form action="#" method="POST">

                        <div class="input_field"> Motore1 <i aria-hidden="true" class="fa fa-envelope"></i><span id="m"></span></i>
                            <input type="range" min="1" max="180" value="5" class="slider" name="mo" id="mo">

                        </div>

                        <div class="input_field"> Motore2
                            <i aria-hidden="true" class="fa fa-envelope"></i><span id="m2"></span></i>
                             <input type="range" min="1" max="180" class="slider" name="mo2" id="mo2">

                        </div>

                        <div class="input_field"> Motore3 <i aria-hidden="true" class="fa fa-envelope"></i><span id="m3"></span></i>
                        <input type="range" min="1" max="180" class="slider" name="mo3" id="mo3">

                        </div>

                        <div class="input_field"> Motore4 <i aria-hidden="true" class="fa fa-envelope"></i><span id="m4"></span></i>
                            <input type="range" min="1" max="180" class="slider" name="mo4" id="mo4">
                        </div>

                        <div class="input_field"> Motore5 <i aria-hidden="true" class="fa fa-envelope"></i><span id="m5"></span></i>
                            <input type="range" min="1" max="180" class="slider" name="mo5" id="mo5">
                        </div>
                        <div class="input_field"> Motore6 <i aria-hidden="true" class="fa fa-envelope"></i><span id="m6"></span></i>
                            <input type="range" min="1" max="180" class="slider" name="mo6" id="mo6">
                        </div>





                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field">
                                    <input class="button" type="submit" name="send" value="Submit" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field">
                                    <input class="button" type="submit" name="run" value="Run" />
                                </div>
                            </div>
                        </div>






                    </form>



                </div>
            </div>
        </div>
    </div>

    <script>
     document.getElementById("mo").value = <?php echo $row['motora'];?>;
     document.getElementById("mo2").value = <?php echo $row['motorb'];?>;
      document.getElementById("mo3").value = <?php echo $row['motorc'];?>;
      document.getElementById("mo4").value = <?php echo $row['motord'];?>;
      document.getElementById("mo5").value = <?php echo $row['motore'];?>;
      document.getElementById("mo6").value = <?php echo $row['motorf'];?>;


        var slider = document.getElementById("mo");
        var output1 = document.getElementById("m");
        output1.innerHTML = slider.value;
        var slider2 = document.getElementById("mo2");
        var output2 = document.getElementById("m2");
        output2.innerHTML = slider2.value;

        var slider3 = document.getElementById("mo3");
        var output3 = document.getElementById("m3");
        output3.innerHTML = slider3.value;

        var slider4 = document.getElementById("mo4");
        var output4 = document.getElementById("m4");
        output4.innerHTML = slider4.value;

        var slider5 = document.getElementById("mo5");
        var output5 = document.getElementById("m5");
        output5.innerHTML = slider5.value;

        var slider6 = document.getElementById("mo6");
        var output6 = document.getElementById("m6");
        output6.innerHTML = slider6.value;

        slider.oninput = function() {
            output1.innerHTML = this.value;
        }
        slider2.oninput = function() {
            output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
            output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
            output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
            output5.innerHTML = this.value;
        }
        slider6.oninput = function() {
            output6.innerHTML = this.value;
        }
    </script>
<div class="header">
<p></p>
</div>
</body>

</html>