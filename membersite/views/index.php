<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href=" <?php $this->getCss('style'); ?>">
    <link rel="stylesheet" href=" <?php $this->getCss('header'); ?>">

</head>

<body class="bgcl-dark ">

    <?php $this->layout('header'); ?>

    <main >

        <div class="bgcl-dark d-flex container-fluid">

            <?php $this->layout('sidebar'); ?>

            <footer class="mb-3">
                <div class="w-100 bgcl-dark main-w-right style-scrollbar">

                <div class="top_m-menu mb-3">
                    <button class="btn top_m-menu-btn active">TOP</button>
                    <button class="btn top_m-menu-btn ">男女関係</button>
                    <button class="btn top_m-menu-btn">お金</button>
                    <button class="btn top_m-menu-btn">勉強</button>
                    <button class="btn top_m-menu-btn">男女関係</button>
                    <button class="btn top_m-menu-btn">お金</button>
                    <button class="btn top_m-menu-btn">勉強</button>
                    <button class="btn top_m-menu-btn">お金</button>
                </div>

                <div class="row box_v" id="">
                    <div class="box_v-header mb-3">
                        <h3 class="box_v-title"><i class="fa-solid fa-clock-rotate-left"></i> 過去の人気</h3>
                        <button class="btn_border"><i class="fa-solid fa-caret-right"></i> &nbsp; もっとみる</button>
                    </div>
                    <hr class="hr-light">
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリス </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row box_v" id="">
                    <div class="box_v-header mb-3">
                        <h3 class="box_v-title"><i class="fa-solid fa-clock-rotate-left"></i> 過去の人気動画</h3>
                    </div>
                    <hr class="hr-light">
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリス </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-6 box_v-card mb-3">
                        <a class="box_v-card-main" href="#">
                            <img src="public/Image/image.jpg" class="box_v-card-image" alt="...">
                            <div class="box_v-card-body">
                                <h5 class="box_v-card-title text-split-2">【FBIの質問力】テロリストの心すら変える聞き方 </h5>
                                <span class="box_v-card-star">
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown box_v-card-btn">
                            <button class="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">新しいタブで再生</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="hr-light mb-3">

                <?php $this->layout('footer'); ?>

            </div>
            </footer>

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
    </script>
</body>

</html>