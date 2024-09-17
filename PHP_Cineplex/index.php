<?php
    include 'database.php';
    include 'base.php';
echo '
<link rel="icon" type="image/png" href="/PHP_Cineplex2/PHP_Cineplex/images/ak.png">
<title>Cineplex | Home</title>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="s1"></div>
        </div>
        <div class="carousel-item">
            <div class="s2"></div>
        </div>
        <div class="carousel-item">
            <div class="s3"></div>
        </div>
        <div class="carousel-item">
            <div class="s4"></div>
        </div>
        <div class="carousel-item">
            <div class="s5"></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-12">
            <div class="row">
                <div class="col-10 offset-2 m-4">
                    <h1> <marquee> &#9733; Now Showcasing &#9733;</marquee> </h1>
                </div>
            </div>


            <div class="row">';
            $select = 'SELECT * FROM movie';
            $result = mysqli_query($dbcon, $select);
            if($result){
                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        $name = $row['movie_name'];
                        $poster =  $row['movie_post'];
                        
                echo '
                  
                       <div class="col-12 col-md-6 col-lg-4 mb-5">
                          <a href="movies.php?movieid='.$row['movie'].'">
                            <div class="card shadow" style="width: 18rem; margin:0px auto;">
                                <img src="'.$row['movie_post'].'" class="card-img-top" height="350px" alt="Movie">

                             <style>img {
                                --f: 1.15; /* the scale factor */
                                
                                clip-path: inset(0);
                                transition: .4s;
                                cursor: pointer;
                              }
                              img:hover {
                                clip-path: inset(calc((1 - 1/var(--f)) * 50%));
                                scale: var(--f)
                              }
                              
                              body {
                                margin: 0;
                                min-height: 100vh;
                                display: grid;
                                // place-content: center;
                                // grid-auto-flow: column;
                                // gap: 80px;
                                // background: #CFBE27;
                              }
                            </style>                              


                                <div class="card-body">
                                    <h4 class="card-title text-center">'.$row['movie_name'].'</h4>
                                </div>
                            </div>
                        </a>
                    </div>';

                    }

                }
            }
            ?>
                
            </div>
            
        </div>
    </div>
</div>
