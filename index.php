<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Văn Khánh Vương"/>
    <link href="/Lab01/site.css" rel="stylesheet"/>
    <title>Xếp loài kết quả tuyển sinh</title>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">           <!--Trang đích là trang hiện tại và phương thức POST-->
        
        <!-- Môn toán -->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Toán </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ?
                    $_POST["Toan"] : "" ; ?>" />
                </div>
            </div>

            <!-- Môn Lý -->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Lý </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"]) ?
                    $_POST["Ly"] : "" ; ?>" />
                </div>
            </div>

            <!-- Môn Hóa -->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Hóa </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ?
                    $_POST["Hoa"] : "" ; ?>" />
                </div>
            </div>

            <!-- Nút gửi form -->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại"/>
                </div>
            </div>
        </form>
        <div id="result">

            <!--Xếp loại-->
            <h2>Kết quả xếp loại</h2>
            <div class="row">
                <div class="lbltitle">
                    <label>Tổng kết:</label>
                </div>
                <div class="lbloutput">
                    <?php
                        echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"]
                        : "" ;
                    ?>
                </div>
            </div>

            <!--Xếp loại-->
            <div class="row">
                <div class="lbltitle">
                    <label>Xếp loại</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if(isset($_POST["btnsubmit"])){
                            $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            if($TongDiem >= 24)
                                echo "Giỏi";
                            elseif($TongDiem >= 21)
                                echo "Khá";
                            elseif($TongDiem >= 15)
                                echo "Trung Bình";
                            else{
                                echo "Yếu";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>       
</body>
</html>
