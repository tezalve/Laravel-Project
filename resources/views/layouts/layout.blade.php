<!doctype html>
<html>
    <head>

        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <script type="text/javascript" src="/js/myscripts.js"></script>

        <body>  
            <div class = "container">
                <div class = "row rowpad text-center">
                    <div class = "col-sm-4">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" onclick="closeNav()">Close Menu</a>
                            <a href="#">Gadget</a>
                            <a href="#">About</a>
                        </div>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>

                    <div class = "col-sm-4 content">
                        My Gadgets
                    </div>

                    <div class = "col-sm-4">
                        <button class = "btn btn-dark">Mail</button>
                    </div>
                </div>
            </div>
        @yield('content')

            <div class = "container">
                <div class="row text-center">
                    <div class = "col-sm-4 rowpadsm">
                        <p class = "footertitle">
                            Footer
                        </p>
                        <p style="font-size: 15px">
                            Copyright 2020 My Gadgets
                        </p>
                        <p>
                            Powered By <a href="">Something greater</a> 
                        </p>
                    </div>

                    <div class = "col-sm-4 rowpadsm">
                        <p class = "footertitle">
                            Blog Posts
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/food.jpg" alt="food" class="imgmax"> 
                                <div>food</div>  
                                
                            </div>
                            <div class="col-sm-6">
                                <img src="img/furniture.jpg" alt="furniture" class="imgmax">
                                <div>furniture</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class = "col-sm-4 rowpadsm">
                        <p class = "footertitle">
                            Popular tags
                        <div class = "tag">
                            <a href="">here</a>
                            <a href="">there</a>
                            <a href="">somewhere</a>
                            <a href="">whattodo</a>
                            <a href="">wheretogo</a>
                            <a href="">dontknow</a>
                            <a href="">sheesh</a>
                            <a href="">hmm</a>
                            <a href="">more?</a>
                            <a href="">okay</a>
                            <a href="">outofwords</a>
                            <a href="">okaydone!</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </head>
</html>