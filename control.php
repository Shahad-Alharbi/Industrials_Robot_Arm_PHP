<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Control</title>
        <style>
            .rectangle {
                height: 50px;
                width: 500px;
                background-color: #6698FF;
            }

            .rectangle2 {
                height: 50px;
                width: 500px;
                background-color: #6698FF;
                position: absolute;
                bottom: 100px;
            }

            .vl1 {
                border-left: 1px solid #6698FF;
                height: 400px;
            }

            .vl2 {
                border-left: 1px solid #6698FF;
                height: 400px;
                position: absolute;
                left:507px;
                top: 50px;
            }         

            #text1 {
                font-size: 13px;
                position: absolute;
                bottom: 460px;
                right: 850px;
            }

            #text2 {
                font-size: 13px;
                position: absolute;
                bottom: 410px;
                right: 850px;
            }

            #text3 {
                font-size: 13px;
                position: absolute;
                bottom: 360px;
                right: 850px;
            }

            #text4 {
                font-size: 13px;
                position: absolute;
                bottom: 310px;
                right: 850px;
            }      

            #text5 {
                font-size: 13px;
                position: absolute;
                bottom: 260px;
                right: 850px;
            }  

            #text6 {
                font-size: 13px;
                position: absolute;
                bottom: 210px;
                right: 850px;
            }  


            .button {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(0, 0, 0);
                background-color: #d2d3d36e;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 170px;
                right: 960px;
            }

            .button:hover {background-color: #6699ff65}

            .button:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }

            .button2 {
                padding: 3px 16px;
                font-size: 15px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: rgb(0, 0, 0);
                background-color: #d2d3d36e;;
                border: none;
                border-radius: 15px;
                box-shadow: 0 2px rgb(114, 114, 114);
                position: absolute;
                bottom: 170px;
                right: 1060px;
            }

            .button2:hover {background-color: #6699ff65}

            .button2:active {
                background-color: #d2d3d36e;;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }



            .slidecontainer {
                width: 50%;
            }

            .slider {
                -webkit-appearance: none;
                width: 18%;
                height: 5px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
                -webkit-transition: .2s;
                transition: opacity .2s;
                position: absolute;
                bottom: 480px;
                right: 920px;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 10px;
                height: 8px;
                background: #6698FF;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 8px;
                height: 8px;
                background: #6698FF;
                cursor: pointer;
            }



            .slider2 {
                position: absolute;
                bottom: 430px;
                right: 920px;

            }

            .slider3 {
                position: absolute;
                bottom: 380px;
                right: 920px;

            }

            .slider4 {
                position: absolute;
                bottom: 330px;
                right: 920px;

            }

            .slider5 {
                position: absolute;
                bottom: 280px;
                right: 920px;

            }

            .slider6 {
                position: absolute;
                bottom: 230px;
                right: 920px;

            }

            #demo{  
                position: absolute;
                bottom: 476px;
                right: 1160px;
                opacity: 0.7; 
            }

            #demo2{  
                position: absolute;
                bottom: 426px;
                right: 1160px;
                opacity: 0.7; 
            }

            #demo3{  
                position: absolute;
                bottom: 376px;
                right: 1160px;
                opacity: 0.7; 
            }

            #demo4{  
                position: absolute;
                bottom: 326px;
                right: 1160px;
                opacity: 0.7; 
            }

            #demo5{  
                position: absolute;
                bottom: 276px;
                right: 1160px;
                opacity: 0.7; 
            }

            #demo6{  
                position: absolute;
                bottom: 226px;
                right: 1160px;
                opacity: 0.7; 
            }
        </style>
    </head>
    
    
    <body>
        <div class="rectangle"></div>
        <div class="rectangle2"></div>
        <div class="vl1"></div>
        <div class="vl2"></div>
        <div id="text1"><h2><b>1 محرك</b></h2></div>
        <div id="text2"><h2><b>2 محرك</b></h2></div>
        <div id="text3"><h2><b>3 محرك</b></h2></div>
        <div id="text4"><h2><b>4 محرك</b></h2></div>
        <div id="text5"><h2><b>5 محرك</b></h2></div>
        <div id="text6"><h2><b>6 محرك</b></h2></div>       

        <form action="control.php" method="post">
            <div><button class="button2" name="Running"><b>تشغيل</b></button></div>
        </form>

        <form action="control.php" method="post">

            <div><button class="button"><b> تحفظ</b></button></div>        
            <div class="slidecontainer">

                <input type="range" min="0" max="100" value="0" class="slider" id="myRange" name="Motor1">
                <span id="demo"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider2" id="myRange2" name="Motor2">
                <span id="demo2"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider3" id="myRange3" name="Motor3">
                <span id="demo3"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider4" id="myRange4" name="Motor4">
                <span id="demo4"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider5" id="myRange5" name="Motor5">
                <span id="demo5"></span>

                <input type="range" min="0" max="100" value="0" class="slider slider6" id="myRange6" name="Motor6">
                <span id="demo6"></span>
            </div>
            
            <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
                output.innerHTML = slider.value;

                slider.oninput = function () {
                    output.innerHTML = this.value;
                }


                var slider2 = document.getElementById("myRange2");
                var output2 = document.getElementById("demo2");
                output2.innerHTML = slider.value;

                slider2.oninput = function () {
                    output2.innerHTML = this.value;
                }


                var slider3 = document.getElementById("myRange3");
                var output3 = document.getElementById("demo3");
                output3.innerHTML = slider.value;

                slider3.oninput = function () {
                    output3.innerHTML = this.value;
                }


                var slider4 = document.getElementById("myRange4");
                var output4 = document.getElementById("demo4");
                output4.innerHTML = slider.value;

                slider4.oninput = function () {
                    output4.innerHTML = this.value;
                }


                var slider5 = document.getElementById("myRange5");
                var output5 = document.getElementById("demo5");
                output5.innerHTML = slider.value;

                slider5.oninput = function () {
                    output5.innerHTML = this.value;
                }

                var slider6 = document.getElementById("myRange6");
                var output6 = document.getElementById("demo6");
                output6.innerHTML = slider.value;

                slider6.oninput = function () {
                    output6.innerHTML = this.value;
                }
            </script>
        </form>


        <?php
        // put your code here        
        //Server name, Username, Password, Database name
        $connection = new mysqli("localhost", "root", "fcit", "control");
        $stmt = $connection->prepare("insert into control(Motor1, Motor2, Motor3, Motor4, Motor5, Motor6, Running) values(?,?,?,?,?,?,0);");
        $stmt->bind_param("iiiiii", $_POST["Motor1"], $_POST["Motor2"], $_POST["Motor3"], $_POST["Motor4"], $_POST["Motor5"], $_POST["Motor6"]);
        $stmt->execute();
        ?>         


        <?php
        // put your code here
        //Server name, Username, Password, Database name
        $connection = new mysqli("localhost", "root", "fcit", "control");
        if (isset($_POST["Running"])) {
            $stmt = $connection->prepare("UPDATE control SET Running= 1 ORDER BY Id DESC LIMIT 1");
            $stmt->execute();
        }
        ?>

    </body>
</html>
