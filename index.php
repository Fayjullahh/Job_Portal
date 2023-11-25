<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles/index1.css">
    <link rel="stylesheet" href="styles/style1.css">
    <link rel="stylesheet" href="styles/homepage1.css">
</head>
<body>
    <div class="container">
        <div class="shadow">
        <div class="backgroundImage">
        <div class="main-container">
            <!-- Header section -->
            <div class="header">
                <!-- logo Section start -->
                <div class="logo-section">
                    <div class="while-logo">
                        <img src="Images/while-logo.png" alt="">
                    </div>
                    <div class="Seekers"><p>Seekers</p></div>
                </div>
                <!-- End logo section  -->
                <!-- Start navbar Section  -->
                <div class="navbar">
                    <div class="cv-link"><a href="resumeIndex.html">CV Builder</a></div>
                    <div class="market-link"><a href="#">Marketplace</a></div>
                    <div class="job-link"><a href="#">Job</a></div>
                    <div class="companies-link"><a href="#">Companies</a></div>
                    <div class="contact-link"><a href="#">Contact</a></div>
                </div>
                <!-- End navbar Section  -->
                <!-- start login section  -->
                <div class="login-section">
                    <div class="lgn">
                        <a href="Signup.html">Log In</a>
                    </div>
                    <div class="btn">
                        <Button class="btn">
                            Get Started
                        </Button>
                    </div>
                </div>
                <!-- end login section  -->
            </div>
            <!-- Start main-content  -->
            <div class="main-content">
                <div class="inner_container">
                    <div class="cv_builder">
                      <div class="new_cv">
                        <p class="text">New</p>
                      </div>
                      <div class="cv_link1">
                        <a href="resumeIndex.html">Added new resume builder</a>
                      </div>
                      <div class="right_arrow">
                          <img src="public/external/chevron-right.svg" alt="">
                      </div>
                    </div>
                    <div class="heading-1">
                      <h1>
                        Connecting <span class="dsgn1">Dreams</span> <span class="dsgn2">to</span>
                        <span class="dsgn3">Opportunities</span>
                    </h1>
                    <h1>Your Job, Your Way.</h1>
                    </div>
                    <div class="simple-para">
                      <p>
                        Here at flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
                      </p>
                    </div>
                    <div class="search-bar">
                        <div class="search-content1">
                            <div class="search-icon1">
                                <img src="Images/Bg.png" alt="" width="">
                            </div>
                            <div class="search-icon2">
                                <img src="public/external/search.svg" alt="">
                            </div>
                            <div class="keyword">
                                <form action="https://example.com/submit" method="POST">
                                    <input type="text" name="keyword" placeholder="Job title or Keyword">
                                </form>
                               
                            </div>
                        </div>
                        <div class="search-content2">
                            <div class="location-logo">
                                <img src="Images/Button/vuesax/linear/location.png" alt="">
                            </div>
                            <div class="any-location">
                                <select name="" id="">
                                    <option value="Any_Location">Any Location</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                        </div>
                        
                        

                    </div>
                </div>
            </div>

        <!-- End main content  -->
       
            <div class="company-by-industry">
                <div class="company-by-industry-heading">
                    <h2>Browse companies by industry</h2>
                </div>
                <?php
                    $conn = mysqli_connect("localhost","root","","JobPortal")     or die("Connection lost");
                    $sql = "SELECT 	industryLogo,industryName FROM companybyindustry ";
                    $result = mysqli_query($conn,$sql) or die("Unsuccessfull");
                    if(mysqli_num_rows($result)>0){  
                ?>
                <div class="company-by-industry-section">
                    <?php
                        while($row=mysqli_fetch_assoc($result)) {  
                    ?>
                    <div class="green-div">
                        <div class="red-div">
                            <img src="<?php echo $row["industryLogo"]?>" alt="">
                        </div>
                        <div class="yellow-div">
                            <h3> <a href="#"><?php echo $row["industryName"]?></a></h3>
                        </div>
                    </div>
                    <?php }?>
                    <?php } else{
                        echo "No record found";
                    } 
                    mysqli_close($conn);
                    ?>
                     
                </div>
               
                
                <div class="company-by-industry-list">
                    <a href="#">See All Industries</a>
                </div>

            </div>
            <div class="popular-companies-section">
                <div class="popular-companies-section-heading">
                    <h2>Popular Companies</h2>
                </div>
                <div class="popular-companies-section-body">
                    <?php 
                        $conn2=mysqli_connect("localhost","root","","JobPortal") or die("connection failed");
                        $sql2 = "SELECT 	companyImage,companyName,companyRating,companyRating,companyReview FROM  popularcompany ORDER BY companyRating DESC ";
                        $result2 = mysqli_query($conn2,$sql2) or die("Unsuccessfull");
                        if(mysqli_num_rows($result2)>0){
                    ?>
                    <?php 
                        while($row2=mysqli_fetch_assoc($result2)){
                    ?>
                    <div class="popular-company-card">
                        <div class="popular-company-card-innerBox-1">
                            <div clas="popular-company-image">
                                <img class="imge" src="<?php echo $row2["companyImage"]?>" alt="">
                            </div>
                            <div class="popular-company-name-and-other">
                                <div class="popular-company-name-and-other-heading">
                                    <h3><?php echo $row2["companyName"]?></h3>
                                </div>
                                <div class="popular-company-review-and-rating">
                                    <div class="popular-company-rating">
                                    <?php echo $row2["companyRating"]?> star
                                    </div>
                                    <div class="popular-company-review">
                                        <a href="#"><?php echo $row2["companyReview"]?> Reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-company-card-innerBox-2">
                            <a href="#">Salaries</a>
                            <a href="#">Q&A</a>
                            <a href="#">Open Job</a>
                        </div>
                    </div>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>