<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('../includes/config.php'); ?>
 
  <section class="content py-3"  >
      <div class="container-fluid">
        <!-- Info boxes -->
        <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>85<sup style="font-size: 20px">%</sup></h3>

                <p>Attendance</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>70<sup style="font-size: 20px">%</sup></h3>

                <p>Syllabus</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>8<sup style="font-size: 20px">/10</sup></h3>

                <p>Rating</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
         <!-- ./exam schedule -->
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <p class="text-center">Exam Schedule</p>
                
                  <?php
                    $query = mysqli_query($db_conn,"SELECT * FROM posts WHERE `type` = 'class' AND `is_deleted`='0' ORDER BY id");
                    while($class = mysqli_fetch_object($query))
                      {?><div class="card mx-2">
                        <p class="mx-2 my-1">
                        <b>
                          <?=$class->title?>
                          &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; 
                          &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; 23-03-2022 | 28-03-2022
                          </b>
                 </p>
                 </div>
                 <?php }?>
                
              </div>
            </div>
            <div class="col-lg-4">
                <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" fdprocessedid="l22t2e">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" fdprocessedid="5zfn4">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove" fdprocessedid="55d27">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days"><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/25/2023" class="day old weekend">25</td><td data-action="selectDay" data-day="06/26/2023" class="day old">26</td><td data-action="selectDay" data-day="06/27/2023" class="day old">27</td><td data-action="selectDay" data-day="06/28/2023" class="day old">28</td><td data-action="selectDay" data-day="06/29/2023" class="day old">29</td><td data-action="selectDay" data-day="06/30/2023" class="day old">30</td><td data-action="selectDay" data-day="07/01/2023" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="07/02/2023" class="day weekend">2</td><td data-action="selectDay" data-day="07/03/2023" class="day">3</td><td data-action="selectDay" data-day="07/04/2023" class="day">4</td><td data-action="selectDay" data-day="07/05/2023" class="day active today">5</td><td data-action="selectDay" data-day="07/06/2023" class="day">6</td><td data-action="selectDay" data-day="07/07/2023" class="day">7</td><td data-action="selectDay" data-day="07/08/2023" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="07/09/2023" class="day weekend">9</td><td data-action="selectDay" data-day="07/10/2023" class="day">10</td><td data-action="selectDay" data-day="07/11/2023" class="day">11</td><td data-action="selectDay" data-day="07/12/2023" class="day">12</td><td data-action="selectDay" data-day="07/13/2023" class="day">13</td><td data-action="selectDay" data-day="07/14/2023" class="day">14</td><td data-action="selectDay" data-day="07/15/2023" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="07/16/2023" class="day weekend">16</td><td data-action="selectDay" data-day="07/17/2023" class="day">17</td><td data-action="selectDay" data-day="07/18/2023" class="day">18</td><td data-action="selectDay" data-day="07/19/2023" class="day">19</td><td data-action="selectDay" data-day="07/20/2023" class="day">20</td><td data-action="selectDay" data-day="07/21/2023" class="day">21</td><td data-action="selectDay" data-day="07/22/2023" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="07/23/2023" class="day weekend">23</td><td data-action="selectDay" data-day="07/24/2023" class="day">24</td><td data-action="selectDay" data-day="07/25/2023" class="day">25</td><td data-action="selectDay" data-day="07/26/2023" class="day">26</td><td data-action="selectDay" data-day="07/27/2023" class="day">27</td><td data-action="selectDay" data-day="07/28/2023" class="day">28</td><td data-action="selectDay" data-day="07/29/2023" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="07/30/2023" class="day weekend">30</td><td data-action="selectDay" data-day="07/31/2023" class="day">31</td><td data-action="selectDay" data-day="08/01/2023" class="day new">1</td><td data-action="selectDay" data-day="08/02/2023" class="day new">2</td><td data-action="selectDay" data-day="08/03/2023" class="day new">3</td><td data-action="selectDay" data-day="08/04/2023" class="day new">4</td><td data-action="selectDay" data-day="08/05/2023" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <div class="col-lg-4">
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">«</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li class="done">
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right" fdprocessedid="bsgneq"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            </div>
          </div>
        
     












            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          

           

          
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>   
      </div>
    </section>

     

    
<?php include('footer.php') ?>