<?php include('nav.php');?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Student Section</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Student Section</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    This page is an example of using static navigation. By removing the
                                    <code>.sb-nav-fixed</code>
                                    class from the
                                    <code>body</code>
                                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                                </p>
                            </div>
                        </div> -->
                        <form>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stfathername">Fathers Name</label>
                                        <input class="form-control py-4" id="stfathername" type="text" placeholder="Enter Fathers name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stmothername">Mothers Name</label>
                                        <input class="form-control py-4" id="stmothername" type="text" placeholder="Enter Mothers name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stdob">Date Of Birth</label>
                                        <input class="form-control py-4" id="stdob" type="text" placeholder="Enter Fathers name" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stclass">Class</label>
                                        <select class="form-control" id="stclass">
                                            <option>1st</option>
                                            <option>2nd</option>
                                            <option>3rd</option>
                                            <option>4th</option>
                                            <option>5th</option>
                                            <option>6th</option>
                                            <option>7th</option>
                                            <option>8th</option>
                                            <option>9th</option>
                                            <option>10th</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stgender">Gender</label>
                                        <select class="form-control " id="stgender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="staadhaar">Adhaar No.</label>
                                        <input class="form-control py-4" id="staadhaar" type="text"  placeholder="Enter Adhaar No." />
                                    </div>
                                </div>
                            </div>            
                                    <!-- <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stcontact">Mobile No.</label>
                                        <input class="form-control py-4" id="stcontact" type="text" placeholder="Enter Student Contact No." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="ptcontact">Emergency Contact No.</label>
                                        <input class="form-control py-4" id="ptcontact" type="text" placeholder="Enter Parent Contact No." />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="staddress">Address</label>
                                <textarea class="form-control" id="staddress" rows="3"></textarea>
                              </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>  
                        <!-- <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
