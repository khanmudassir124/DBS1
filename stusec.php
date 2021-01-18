<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#addresscheck").on("click", function(){
         if (this.checked) { 
                $("#stupaddress").val($("#stuaddress").val());                         
    }
    else {
        $("#stupaddress").val();         
    }
    });
    // if (isset($_POST['#studsecbtn'])) { 
    $('#studsecbtn').click(function(e) {
      e.preventDefault();
      var sname = $('#sname').val();
      var stfathername = $('#stfathername').val();
      var stmothername = $('#stmothername').val();
      var stdob = $('#stdob').val();
      var stclass = $('#stclass').val();
      var stgender = $('#stgender').val();
      var stustatus = $('#stustatus').val();
      var stuadno = $('#stuadno').val();
      var stuayear = $('#stuayear').val();
      var stareapincode = $('#stareapincode').val();
      var stureligion = $('#stureligion').val();
      var stuemail = $('#stuemail').val();
      var stupassword = $('#stupassword').val();
      var stupemail = $('#stupemail').val();
      var stuppassword = $('#stuppassword').val();
      var stucontact = $('#stucontact').val();
      var stuptcontact = $('#stuptcontact').val();
      var stuaddress = $('#stuaddress').val();
      var stupaddress = $('#stupaddress').val();
      var stuimage = $('#stuimage').val();
      var stusign = $('#stusign').val();
      var stupimage = $('#stupimage').val();
      var stupsign = $('#stupsign').val();
      $.ajax({
          type: 'POST',
          url: "studentformreg.php",
          data: { 
              "sname": sname , 
              "stfathername" : stfathername, 
              "stmothername" : stmothername, 
              "stdob" : stdob, 
              "stclass" : stclass, 
              "stgender" : stgender, 
              "stustatus" : stustatus, 
              "stuadno" : stuadno, 
              "stuayear" : stuayear, 
              "stareapincode" : stareapincode, 
              "stureligion" : stureligion, 
              "stuemail" : stuemail, 
              "stupassword" : stupassword, 
              "stupemail" : stupemail, 
              "stuppassword" : stuppassword, 
              "stucontact" : stucontact, 
              "stuptcontact" : stuptcontact, 
              "stuaddress" : stuaddress, 
              "stupaddress" : stupaddress, 
              "stuimage" : stuimage, 
              "stusign" : stusign, 
              "stupimage" : stupimage, 
              "stupsign" : stupsign 
            },
          success: function(data){
            $('#studsecalert').show(data);
            $('#studsecalert').append(" " + data);
            // if(data.success == true){ // if true (1)
            //     setTimeout(function(){// wait for 5 secs(2)
            //         location.reload(); // then reload the page.(3)
            //     }, 500); 
            // }
            // $('#studentsection')[0].reset();
            // document.getElementById('studentsection').reset();
            // $('#studentsection').reload();
          }
        });
    });
    // if($('#addresscheck').is(':checked')){
    //   // ...do this for each line
    //   $('#stuaddress').val($('#stupaddress').html());
    // }; 
    
  });
  
</script> 
                        <form action="" method="POST" id="studentsection" >
                            <div id="studsecalert" style="display:none"> Inserted Successfully</div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="sname">Students Full Name</label>
                                        <input class="form-control" id="sname" type="text" pattern="[a-zA-Z ]+" placeholder="Enter Students Full Name" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stfathername">Fathers Name</label>
                                        <input class="form-control" id="stfathername" pattern="[a-zA-Z ]+" type="text" placeholder="Enter Fathers name" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stmothername">Mothers Name</label>
                                        <input class="form-control" id="stmothername" pattern="[a-zA-Z ]+" type="text" placeholder="Enter Mothers name" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stdob">Date Of Birth</label>
                                        <input class="form-control" id="stdob" type="date" Required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stgender">Gender</label>
                                        <select class="form-control " id="stgender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stustatus">Status</label>
                                        <select class="form-control " id="stustatus">
                                            <option>Active</option>
                                            <option>De-Active</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stuadno">Aadhaar</label>
                                        <input class="form-control" id="stuadno" pattern="[0-9]{16}" type="text" placeholder="Enter Aadhaar No." Required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="stuayear">Academic Year</label>
                                        <select class="form-control" id="stuayear">
                                            <option>2017-18</option>
                                            <option>2018-19</option>
                                            <option>2019-20</option>
                                            <option>2020-21</option>
                                            <option>2021-22</option>
                                            <option>2022-23</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                         <label class="small mb-1 required" for="stareapincode">Area Pincode</label>
                                        <input class="form-control" pattern="[0-9]{6}" id="stareapincode" type="text" placeholder="Enter Pincode" Required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                         <label class="small mb-1" for="stureligion">Religion</label>
                                        <input class="form-control" id="stureligion" type="text" placeholder="Enter Religion" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stuemail">Student Email Id</label>
                                        <input class="form-control " id="stuemail" type="email" aria-describedby="emailHelp" placeholder="Enter Students Email Id" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stupassword">Students Password</label>
                                        <input class="form-control" id="stupassword" type="password" placeholder="Enter Student Password" Required/>
                                    </div>
                                </div>
                            </div>            
                            <div class="form-row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stupemail">Parents Email Id</label>
                                        <input class="form-control " id="stupemail" type="email"  placeholder="Enter Parents Email Id" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stuppassword">Parents Password</label>
                                        <input class="form-control" id="stuppassword" type="password" placeholder="Enter Parents password" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stucontact">Mobile No.</label>
                                        <input class="form-control" id="stucontact" name="sphone" pattern="[0-9]+" Required placeholder="Enter Student Contact No." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stuptcontact">Parents Contact No.</label>
                                        <input class="form-control" id="stuptcontact" name="pphone" pattern="[0-9]+" placeholder="Enter Parent Contact No." Required/>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                <label class="required" for="stuaddress">Students Address</label>
                                <textarea class="form-control" id="stuaddress" rows="3" Required></textarea>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="addresscheck">
                                <label class="form-check-label" for="addresscheck">
                                    Check if Permanant Address is same as Student Address
                                </label>
                                </div>
                              <div class="form-group">
                                <label for="stupaddress">Permanent Address</label>
                                <textarea class="form-control" id="stupaddress" rows="3"></textarea>
                              </div>
                              <div class="form-row">
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="stuimage">Students Image</label>
                                        <input class="form-control py-1" id="stuimage" type="file" name='simage' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="stusign">Students Signature</label>
                                        <input class="form-control py-1" id="stusign" type="file" name='ssign' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="stupimage">Parents Image</label>
                                        <input class="form-control py-1" id="stupimage" type="file" name='piamge' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="stupsign">Parents Signature</label>
                                        <input class="form-control py-1" id="stupsign" type="file" name='psign' accept="image/*" />
                                 </div>
                              </div> 
                            </div>
                            <button class="btn btn-primary" id="studsecbtn" type="submit">Submit</button>
                        </form>  



                    