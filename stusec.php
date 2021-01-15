
                        <form>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="sname">Students Full Name</label>
                                        <input class="form-control" id="sname" type="text" pattern="[a-zA-Z]+" placeholder="Enter Students Full Name" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stfathername">Fathers Name</label>
                                        <input class="form-control" id="stfathername" pattern="[a-zA-Z]+" type="text" placeholder="Enter Fathers name" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stmothername">Mothers Name</label>
                                        <input class="form-control" id="stmothername" pattern="[a-zA-Z]+" type="text" placeholder="Enter Mothers name" Required/>
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
                                        <label class="small mb-1" for="status">Status</label>
                                        <select class="form-control " id="status">
                                            <option>Active</option>
                                            <option>De-Active</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="adno">Aadhaar</label>
                                        <input class="form-control" id="adno" pattern="[0-9]{16}" type="text" placeholder="Enter Aadhaar No." Required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="ayear">Academic Year</label>
                                        <select class="form-control" id="ayear">
                                            <option>2017-18</option>
                                            <option>2018-19</option>
                                            <option>2019-20</option>
                                            <option>2020-21</option>
                                            <option>2021-22</option>
                                            <option>2022-23</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label class="small mb-1" for="religion">Religion</label>
                                        <input class="form-control" id="religion" type="text" placeholder="Enter Religion" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="semail">Student Email Id</label>
                                        <input class="form-control " id="semail" type="email" aria-describedby="emailHelp" placeholder="Enter Students Email Id" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="spassword">Students Password</label>
                                        <input class="form-control" id="spassword" type="password" placeholder="Enter Student Password" Required/>
                                    </div>
                                </div>
                            </div>            
                            <div class="form-row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="pemail">Parents Email Id</label>
                                        <input class="form-control " id="pemail" type="email"  placeholder="Enter Parents Email Id" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="ppassword">Parents Password</label>
                                        <input class="form-control" id="ppassword" type="password" placeholder="Enter Parents password" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="stcontact">Mobile No.</label>
                                        <input class="form-control" id="stcontact" name="sphone" pattern="[0-9]+" Required placeholder="Enter Student Contact No." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="ptcontact">Parents Contact No.</label>
                                        <input class="form-control" id="ptcontact" name="pphone" pattern="[0-9]+" placeholder="Enter Parent Contact No." Required/>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                <label class="required" for="staddress">Students Address</label>
                                <textarea class="form-control" id="staddress" rows="3" Required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="paddress">Permanent Address</label>
                                <textarea class="form-control" id="paddress" rows="3"></textarea>
                              </div>
                              <div class="form-row">
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="simage">Students Image</label>
                                        <input class="form-control py-1" id="simage" type="file" name='simage' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="ssign">Students Signature</label>
                                        <input class="form-control py-1" id="ssign" type="file" name='ssign' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="pimage">Parents Image</label>
                                        <input class="form-control py-1" id="pimage" type="file" name='piamge' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="psign">Parents Signature</label>
                                        <input class="form-control py-1" id="psign" type="file" name='psign' accept="image/*" />
                                 </div>
                              </div> 
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>  