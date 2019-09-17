<?php
  include("header.php");
?>
    
  <div class="container" style="padding-top: 2%">
  <div class="row">
                 <div class="col-sm-4">
                  <div class="panel panel-primary">
        <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Passengers</h3>
                    </div>
                </div>
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Masha</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Vasya</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Inna</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Inna</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Inna</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Inna</td>
                </tr>
            </tbody>
        </table>
    </div>
                 </div>
                 
                 
                 
                 <div class="col-sm-8">
                  <div class="chatbody">
                  <div class="panel panel-primary">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Comments</h3>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10" style="padding: 0;">
                            <div class="messages msg_sent">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar" style="padding: 0;">
                            <img src="../img/followup1.jpg" class=" img-responsive ">
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar" style="padding: 0;">
                            <img src="../img/followup1.jpg" class=" img-responsive ">
                        </div>
                        <div class="col-md-10 col-xs-10" style="padding: 0;">
                            <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
        </div>

                 </div>
             </div>
</div>

  <?php
include("footer.php");
  ?>

