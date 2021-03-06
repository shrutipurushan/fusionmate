<style>
        
        .toggle-switch .ts-helper:before {
      content: '';
    position: absolute;
    top: -4px;
    left: -4px;
    width: 20px;
    height: 19px;}
</style>
<script src="fusionmate/public/plugins/js/function.js"></script>

<script src="fusionmate/public/plugins/js/task.js"></script>
<div id="dashboardTab" role="tabpanel" class="top-dash-board">
        <ul class="tab-nav" role="tablist">
                <li class="active"><a href="#home11" aria-controls="home11" role="tab" data-toggle="tab">Task Manager</a></li>
                <li><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">Event Manager</a></li>
                <li><a href="#messages11" aria-controls="messages11" role="tab" data-toggle="tab">Calender</a></li>
                <li><a href="#settings11" aria-controls="settings11" role="tab" data-toggle="tab">Getting Started</a></li>
        </ul>
        <div  class="tab-content ">
                <div role="tabpanel" class="tab-pane active" id="home11">
                        <div class="row">
                                <div class="col-sm-3 m-b-15">

                                        <select  id="projectOptions" class="chosen" onchange="storeSelectedIdInGlobalVar(this,'project')" data-placeholder="Choose a Country...">
                                                <option value="">Select Project</option>
                                                @foreach($data['projects'] as $values)
                                                <option value="<?php echo $values['un_id'] ?>">{{$values['project_name']}}</option>

                                                @endforeach
                                        </select>
                                </div>

                                <div class="col-sm-3 m-b-15">

                                        <select id="allignedTeams" class="chosen" onchange="storeSelectedIdInGlobalVar(this,'team')" data-placeholder="Select a team...">
                                                
                                        </select>
                                </div>
                                <div class="col-sm-3 m-b-15" style="    top: 8px;">


                                        <button data-toggle="tooltip" data-html="true" data-placement="bottom" data-original-title="Get Details"  onclick="filterDashBoard()" class="btn btn-default"><i style="font-size:16px" class="zmdi zmdi-arrow-forward"></i></button>
                                        @if( Session::get('role')==1)
                                        <button data-toggle="tooltip" data-html="true" data-placement="bottom" data-original-title="Create Project" onclick="projectModal()" data-toggle="modal" data-target="#createProject" class="btn btn-default" ><i style="font-size:16px" class="zmdi zmdi-plus"></i></button>
                                        <button id="createTask"  data-toggle="tooltip" data-html="true" data-placement="bottom" data-original-title="Create Task"   href="#animatedModal"  onclick=" initializeTaskForm();" class="btn btn-default taskView"><i style="font-size:16px" class="zmdi zmdi-assignment"></i></button>
                                        @endif

                                        <button class="btn btn-default"><i style="font-size:16px" class="zmdi zmdi-assignment-alert"></i></button>
                                       
                                </div>
                                 <div class="col-sm-3 m-b-15" style="    top: 15px;">
                                         <div  data-toggle="tooltip" data-html="true" data-placement="bottom" data-original-title="Toggle Dashboard" class="toggle-switch toggle-switch-custom" >
                                             <input  onclick="toggleTaskDashboardView()" id="ts1" type="checkbox" checked="checked" hidden="hidden">
                                        <label for="ts1" class="ts-helper" style="height: 11px;
    width: 33px;"></label>
                                    </div>
                                </div>



                        </div>                                    
                        <div id="task" class="mini-charts " >

                                <div class="row">
                                        <div class="col-sm-3" >
                                                <div class="mini-charts-item bgm-cyan" onclick="loadTaskData()">
                                                        <div class="clearfix">
                                                                <div class="chart stats-bar"></div>
                                                                <div class="count">
                                                                        <small>ALL</small>
                                                                        <h2 id="all">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-lightgreen">
                                                        <div class="clearfix">
                                                                <div class="chart stats-bar-2"></div>
                                                                <div class="count">
                                                                        <small>NEW</small>
                                                                        <h2 id="new">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-orange">
                                                        <div class="clearfix">
                                                                <div class="chart stats-line"></div>
                                                                <div class="count">
                                                                        <small>INPROGRESS</small>
                                                                        <h2 id="inprogress">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-bluegray">
                                                        <div class="clearfix">
                                                                <div class="chart stats-line-2"></div>
                                                                <div class="count">
                                                                        <small>RESOLVED</small>
                                                                        <h2 id="resolved">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-teal">
                                                        <div class="clearfix">
                                                                <div class="chart chart-pie stats-pie"></div>
                                                                <div class="count">
                                                                        <small>CLOSED</small>
                                                                        <h2 id="closed">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-red">
                                                        <div class="clearfix">
                                                                <div class="chart stats-line"></div>
                                                                <div class="count">
                                                                        <small>CRITICAL</small>
                                                                        <h2 id="critical">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-3">
                                                <div class="mini-charts-item bgm-blue">
                                                        <div class="clearfix">
                                                                <div class="chart chart-pie stats-pie"></div>
                                                                <div class="count">
                                                                        <small>DUE</small>
                                                                        <h2 id="due">-</h2>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>


                                </div>
                        </div>
                        <hr/>
                        <div id="taskGridContainer">
                                <div class="table-responsive">
                                        <table id="data-table-basic" class="table table-striped">
                                                <thead>
                                                        <tr>
                                                                <th data-column-id="un_id" data-visibleInSelection="false" data-visible="false" data-type="numeric">ID</th>
                                                                 <th data-formatter="status_name"  data-column-id="status_name" >Status</th>
                                                                <th data-formatter="tracker" data-column-id="tracker">Tracker</th>
                                                               
                                                                 <th data-formatter="priority_name" data-column-id="priority_name" >Priority</th>
                                                                 <th data-formatter="assignee" data-column-id="assignee" >Assigned To</th>
                                                                  <th data-formatter="start_date" data-column-id="created_at" >Start Date</th>
                                                                   <th data-formatter="end_date" data-column-id="end_date" >Due Date</th>
                                                                   <th data-formatter="action"  >Update/View</th>
                                                        </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                        </table>
                                </div>

                        </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile11">
                        <center>We are still working on it.</center>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages11">
                        <center>We are still working on it.</center>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings11">
                        <center>We are still working on it.</center>
                </div>
        </div></div>


<script>
    
        $("#data-table-basic").bootgrid("destroy");// distroy any open instance before re-instantiation
        initializeGrid();//intialize gird
        toggleTaskDashboardView();
//        initializePlugins();
       initializeAnimatedModal();
       initializePlugins();
        $('.chosen').chosen({
                width: '100%',
                allow_single_deselect: true
        });
        $('[data-toggle="tooltip"]').tooltip();  
  
</script>
<!--

include all modals 

-->
@include('templates/task/create_project_modal', ['data' =>  $data['teams'] ])
@include('templates/task/create_task_modal', ['trackers' =>  $data['trackers'] ,'status' =>  $data['status'],'priorities' =>  $data['priorities']])