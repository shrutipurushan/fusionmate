<div id="createProject" class="modal fade" role="dialog">
    <div class=" modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <form id="newProject">
                <div class="modal-header-info modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title custom-modal-header-font">Create Project</h4>
                </div>
                <div class="modal-body createTeamBodyCustomHeight">
                    <blockquote  class="m-b-25">
                        <p>When you create a new project you have to assign the project to a team i.e the team head.If incase you haven't assigned a team head then the project by default will be assigned to you allowing you to start distributing tasks among your team members</p>
                    </blockquote>


                    <div class="row">
                        <div class="col-sm-6 m-b-15">
                            <div class="input-group fg-float">
                                <span class="input-group-addon"><i class="zmdi zmdi- collection-bookmark"></i></span>
                                <div class="fg-line">

                                    <input class='form-control modalInputCustomHeight'   type='text' placeholder="Enter project name" name='project' />
                                    <label class="fg-label" >Project Name</label>
                                </div>
                            </div>    


                        </div>

                        <div class="col-sm-3 m-b-15">

                            <select name="team" class="chosen" data-placeholder="Assign To Team...">
                                <option value="">Assign To Team</option>
                                @foreach($data as $values)
                                <option value="<?php echo $values['team_channel_id'] ?>">{{$values['channel_view_name']}}</option>

                                @endforeach
                            </select>
                        </div>




                    </div> 
                    <p id='customCreateProjectMessage' class='text-center'></p>
                </div>
                <div class="modal-footer">

                    <button onclick="createProject()" type="button" class="btn btn-success waves-effect" >Create</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    $('.chosen-single').css("height","46");
 $('body').on('focus', '.fg-line .form-control', function(){
            $(this).closest('.fg-line').addClass('fg-toggled');
        })

        $('body').on('blur', '.form-control', function(){
            var p = $(this).closest('.form-group, .input-group');
            var i = p.find('.form-control').val();

            if (p.hasClass('fg-float')) {
                if (i.length == 0) {
                    $(this).closest('.fg-line').removeClass('fg-toggled');
                }
            }
            else {
                $(this).closest('.fg-line').removeClass('fg-toggled');
            }
        });

</script>