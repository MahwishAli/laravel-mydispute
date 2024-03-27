@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper" style="min-height: 917px;">
    <style>
      img{ 
            max-width:100%;
      }
      .inbox_people {
            float: left;
            overflow: hidden;
            width: 35%;
            border-right:1px solid #c4c4c4;
            background: #343a40 none repeat scroll 0 0;
            color:white;
      }
      .inbox_msg {
            border: 1px solid #d5d6d8cc;
            clear: both;
            overflow: hidden;
            border-radius: 10px;
            background: #d5d6d8cc;
      }
      .top_spac{ 
            margin: 20px 0 0;
      }

      .recent_heading {
            float: left; width:40%;
      }
      .srch_bar {
            display: inline-block;
            text-align: right;
            width: 60%;
      }
      .headind_srch{ 
            padding:20px; 
            overflow:hidden; 
            border-bottom: 1px solid #7d7f85;
      }
      input.searchbox {
            line-height: 28px;
            padding: 2px 5px;
            width: 55%;
            background-color: #807f7f;
            border: none;
            border-radius: 3px;
            color: #ffffff;
      }
      .searchbtn {
            padding: 4px 7px;
            border-radius: 3px;
      }

      i.fa.fa-search {
            margin-left:-25px;
            color:lightgray;
      }

      .recent_heading h4 {
            color: white;
            font-size: 21px;
            margin: auto;
      }
      .srch_bar input{ 
            border:1px solid #cdcdcd; 
            border-width:0 0 1px 0; 
            width:80%; 
            padding:2px 0 4px 6px; 
            background:none;
      }
      .srch_bar .input-group-addon button {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            padding: 0;
            color: #707070;
            font-size: 18px;
      }
      .srch_bar .input-group-addon { 
            margin: 0 0 0 -27px;
      }
      .chat_ib h5{ 
            font-size:15px; 
            color:white; 
            margin:0 0 8px 0; 
            font-weight:normal;
      }
      .chat_ib h5 span{ 
            font-size:13px; 
            float:right;
      }
      .chat_ib p{ 
            font-size:14px; 
            color:#989898; 
            margin:auto;
      }
      .chat_img {
            float: left;
            width: 14%;
      }
      .chat_ib {
            float: left;
            padding: 0 0 0 15px;
            width: 85%;
      }

      .chat_people{ 
            overflow:hidden; 
            clear:both;
      }
      .chat_list {
            border-bottom: 1px solid #7d7f85;
            margin: 0;
            padding: 20px 30px;
      }
      .inbox_chat { 
            height: 550px; 
            overflow-y: scroll;
      }

      .incoming_msg_img {
            display: inline-block;
            width: 6%;
      }
      .name_msg_img {
            display: inline-block;
            width: 6%;
            margin-right:10px;
      }
      .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 92%;
      }
      .received_withd_msg p {
            background: #ebebeb none repeat scroll 0 0;
            border-radius: 3px;
            color: #646464;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 12px;
            width: 100%;
      }
      .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
      }
      .received_withd_msg { 
            width: 57%;
      }
      .mesgs {
            float: left;
            width: 65%;
            background: white;
      }
      .mesgs1 {
            float: left;
            width: 65%;
            text-align:center;
      }

      .sent_msg p {
            background: #05728f none repeat scroll 0 0;
            border-radius: 3px;
            font-size: 14px;
            margin: 0; color:#fff;
            padding: 5px 10px 5px 12px;
            width:100%;
      }
      .outgoing_msg{ 
            overflow:hidden; 
            margin:10px 0 10px;
      }
      .sent_msg {
            float: right;
            width: 46%;
      }
      .input_msg_write input {
            background: rgb(255 255 255 / 82%) none repeat scroll 0 0;
            border: medium none;
            color: #4c4c4c;
            font-size: 15px;
            min-height: 65px;
            width: 86%;
      }
      .input_msg_write {
            background: white;
      }
      .type_msg {
            border-top: 1px solid #c4c4c4;
            position: relative; 
            margin-top: 0px;
      }
      .msg_send_btn {
            background: #05728f none repeat scroll 0 0;
            border: medium none;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
            height: 33px;
            position: absolute;
            right: 0;
            top: 11px;
            width: 33px;
      }
      .messaging { padding: 0 0 50px 0;}
      .msg_history {
            height: 475px;
            padding: 30px 15px 0 25px;
            background: white;
            overflow-y: auto;
      }
      .message-box{
            margin-top: 50px;
      }
      .headind_srch.message-heading{
            background: white;
            height: 70px;
            padding: 15px;
            font-size: 1.1rem;
      }
      .headind_srch1.message-heading1{
            height: 74px;
      }
      input.searchbox::placeholder{
            color:#fff;
      }
      img#icon-image {
            width: 40%;
      }
        
    </style>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Cahat Panel -->           
                <div class="message-box">
                    <div class="messaging">
                    <div class="inbox_msg">
                        <div class="inbox_people">
                            <div class="headind_srch">
                                <div class="recent_heading">
                                    <h4>Messages</h4>
                                </div>
                                <div class="search-container">
                                        <input type="text" class="searchbox" placeholder="Search.." id="search" onkeyup="filterFunction()">
                                        <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="inbox_chat">  
                              @foreach($initiator as $init)           
                                    <div class="chat_list active_chat" data-id="">
                                        <input name="init_id" value="{{ $init->initiator_id}}" hidden >
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_03.jpg" alt="image"> 
                                            </div>
                                            <div class="chat_ib">
                                                <h5>{{ $init->initiator->companyName }}</h5>
                                            </div>
                                        </div>
                                    </div>
                              @endforeach
                            </div>
                        </div>
                        <div class="mesgs1" id="dummy" >
                              <h3 class="headind_srch1 message-heading1"></h3> 
                              <div class="chat-icon">
                                    <img src="{{ asset('assets/image/chat-icon.png') }}" alt="image" id="icon-image"> 
                                    <h1>Chat App</h1>
                                    <p>Send and receive messages.<p>
                              </div>
                        </div>
                        <div class="mesgs" id="messages" style="display: none">    
                              <h4 class="headind_srch message-heading"><div class="name_msg_img"> <img src="{{ asset('assets/image/user-icon.png') }}" alt="image"> 
                              </div>{{ @$init->initiator->companyName }}</h4>
                              <div class="msg_history">
                                    @foreach($chat as $row)
		                              @if($row->sendby == 'initiator')
                                          <div class="incoming_msg">
                                                <div class="incoming_msg_img"> <img src="{{ asset('assets/image/user-icon.png') }}" alt="image"> 
                                                </div>
                                                <div class="received_msg">
                                                      <div class="received_withd_msg contractor">
                                                            <p>{{ $row->message }}</p>
                                                            <span class="time_date"></span>
                                                      </div>
                                                </div>
                                          </div>
                                          @elseif($row->sendby == 'consultant')
                                          <div class="outgoing_msg">
                                                <div class="sent_msg admin">
                                                      <p>{{ $row->message }}</p>
                                                      <span class="time_date"></span>
                                                </div> 
                                          </div>
                                          @endif
                                    @endforeach                                                            
                              </div> 
                              <div class="type_msg">
                                    <form role="form" method="POST" id="send-message">
                                          @csrf
                                          <div class="input_msg_write">
                                                <input type="hidden" name="consultant_id" id="consultant_id" value="{{ $consultant->id }}">
                                                <input type="text" class="write_msg" name="message" placeholder="Type a message" required/>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                          </div>
                                    </form>
                              </div>
                        </div> 
                    </div>
                </div>
            </div>
      </div><!-- /.container-fluid -->
</section>
</div>         
<!-- main content -->
<script>
function filterFunction() {
      var input, filter, ul, li, a, i;

      input = document.getElementById("search");
      filter = input.value.toUpperCase();

      div = document.getElementsByClassName("inbox_chat");
      a = div[0].getElementsByClassName("chat_list");

      for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  a[i].style.display = "";
            } 
            else {
                  a[i].style.display = "none";
            }
      }
}
       
$(document).ready(function() {
      $(".chat_list").on('click', function(e){
            e.preventDefault();
            $('#messages').css('display','block');
            $('#dummy').hide();

            //   var id = $(this).data('id');
            //   var user_id = $(this).data('user_id');
            //   console.log(id);
            //   $.ajax({
            //       url: "{{ url('chatpanel') }}",
            //       type: "GET",
            //       data: {
            //           id: id,
            
            //       },
            //       success: function(response) {
            //           $('#dummy').hide();
            //           $('#messages').html(response);
            //           // console.log(response);
            //       },
            //       error: function(err) {

            //       }
            //   });
      });

      // send message
      $("#send-message").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                  url: '{{ route("consultant.sendMessages") }}',
                  type: "POST",
                  data: new FormData(this),
                  contentType: false,
                  processData: false,
                  success: function(response) {
                        $('#dummy').hide();
                        $('#messages').html(response);
                        // console.log(response);
                  },
                  error: function(xhr, status, error) {
                    console.log(error);
                  }
            });
      });
});
</script>
@endsection
