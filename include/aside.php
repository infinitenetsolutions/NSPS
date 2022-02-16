
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-olive elevation-4" style="background-color: #060631 !important;">
      <!-- Brand Logo -->
      <!--<a href="dashboard" class="brand-link">-->
      <!--    <img src="images/logo.png" alt="NSU Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <!--    <span class="brand-text font-weight-light" style="font-size: 18px;">Netaji Subhas University</span>-->
      <!--</a>-->

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="images/logo.png" class="" alt="User Image" style="width: 6.1rem !important;">
              </div>
              <div class="info">
                  <a href="#" class="d-block" style="margin-top: 4px;font-weight: 900;">NETAJI<br/>SUBHAS <br/>PUBLIC<br/>SCHOOL</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item has-treeview" id="menu1">
                      <a href="dashboard" class="nav-link <?php if($page_no == "1"){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>                  </li>

                  <li class="nav-item has-treeview <?php if($page_no == "2"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 2; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == "2"){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-user-shield"></i>
                          <p>
                              Administration
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 2; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "2_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="admin_view" class="nav-link <?php if($page_no_inside == "2_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Admin List</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 2; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "2_2"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="employee_view" class="nav-link <?php if($page_no_inside == "2_2"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Employee Management</p>
                              </a>
                          </li>
                      </ul>
                  </li> 
                  <li class="nav-item has-treeview <?php if($page_no == "3"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 3; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == "3"){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Setup
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 3; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "3_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="add_university_details" class="nav-link <?php if($page_no_inside == "3_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>University Details</p>
                              </a>
                          </li>
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 3; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "3_2"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="branch_view" class="nav-link <?php if($page_no_inside == "3_4"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Branches</p>
                              </a>
                          </li>
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 3; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "3_2"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="course_view" class="nav-link <?php if($page_no_inside == "3_2"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Classes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="subject_view" class="nav-link <?php if($page_no_inside == "3_3"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Section</p>
                              </a>
                          </li>
                      </ul>
                  </li>
               <!--  <li class="nav-item has-treeview <?php if($page_no == "4"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 4; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>

                      <a href="#" class="nav-link <?php if($page_no == 4){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-calendar-alt"></i>
                          <p>
                              Front Office
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 4; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "4_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="prospectus_view" class="nav-link <?php if($page_no_inside == "4_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Prospectus</p>
                              </a>
                          </li>
                          
                      </ul>
                  </li> -->
                 <!--  <li class="nav-item has-treeview <?php if($page_no == "5"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 5; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == "5"){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              Admission
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 5; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "5_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="admission_form" class="nav-link <?php if($page_no_inside == "5_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Admission Form</p>
                              </a>
                          </li>
                      </ul>
                  </li> -->
               <!--    <li class="nav-item has-treeview <?php if($page_no == "6"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 6; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == "6"){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Student
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview"> -->
                         <!-- <li class="nav-item">
                              <a href="add_section_roll" class="nav-link <?php if($page_no_inside == "6_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Section/Roll No</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="search_student_record" class="nav-link <?php if($page_no_inside == "6_2"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Search Student Record</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="update_course_record" class="nav-link <?php if($page_no_inside == "6_3"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Update Course Record</p>
                              </a>
                          </li>-->
                          <!-- <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 6; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "6_4"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="student_list" class="nav-link <?php if($page_no_inside == "6_4"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Student List</p>
                              </a>
                          </li> -->
                          <!-- <li style="display:none;" class="nav-item" <?php if(isset($autority)){ $page_no_temp = 6; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "6_5"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="edit_student" class="nav-link <?php if($page_no_inside == "6_5"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Student Edit</p>
                              </a>
                          </li> -->
                     <!--  </ul>
                  </li>
                    -->
             

                    <li class="nav-item has-treeview <?php if($page_no == "11"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 11; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == 11){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Student & Examination
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <!--  <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="add_semester" class="nav-link <?php if($page_no_inside == "11_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Semester</p>
                              </a>
                          </li>
 -->



                          <!--  <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_2"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="student_details" class="nav-link <?php if($page_no_inside == "11_2"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Export Student</p>
                              </a>
                          </li> -->


						   <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_8"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="student_view" class="nav-link <?php if($page_no_inside == "11_8"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Import Student</p>
                              </a>
                          </li>
                          <!-- <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_3"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="student_semester" class="nav-link <?php if($page_no_inside == "11_3"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Allocate Semester to Student</p>
                              </a>
                          </li> -->


                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_3"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="exam_view" class="nav-link <?php if($page_no_inside == "11_3"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Exams</p>
                              </a>
                          </li>





                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_4"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="add_subject" class="nav-link <?php if($page_no_inside == "11_4"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Subject</p>
                              </a>
                          </li>
						  <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_5"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="add_marks" class="nav-link <?php if($page_no_inside == "11_5"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Marks</p>
                              </a>
                          </li>	
							<li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_6"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="create_report" class="nav-link <?php if($page_no_inside == "11_6"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Report</p>
                              </a>
							</li>
							<li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 11; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "11_7"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="create_all_report" class="nav-link <?php if($page_no_inside == "11_7"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Full Report</p>
                              </a>
							</li>
                      </ul>
                  </li>
                  
                  
                  <li class="nav-item has-treeview <?php if($page_no == "12"){ echo 'menu-open'; } ?>" <?php if(isset($autority)){ $page_no_temp = 12; if(isset($allAutority->$page_no_temp)){ if($allAutority->$page_no_temp == ""){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                      <a href="#" class="nav-link <?php if($page_no == 12){ echo 'active'; } ?>">
                          <i class="nav-icon fas fa-rupee-sign"></i>
                          <p>
                              Fee
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                        
						   <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 12; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "12_1"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="add_fee" class="nav-link <?php if($page_no_inside == "12_1"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Fee</p>
                              </a>
                          </li>						
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 12; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "12_2"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="fee_details" class="nav-link <?php if($page_no_inside == "12_2"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fee Details</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 12; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "12_3"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="payfee" class="nav-link <?php if($page_no_inside == "12_3"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pay Fee</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 12; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "12_4"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="print_receipt" class="nav-link <?php if($page_no_inside == "12_4"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Print Receipt</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" <?php if(isset($autority)){ $page_no_temp = 12; $flag = 0; if(isset($allAutority->$page_no_temp)) { $subMenus = explode("||", $allAutority->$page_no_temp); for($i=0; $i<count($subMenus);$i++){ if($subMenus[$i] == "12_5"){ $flag++; break; } } if($flag == 0){ echo "style='display:none;';"; } } else { echo "style='display:none;';"; } } ?>>
                              <a href="datewise_fee_report" class="nav-link <?php if($page_no_inside == "12_5"){ echo 'active'; } ?>">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Datewise Fee Report</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  
                  
                   <a href="edit_student" class=" <?php if($page_no == "edit_student"){ echo 'active'; } ?>"></a>
                      
                  <li class="nav-item has-treeview">
                      <a href="javascript:void(0)" class="nav-link" onclick="document.getElementById('logout').style.display='block'">
                          <i class="nav-icon fa fa-power-off"></i>
                          <p>
                              Log Out
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
<script>
function removeThis(commingId){
    $("#"+commingId).remove();
}
//    $(document).ready(function() {
//        setInterval(function(){
//            $.ajax({
//                url: 'include/view.php?action=get_all_nsuniv_notifications',
//                type: 'GET',
//                success: function(result) {
//                    if(parseInt(result) > 0)
//                        $("#allNsunivNotifications").html('<sup class="btn btn-success btn-xs">'+result+'</sup>');
//                    else
//                        $("#allNsunivNotifications").html('');
//                }
//            });
//            $.ajax({
//                url: 'include/view.php?action=get_all_nsuniv_prospectus_notifications',
//                type: 'GET',
//                success: function(result) {
//                    if(parseInt(result) > 0)
//                        $("#allNsunivProspectusEnquiry").html('<sup class="btn btn-success btn-xs">'+result+'</sup>');
//                    else
//                        $("#allNsunivProspectusEnquiry").html('');
//                }
//            });
//            $.ajax({
//                url: 'include/view.php?action=get_all_nsuniv_admission_notifications',
//                type: 'GET',
//                success: function(result) {
//                    if(parseInt(result) > 0)
//                        $("#allNsunivAdmissionEnquiry").html('<sup class="btn btn-success btn-xs">'+result+'</sup>');
//                    else
//                        $("#allNsunivAdmissionEnquiry").html('');
//                }
//            });
//            $.ajax({
//                url: 'include/view.php?action=get_all_nsuniv_get_started_notifications',
//                type: 'GET',
//                success: function(result) {
//                    if(parseInt(result) > 0)
//                        $("#allNsunivGetStartedEnquiry").html('<sup class="btn btn-success btn-xs">'+result+'</sup>');
//                    else
//                        $("#allNsunivGetStartedEnquiry").html('');
//                }
//            });
//            
//        }, 10000);
//    });
</script>
  <!-- Logout Section Start -->
  <div id="logout" class="w3-modal" style="z-index:2020;">
      <div class="w3-modal-content w3-animate-top w3-card-4" style="width:40%">
          <header class="w3-container" style="background:#343a40; color:white;">
              <span onclick="document.getElementById('logout').style.display='none'" class="w3-button w3-display-topright">&times;</span>
              <h2 align="center">Are you sure???</h2>
          </header>
          <div class="card-body">
              <div class="col-md-12" align="center">
                  <a href="logout" class="btn btn-danger"><i class="nav-icon fa fa-power-off"></i> Log Out</a>
                  <button type="button" onclick="document.getElementById('logout').style.display='none'" class="btn btn-primary">Cancel</button>
              </div>
          </div>
      </div>
  </div>
  <!-- Logout Section End -->