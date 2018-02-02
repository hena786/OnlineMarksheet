<?php
include 'function.php';
include 'header.php';
//if(loggedin() == FALSE){
//    header('location : login.php');
//}
?>
<div class="container" >
    <div class="col-sm-8 col-sm-offset-0">
        <h1 class="page-header text-center">Admin</h1>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#student" data-toggle="tab">Add Students</a></li>
            <li><a href="#teacher" data-toggle="tab">Add Teachers</a></li>
            <li><a href="#class" data-toggle="tab"> Add Class</a></li>
            <li><a href="#subject" data-toggle="tab">Add Subjects</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            
<!--            add student-->
            
            <div class="tab-pane fade active in" id="student">
                <h3 style="text-align: center; color: #4A235A;">Add Students</h3>
                <div class="col-sm-8">
                      <form class="form-horizontal" id="addStudents">
                        <fieldset>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputName">Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputFather">Father Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputFather">
                        </div>
                    </div>
                            <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputMother">Mother Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputMother">
                        </div>
                    </div>
                            <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputAdd">Address</label>
                        <div class="col-lg-6">
                            <textarea cols="27" rows="2" id="inputAdd"></textarea>
                        </div>
                    </div>
                            <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputMother">Standard</label>
                        <div class="col-lg-6">
                            <select id="inputClass">
                                <option value="select">Select</option>
                                <option>1st Standard</option>
                                <option>2nd Standard</option>
                                <option>3rd Standard</option>
                                <option>4th Standard</option>
                                <option>5th Standard</option>
                                <option>6th Standard</option>
                                <option>7th Standard</option>
                                <option>8th Standard</option>
                                <option>9th Standard</option>
                                <option>10th Standard</option>
                                <option>11th Standard</option>
                                <option>12th Standard</option>
                            </select>
                        </div>
                    </div>
                            <div class="form-group">
                                <label class="col-lg-6 control-label" id="inputSection">Section</label>
                                <div class="col-lg-6">
                                    <select id="inputSection">
                                        <option>Select</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputRoll">Roll Number</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" id="inputRoll">
                        </div>
                    </div>
                            <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputDob">Date of Birth</label>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="inputDob">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputPhone">Phone Number</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" id="inputPhone">
                        </div>
                    </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary pull-right" value="Save!!!">
                            </div>                          
                                
                            
                        </fieldset>
                      </form>
                </div>
                    
                </div>
<!--Add teacher-->
<div class="tab-pane fade" id="teacher">
                <h3 style="text-align: center; color: #4A235A;">Add Teachers</h3>
                <div class="col-sm-8">
                      <form class="form-horizontal" id="addTeachers">
                        <fieldset>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputName">Teacher's Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inputName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputFather">Class Teacher</label>
                        <div class="col-lg-6">
                           <select id="inputClass">
                                <option value="select">Select</option>
                                <option>1st Standard</option>
                                <option>2nd Standard</option>
                                <option>3rd Standard</option>
                                <option>4th Standard</option>
                                <option>5th Standard</option>
                                <option>6th Standard</option>
                                <option>7th Standard</option>
                                <option>8th Standard</option>
                                <option>9th Standard</option>
                                <option>10th Standard</option>
                                <option>11th Standard</option>
                                <option>12th Standard</option>
                            </select>
                        </div>
                    </div>
                            <div class="form-group">
                                <label class="col-lg-6 control-label" id="inputSection">Section</label>
                                <div class="col-lg-6">
                                    <select id="inputSection">
                                        <option>Select</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputAdd">Address</label>
                        <div class="col-lg-6">
                            <textarea cols="27" rows="2" id="inputAdd"></textarea>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-lg-6 control-label" id="inputPhone">Phone Number</label>
                        <div class="col-lg-6">
                            <input type="number" class="form-control" id="inputPhone">
                        </div>
                    </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary pull-right" value="Save!!!">
                            </div>                          
                                
                            
                        </fieldset>
                      </form>
                </div>
                    
                </div>
















