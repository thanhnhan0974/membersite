<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<!--    <link rel="stylesheet" href=" --><?php //$this->getCss('style'); ?><!--">-->
    <link rel="stylesheet" href="http://localhost/membersite/public/Css/style.css">
    <link rel="stylesheet" href="http://localhost/membersite/public/Css/header.css">
    <?php $this->view('css.style',['style' => $this->style])  ?>

</head>

<body class="bg_color">

    <?php $this->layout('header'); ?>

    <main >

        <div class="bg_color d-flex container-fluid">

            <?php $this->layout('sidebar'); ?>

            <div class="mt-3 main w-100">
                <div class="w-100 bg_color main-w-right style-scrollbar">

                    <div class="top_m-menu mb-3">
                        <button class="btn txt_color top_m-menu-btn active">TOP</button>
                        <button class="btn txt_color top_m-menu-btn ">男女関係</button>
                        <button class="btn txt_color top_m-menu-btn">お金</button>
                        <button class="btn txt_color top_m-menu-btn">勉強</button>
                        <button class="btn txt_color top_m-menu-btn">男女関係</button>
                        <button class="btn txt_color top_m-menu-btn">お金</button>
                        <button class="btn txt_color top_m-menu-btn">勉強</button>
                        <button class="btn txt_color top_m-menu-btn">お金</button>
                    </div>

                    <?php $this->view($data["Page"]); ?>

                </div>

                <div class="main-w-right">
                <?php $this->layout('footer'); ?>
                </div>

            </div>
        </div>

    </main>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./js/script.js"></script>
    <script src="./js/active.js"></script>
    <script>
        $('.top_m-menu-btn').click(function() {
            $('.top_m-menu-btn').removeClass('active');
            $(this).addClass('active');
        });

        $('.btn-sidebar-toggle').click(function() {
            $('.sidebar').toggleClass('active');
            $('.box-sidebar-container').toggleClass('active');
        })
        $('.box-sidebar-container').click(function(){
            $('.sidebar').toggleClass('active');
            $('.box-sidebar-container').toggleClass('active');
        })

        // $(window).resize(unActiveMenu());
        $( window ).resize(function() {
            unActiveMenu()
        });
        $(window).on('load', unActiveMenu());

        function unActiveMenu() {
            let windowWidth = $(window).width();
            console.log(windowWidth)
            if(windowWidth < 1024) {
                console.log(windowWidth)
                $('.sidebar').removeClass('active');
                $('.box-sidebar-container').removeClass('active');
            }
            else {
                $('.sidebar').addClass('active');
                $('.box-sidebar-container').addClass('active');
            }
        }
    </script>
</body>

</html>