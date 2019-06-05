<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
    <?php 	
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
	 ?>

    <!--Navbar-->

    <nav class="navbar navbar-expand-lg navbar-light shadow bg-white position-fixed fixed-top">
        <div class="col-8 mx-auto">
            <div class="row">
                
                <div class="col-2 mr-auto">
                    <img src="images/2.png" class="w-100">
                </div>
                <div class="mx-auto col-2">

                </div>
                <div class="col-2 ml-auto">

                </div>
            </div>
        </div>
    </nav>

    <!--main-->

    <div class="container my-5 pt-3">

        <!--left-->

        <div class="col-8 mx-auto">
            <div class="col-8 main-left rounded">
                <?php 
                    $query = mysqli_query($connect, 'SELECT * FROM insta_lenta INNER JOIN instagram ON insta_lenta.user_id = instagram.id');
                    for($i=0;$i<$query->num_rows;$i++){
                 ?>
                <div class="mt-3 border bg-white">
                    <?php 
						$res = $query->fetch_assoc();
					 ?>
                    <div class="col-2 p-3 main-header h-25">
                        <img src="
                            <?php 
                                echo $res['ava'];
                            ?>
                        " class="rounded-circle h-25 w-100">
                        <span class="font-weight-bold">
                            <?php
                                echo $res['nickname'];
                            ?>
                        </span>
                    </div>
                    <div class="mt-2">
                        <img src="
							<?php 
								echo $res['image'];
						      ?>
						" class="w-100">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/comment.png" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="images/retweet.png" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="images/like.png" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="images/envelope.png" alt="">
                                </div>
                            </div>
                            <div class="">
                                <span class="mr-2">
                                    <?php
                                        echo $res['nickname'];
                                    ?>
                                </span>
                                <span class="mr-2 text-black-50">
                                    <?php
                                        echo $res['name'];
                                    ?>
                                </span>
                                <span>
                                    <?php
                                        echo $res['main_text'];
                                    ?>
                                </span>
                            </div>
                        </div>
                        
                    </div>
                        
                </div>
                <?php 
                    }
                ?>

            </div>

            <!--right-->
            <?php
                $query = mysqli_query($connect, 
                    "
                    SELECT * FROM instagram
                    WHERE nickname = '" . $_GET['nickname'] . "'
                    ");
                $res = $query->fetch_assoc();
             ?>
            <div class="col-2 ml-3 main-right position-fixed">
                <form action="change_personal_page.php" method="GET">
                    <div class="row ml-1 personal_page">
                        <input type="hidden" name="nickname" <?php echo 'value="' . $_GET['nickname'] . '"'; ?>>
                        <div class="col-3 p-2">
                            <?php 
                                echo '<img src="' . $res['ava'] . '" class="rounded-circle border w-100">';
                            ?>
                        </div>
                        <div class="col-8 pt-2">
                            <span class="weight-500">
                                <?php
                                    echo $res['nickname'];
                                ?> 
                            </span>
                            <span class="text-black-50">
                                <?php
                                    echo $res['name'];
                                ?>
                            </span>
                        </div>
                    </div>
                </form>
                <div class="bg-white border p-3">
                    <form action="post.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="text" class="w-100 p-2 form-control mb-2 bg-light">
                        <input type="file" name="image" class="w-100 p-2 form-control mb-2 bg-light">
                        <?php 
                            echo '<input type="hidden" name="id" value="' . $res['id'] . '">' . '<input type="hidden" name="nickname" value="' . $res['nickname'] . '">';
                        ?>
                        <button class="btn btn-success">Запостить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let mainR = document.querySelector('.main-right');
        let mainL = document.querySelector('.main-left');
        mainR.style.left = mainL.getBoundingClientRect().right + 30 + 'px';
        let personal_page = document.querySelector('.personal_page');
        personal_page
        let form_pers_page = document.forms[0]
        personal_page.onclick = function(){
            form_pers_page.submit();
        }
    </script>
</body>

</html>
