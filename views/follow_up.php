<?php
  include("header_driver.php");
  
  $registeredPASSENGER=$db->getRows('passenger', array('Order by'=>'passenger_id'));
  $registeredMESSAGE=$db->getfollow_up($passengerID, $travelID);
?>
  <style>
    .chatperson{
  display: block;
  border-bottom: 1px solid #eee;
  width: 100%;
  display: flex;
  align-items: center;
  white-space: nowrap;
  overflow: hidden;
  margin-bottom: 15px;
  padding: 4px;
}
.chatperson:hover{
  text-decoration: none;
  border-bottom: 1px solid orange;
}
.namechat {
    display: inline-block;
    vertical-align: middle;
}
.chatperson .chatimg img{
  width: 40px;
  height: 40px;
  background-image: url('../img/followUp.png');
}
.chatperson .pname{
  font-size: 18px;
  padding-left: 5px;
}
.chatperson .lastmsg{
  font-size: 12px;
  padding-left: 5px;
  color: #ccc;
}

.panel{
    margin-bottom: 0px;
}
.chat-window{
    bottom:0;
    position:fixed;
    float:right;
    margin-left:10px;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  max-height:300px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_receive{
    padding-left:0;
    margin-left:0;
}
.msg_sent{
    padding-bottom:20px !important;
    margin-right:0;
}
.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  max-width:100%;
}
.messages > p {
    font-size: 13px;
    margin: 0 0 0.2rem 0;
  }
.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}
img {
    display: block;
    width: 100%;
}
.avatar {
    position: relative;
}
.base_receive > .avatar:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border: 5px solid #FFF;
    border-left-color: rgba(0, 0, 0, 0);
    border-bottom-color: rgba(0, 0, 0, 0);
}

.base_sent {
  justify-content: flex-end;
  align-items: flex-end;
}
.base_sent > .avatar:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 0;
    border: 5px solid white;
    border-right-color: transparent;
    border-top-color: transparent;
    box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
}

.msg_sent > time{
    float: right;
}



.msg_container_base::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

.btn-group.dropup{
    position:fixed;
    left:0px;
    bottom:0;
}

.panel-primary > .panel-heading {
    color: #fff;
    background-color: #424c59;
    border-color: #424c59;
} 

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    font-weight: bold;
    font-size: 1.3rem;
}

.messages > time {
    font-size: 11px;
    color: #c42715;
}
  </style>

  <div class="container" style="padding-top: 2%">
  <div class="row">
                 <div class="col-sm-4">
                  <div class="panel panel-primary">
        <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Passengers <?php echo $travelID;?></h3>
                    </div>
                </div>
        <table class="table table-striped table-hover">
            <tbody>
            <?php 
              if ($registeredPASSENGER): $count=0; foreach($registeredPASSENGER as $show): $count++;
             ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $show['passenger_fname'].' '.$show['passenger_lname']; ?></td>
                </tr>
                <?php 
                  endforeach;
                endif;
                 ?>
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
                <div style="height: 300px; overflow: auto;">
                <?php if ($registeredMESSAGE): $count1=0; foreach($registeredMESSAGE as $show): $count1++; ?>
                <div class="panel-body msg_container_base">
                <?php if ($show['category']==0) {?>   
                    <div class="row msg_container base_sent">
                        <div class="col-md-10 col-xs-10" style="padding: 0;">
                            <div style="text-align: justify;  word-wrap: break-word;" class="messages msg_sent">
                                <span style="width: 300px;" ><?php echo $show['message']; ?></span>
                                <time datetime="2009-11-13T20:00"><?php echo $show['passenger_fname'] .' • '.$show['c_date']; ?></time>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar" style="padding: 0;">
                            <!-- <img src="../img/index.jpeg" class=" img-responsive "> -->
                        </div>
                    </div>
                   <?php } ?>
                   <?php if ($show['category']==1) {?>
                    <div class="row msg_container base_receive">
                        <div class="col-md-2 col-xs-2 avatar" style="padding: 0;">
                            <!-- <img src="../img/index.jpeg" class=" img-responsive "> -->
                        </div>
                        <div class="col-md-10 col-xs-10" style="padding: 0;">
                            <div style="text-align: justify; background: #d7eae9;; color: #151414;  word-wrap: break-word;" class="messages msg_receive">
                                <span style="width: 300px;"><?php echo $show['message'];?></span>
                                <time datetime="2009-11-13T20:00"><?php echo $show['passenger_fname'] .' • '.$show['c_date']; ?></time>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php endforeach; endif;  ?>
              </div>
          <form enctype="multipart/form-data" method="POST" action="../class/follow_upControler.php">
                <div class="panel-footer">
                    <div class="input-group">
                        <textarea id="btn-input" type="text" name="message" class="form-control input-sm chat_input" placeholder="Write your message here..." /></textarea>
                        <span class="input-group-btn" >
                          <input type="text" hidden="" name="driverID" value="<?php echo $driverID?>">
                          <input type="text" hidden="" name="travelID" value="<?php echo $travelID?>">
                          <input type="text" hidden="" name="passengerID" value="<?php echo $passengerID?>">
                        <button type="submit" name="send_message" style="background:  #424c59; color: white;padding-top: 14px;padding-bottom: 13px;margin-top: 0px;margin-bottom: 0px;" class="btn  btn-sm" id="btn-chat"><i class="glyphicon glyphicon-send" style="font-size: 30px;" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
      </div></div></div></div>
    </div>
    </div>
</div>
</div>

  <?php
    include("footer.php");
  ?>

