<!DOCTYPE htms>
<htms lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>

    <?php

        $this->load->view('website/link_import'); 
    ?>


        <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-signup.css">
        <link rel="stylesheet" href="<?=base_url();?>/assets/css/style-signup-form.css">
</head>
<body>
    <!-- navbar -->
<?php

        $this->load->view('website/nav_bar');
    ?>
    <!-- Navbar End -->

    <div class="container-custom">
        <div class="content color-light">
            <div class="page-wrap">

                <!-- page-1 -->
                <div class="page" id="page-0">
                    <div class="page-title d-flex flex-column flex-md-row align-items-center align-items-md-start">
                        <img src="<?=base_url();?>assets/images/personal-information.svg" class="me-5" width="64px" alt="personal-information-icon">
                        <span class="d-flex flex-column align-items-center">
                            <h1>Personal Information</h1>
                            <h6 class="fw-light text-center">Fill the following personal information & click on Next.</h6>
                        </span>
                    </div>
                    <div class="page-content">
                        <form action="">

                            <!-- name-field -->
                            <div class="mt-3 mt-md-5">
                                <h4>Name</h4>
                                <div class="row">
                                    <div class="input-wrap col-12 col-md-4">
                                        <input class="input-field" type="text" name="First_Name" placeholder="First Name" id="first_name">
                                    </div>
                                    <div class="input-wrap col-12 col-md-4 mt-2 mt-md-0">
                                        <input class="input-field col-12 col-md-2" type="text" name="Middle_Name" placeholder="Middle Name" id="middle_name">
                                    </div>
                                    <div class="input-wrap col-12 col-md-4 mt-2 mt-md-0">
                                        <input class="input-field col-12 col-md-2" type="text" name="Last_Name" placeholder="Last Name" id="last_name">             
                                    </div>
                                </div>
                            </div>

                            <!-- dob & gender-field -->

                            <div class="row mt-4">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Date of Birth</h4>
                                    <input class="input-field" type="date" name="First_Name" placeholder="First Name" id="dob">
                                </div>
    
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Gender</h4>
                                    <div class="input-field d-flex">
                                        <select class="select-custom" name="" id="gender">
                                            <option value="">Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                            <option value="o">Others</option>
                                        </select>
                                    </div>   
                                </div>
                            </div>

                            <!-- <div class="row mt-4">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Date of Birth</h4>
                                    <input class="input-field" type="date" name="First_Name" placeholder="Date of Birth" id="dob">
                                </div>
    
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Gender</h4>
                                    <div class="input-field d-flex">
                                        <select class="select-custom" name="" id="gender">
                                            <option value="">Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                            <option value="o">Others</option>
                                        </select>
                                    </div>   
                                </div>
                            </div> -->

                            <!-- photo-field -->
                            <div class="input-wrap mt-4">
                                <h4>Photo</h4>
                                <input type="file" class="image-upload">
                            </div>
                        </form>
                    </div>
                    <div class="nav-bar">
                        <button class="right" onclick="next_page()" id="next1">Next</button>
                    </div>
                </div>

                <!-- page 2 -->
                <div class="page page-1" id="page-1"><b>Page 2</b>
                    <div class="page-title d-flex flex-row align-items-start">
                        <img src="./assets/images/personal-information.svg" class="me-5" width="64px" alt="personal-information-icon">
                        <span class="">
                            <h1>Personal Information</h1>
                            <h6 class="fw-light">Fill the following personal information & click on Next.</h6>
                        </span>
                    </div>
                    <div class="page-content">
                        <form action="">
                            <!-- registration roll room -->
                            <div class="row mt-5">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Registration No.</h4>
                                    <input class="input-field" type="number" name="reg_no" placeholder="University Registration No." id="">
                                </div>
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Roll No.</h4>
                                    <input class="input-field" type="number" name="roll_no" placeholder="College Roll No." id="">
                                </div>
                            </div>
                            <!-- dob & gender-field -->
                            <div class="row mt-4 info-set-1">
                                <div class="input-wrap col-12 col-md-6">
                                    <h4>University</h4>
                                    <input class="input-field" type="text" name="uni_name" placeholder="Name of University" id="">
                                </div>
                                <div class="input-wrap col-12 col-md-6">
                                    <h4>College</h4>
                                    <input class="input-field" type="text" name="college_name" placeholder="Name of College" id="">
                                </div>
                            </div>
                            <!-- branch course -->
                            <div class="row mt-4">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Course</h4>
                                    <div class="input-field d-flex">
                                        <select class="select-custom" name="" id="">
                                            <option value="">B.Tech</option>
                                            <option value="">M.Tech</option>
                                            <option value="">MBA</option>
                                        </select>
                                    </div>                                
                                </div>
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Branch</h4>
                                    <div class="input-field d-flex">
                                        <select class="select-custom" name="" id="">
                                            <option value="">Computer Science & Engineering</option>
                                            <option value="">Mechanical Engineering</option>
                                            <option value="">MBA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- hostel room -->
                            <div class="row mt-4">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Hostel No.</h4>
                                    <input class="input-field" type="number" name="hostel_no" placeholder="Hostel No." id="">
                                </div>
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Room No.</h4>
                                    <input class="input-field" type="number" name="room_no" placeholder="Room No." id="">
                                </div>
                            </div>   
                        </form>
                    </div>
                    <div class="nav-bar">
                        <div class="left" id="prev2" onclick="prev_page()">Previous</div>
                        <div class="right" id="next2" onclick="next_page()">Next</div>
                    </div>
                </div> 
                
                <!-- page-3 -->
                <div class="page" id="page-2"><b>Page 3</b>
                    <div class="page-content">
                        <form action="">
                            <!-- registration roll room -->
                            <div class="row mt-5">
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Phone No.</h4>
                                    <input class="input-field" type="number" name="phone_no" placeholder="Phone No." id="">
                                </div>
                                <div class="input-wrap col-12 col-md-4">
                                    <h4>Alternate Phone No.</h4>
                                    <input class="input-field" type="number" name="alt_phone_no" placeholder="Alternate Phone No." id="">
                                </div>
                            </div>
                            <!-- dob & gender-field -->
                            <div class="row mt-4">
                                <div class="input-wrap  info-set-2">
                                    <h4>Address</h4>
                                    <input class="input-field" type="text" name="address_line_1" placeholder="Street/Locality" id="">
                                    <input class="input-field mt-2" type="text" name="address_line_1" placeholder="Street/Locality" id="">
                                </div>
                                <div class="row mt-2">
                                    <div class="input-wrap col-12 col-md-4">
                                        <input class="input-field" type="text" name="city" placeholder="City" id="">
                                    </div>
                                    <div class="input-wrap col-12 col-md-4">
                                        <input class="input-field" type="text" name="state" placeholder="State" id="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="nav-bar">
                        <div class="left" id="prev3" onclick="prev_page()">Previous</div>
                        <div class="right"><button id="btn">Submit</button></i></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>assets/js/script-slider-form.js"></script>

<script type="text/javascript">
    
    var first_name;
    var middle_name;
    var last_name;
    var dob;
    var gender;

    function page1_data(){
        first_name=$("#first_name").val();
        middle_name=$("#middle_name").val();
        last_name=$("#last_name").val();
        // var dob_ob=new Date($("#dob").val());
        // dob_d=dob_ob.getDate();
        // dob_m=dob_ob.getMonth()+1;
        // dob_y=dob_ob.getFullYear();
        // dob=[dob_d,dob_m,dob_y].join('/');

        dob=$("#dob").val();
        
        gender=$("#gender").val();

    }

    $("#next1").click(function() {
        // next_page();
        page1_data();
        console.log("name: "+first_name+" "+middle_name+" "+last_name+" | dob: "+dob+" | gender: "+gender);

    });

    function check_page1_data(){
        if(first_name==""||dob==""||gender==""){
            $("#next1").attr('disabled', '');
        }else{
            $("#next1").removeAttr('disabled');
        }
    }


</script>

</body>
</html>
