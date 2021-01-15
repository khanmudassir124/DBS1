<?php include('nav.php');?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Register Section</h1>
                        <ol class="breadcrumb mb-4" id="regsection">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">
                                        <select id="regsec" onchange="regsec(this.value);">
                                            <option value="1" selected>Students/Parents</option>
                                            <option value="2">Staff/Teachers</option>
                                          </select>
                                        </li>
                        </ol>
                        <script>
                            function regsec(regsecvalue){
                            if(regsecvalue == 1){
                                $("#stusec").show();
                                $("#staffsec").hide();
                            }
                            else{
                                $("#stusec").hide();
                                $("#staffsec").show();
                            }
                            };
                        </script>
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
                        <div id="stusec"> <?php include('stusec.php');?> </div>
                        <div id="staffsec"><?php include('staffsec.php');?> </div>
                        <!-- <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div> -->
                    </div>
                </main>
                <?php include('footer.php');?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>
