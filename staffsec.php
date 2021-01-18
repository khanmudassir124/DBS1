
                        <form>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="staffname">Staff Full Name</label>
                                        <input class="form-control" id="staffname" type="text" pattern="[a-zA-Z]+" placeholder="Enter Staff Full Name" Required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="staffdob">Date Of Birth</label>
                                        <input class="form-control" id="staffdob" type="date" Required/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="staffclass">Role</label>
                                        <select class="form-control" id="staffclass">
                                            <option>Teacher</option>
                                            <option>Staff</option>
                                            <option>Principal</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="staffgender">Gender</label>
                                        <select class="form-control " id="staffgender">
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
                                         <label class="small mb-1" for="stprosubject">Core Subject</label>
                                        <input class="form-control" id="stprosubject" type="text" placeholder="Enter Core Subject for Teachers" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="staffemail">Staffs Email Id</label>
                                        <input class="form-control " id="staffemail" type="email" aria-describedby="emailHelp" placeholder="Enter Staffs Email Id" Required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="staffpassword">Staffs Password</label>
                                        <input class="form-control" id="staffpassword" type="password" placeholder="Enter Staffs Password" Required/>
                                    </div>
                                </div>
                            </div>            
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1 required" for="staffcontact">Mobile No.</label>
                                        <input class="form-control" id="staffcontact" name="staffphone" pattern="[0-9]+" Required placeholder="Enter Staffs Contact No." />
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                <label class="required" for="staffaddress">Staffs Address</label>
                                <textarea class="form-control" id="staffaddress" rows="3" Required></textarea>
                              </div>
                              <div class="form-row">
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="staffimage">Staffs Image</label>
                                        <input class="form-control py-1" id="staffimage" type="file" name='staffimage' accept="image/*" />
                                 </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                        <label class="small mb-1 required" for="staffsign">Staffs Signature</label>
                                        <input class="form-control py-1" id="staffsign" type="file" name='staffsign' accept="image/*" />
                                 </div>
                              </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>  