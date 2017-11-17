
<template>
  <div>
     <div class="container">
         <div class="row">
             <div class="col-md-10">
                 <div class="panel panel-danger">
                     <div class="panel-heading"> <i class="fa fa-comments fa-lg "></i>       CHAT BOX</div>
                 </div>
                 <div class="panel panel-body">
                     <ul class="chat">
                        <div class="row"> 
                            <div class="col-md-6">
                                <li class="left clearfix"><span class="chat-img pull-left">
                                    <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>   12 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">   
                                <li class="right clearfix"><span class="chat-img pull-right">
                                    <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>   13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </div>
                        </div>
                     </ul>
                 </div>
                 <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
             </div>
         </div>
     </div>
  </div>
</template>
