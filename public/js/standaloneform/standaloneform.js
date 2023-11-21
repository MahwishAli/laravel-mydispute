var segmentid = "";
var subjectid = "";
var boardid = "";
var locid = "";
var areaid = "";
var requirementdetails = "";
var regstatus = "";
var reg_name = "";
var reg_email = "";
var reg_mobile = "";
var reg_pass = "";
var reg_con_pass = "";
var showcontact = "";
var studyingatgrade = "";
var login_email = "";
var login_pass = "";
var loc_pref = "";
var locpref = [];
var othertutorcontact = 1;
var otp = "";
var characterlimit = 500;
var hasboardpostjob = false;
var stepcount = "";
var initialstepper = 0;
var stepinterval = "";
var finalstep = 0;
var mobileverified = 1;

$(document).ready(function () {
  $(".searchbox").attr("placeholder", "Search Grade");
  $(".searchbox").hide();

  $(document).on("click", ".nextbtn", function (e) {
    e.preventDefault();
    e.stopPropagation();

    var nextelement = $(this).closest(".formlebel_one").next(".formlebel_one");
    var currentelement = $(this).closest(".formlebel_one");
    var currentstep = currentelement.attr("data-step");

    alertify.set({
      labels: {
        ok: "Ok",
      },
    });

    if (nextelement !== undefined) {
      var flag = 0;

      //alert(currentstep);

      if (currentstep == "first_page") {
        $(".searchbox").attr("placeholder", "Search Subject");
        $(".searchbox").hide();

        // segmentid = $(".segment_radio:checked").val();
        // // var subjectid = $("#subject_textbox").val();

        // alert(segmentid);

        // if (
        //   segmentid === undefined ||
        //   segmentid == "" ||
        //   subjectid === undefined ||
        //   subjectid == ""
        // ) {
        //   alertify.alert("Please fill mendatory fields");

        //   flag = 1;
        // } else {
        if (hasboardpostjob === false) {
          if ($(".boardlist").length > 0) {
            //alert('asdasdasd');

            //alert(nextelement.attr('data-step'));

            $(".searchbox").attr("placeholder", "Search City");
            $(".searchbox").hide();

            $(".boardlist").html("");
            $('.formlebel_one[data-step="first_page"]').hide();
            nextelement.next(".formlebel_one").show();

            //alert('adasddasdadadadadadadaddadds');

            nextelement = nextelement.next(".formlebel_one");
          } else {
            $(".searchbox").attr("placeholder", "Search Curriculum");
            $(".searchbox").hide();

            var boardhtml = "";

            showloader();

            $.ajax({
              url: fetchboardurl,
              type: "POST",
              dataType: "json",
              data: {
                act: "fetchboards",
                segmentid: segmentid,
              },
              success: function (data) {
                if (data.length > 0) {
                  data.forEach(function (item) {
                    boardhtml +=
                      '<li><input name="second_page" class="subject_radio board_radio" id="board_' +
                      item.boardid +
                      '" value="' +
                      item.boardid +
                      '" type="radio"><label for="board_' +
                      item.boardid +
                      '" class="subject_text">' +
                      item.boardtitle +
                      "</label></li>";
                  });

                  $(".boardlist").html(boardhtml);

                  hideloader();
                } else {
                  hideloader();

                  if ($(".boardlist").length > 0) {
                    $(".searchbox").attr("placeholder", "Search City");
                    $(".searchbox").hide();

                    $(".boardlist").html("");
                    $('.formlebel_one[data-step="first_page"]').hide();
                    nextelement.next(".formlebel_one").show();
                  } else {
                    nextelement.show();
                  }
                }

                finalstep += stepinterval;
                determineprogressbar(finalstep);
              },
            });

            nextelement.show();
          }
        }

        $(".topsection").hide();

        finalstep += stepinterval;
        determineprogressbar(finalstep);
      }
    } else if (currentstep == "second_page") {
      $(".searchbox").attr("placeholder", "Search City");
      $(".searchbox").hide();

      boardid = $(".board_radio:checked").val();

      if (boardid == undefined || boardid == "") {
        alertify.alert("Choose curriculum");
        flag = 1;
      } else {
        finalstep += stepinterval;
        determineprogressbar(finalstep);
      }
    } else if (currentstep == "location") {
      //locid = $('.loc_radio:checked').val();

      locid = $("#loc").val();
      areaid = $("#area").val();

      // if (locid == undefined || locid == '') {

      //     alertify.alert("Choose City");
      //     flag = 1;
      // } else {

      //     if (areaid == undefined || areaid == '') {

      //         alertify.alert("Choose area");
      //         flag = 1;
      //     } else {

      finalstep += stepinterval;
      determineprogressbar(finalstep);
      //     }

      // }
    } else if (currentstep == "locationpref") {
      var locprefids = $(".locpref_chk:checked");

      if (locprefids.length == 0) {
        alertify.alert("Choose location preference");
        flag = 1;
      } else {
        $(".searchbox").attr("placeholder", "Search Location");
        $(".searchbox").hide();

        locprefids.each(function (e) {
          var checkedid = $(this).val();

          var checkexists = locpref.indexOf(checkedid);

          if (checkexists == -1) {
            locpref.push(checkedid);
          }
        });

        loc_pref = locpref.join(",");

        finalstep += stepinterval;
        determineprogressbar(finalstep);
      }
    } else if (currentstep == "othertutorcontact") {
      var ischecked = $(".othertutorcontact_chk").is(":checked");

      if (ischecked) {
        othertutorcontact = 1;
      } else {
        othertutorcontact = 0;
      }
    } else if (currentstep == "requirement") {
      requirementdetails = $("#requirementdetails").val();

      if (requirementdetails == "" && enqtype != "postajob") {
        alertify.alert("Please write something");
        flag = 1;
      } else {
        if (loggedin == "1") {
          flag = 1;
          triggercommunicate();
        } else {
          finalstep += stepinterval;
          determineprogressbar(finalstep);
        }
      }
    } else if (currentstep == "signinup") {
      regstatus = "new";

      if (regstatus == "new") {
        //$('.formlebel_one[data-step="signinup"]').find('.frmtitle').html('Provide your basic details below');

        reg_name = $("#reg_name").val();
        reg_email = $("#reg_email").val();
        reg_mobile = $("#reg_mobile").val();
        showcontact = $("#showcontact").val();
        studyingatgrade = $("#studyingatgrade").val();

        if (reg_name == "") {
          alertify.alert("Enter your name");
          flag = 1;
        } else if (reg_email == "") {
          alertify.alert("Enter your email address");
          flag = 1;
        } else if (!isEmail(reg_email)) {
          alertify.alert("Enter proper email address");
          flag = 1;
        } else if (reg_mobile == "") {
          alertify.alert("Enter your mobile number");
          flag = 1;
        } else if (isNaN(reg_mobile)) {
          alertify.alert("Mobile number must be numeric");
          flag = 1;
        } else if (showcontact == "") {
          alertify.alert("Select your privacy");
          flag = 1;
        } else if (mobileverified == 0) {
          alertify.alert("Please verify your mobile number");
          flag = 1;
        } else {
          if (!$("input[name='agreepref']").is(":checked")) {
            alertify.alert(
              "Please verify that your tutor requirement is genuine and all the information provided here is correct"
            );
            flag = 1;
          } else {
            triggercommunicate();

            flag = 1;
          }
        }
      }
    }

    if (flag == 0) {
      $(".formlebel_one").hide();

      nextelement.show();

      $(".backbtn").show();
    }
    // }
  });

  $(document).on("click", ".backbtn", function (e) {
    e.preventDefault();
    e.stopPropagation();

    var currentelement = $(".formlebel_one:visible");
    var prevelement = currentelement.prev(".formlebel_one");
    var currentstep = currentelement.attr("data-step");

    $(".formlebel_one").hide();

    if (prevelement !== undefined) {
      var chckul = prevelement.find("ul").find("li").length;
      var textarea = prevelement.find("textarea").length;
      var switchel = prevelement.find(".switch").length;
      var locdropdn = prevelement.find(".locdropdn").length;

      //alert(chckul);

      if (chckul == 0 && textarea == 0 && switchel == 0 && locdropdn == 0) {
        prevelement = prevelement.prev(".formlebel_one");
      }

      prevelement.show();

      var isfirst = prevelement.is(":first-child");

      if (isfirst) {
        $(".backbtn").hide();
        $(".topsection").show();
      }

      finalstep -= stepinterval;
      determineprogressbar(finalstep);
    }

    if (currentstep == "subject") {
      $(".searchbox").attr("placeholder", "Search Grade");
      $(".searchbox").hide();
      $(".searchboxcontainer").css("display", "none");
    }
    if (currentstep == "second_page") {
      $(".searchbox").attr("placeholder", "Search Subject");
      $(".searchbox").hide();
      finalstep = 0;
    }
    if (currentstep == "location") {
      $(".searchbox").attr("placeholder", "Search Curriculum");
      $(".searchbox").hide();
      $(".searchboxcontainer").css("display", "none");

      var boardlistchild = $(".boardlist li").length;

      if (!boardlistchild) {
        $(".searchbox").attr("placeholder", "Search Subject");
        $(".searchbox").hide();
        $(".searchboxcontainer").css("display", "none");
      }
    }
    if (currentstep == "area") {
      $(".searchbox").attr("placeholder", "Search City");
      $(".searchbox").hide();
      $(".searchboxcontainer").css("display", "none");
    }
  });

  $(".formlebel_one:first").show();
  //$('.formlebel_one[data-step="otpscreen"]').show();

  $(document).on("keyup", ".searchbox", function () {
    var val = $(this).val().toLowerCase();

    var elementstosearch = $(this)
      .closest("div.searchboxcontainer")
      .next()
      .find(".subject_text");

    $(this).closest("div.searchboxcontainer").next().find("li").hide();

    elementstosearch.each(function (i) {
      var item = elementstosearch.eq(i).html().toLowerCase();

      var indexof = item.indexOf(val, 0);

      if (indexof != -1) {
        elementstosearch.eq(i).closest("li").show();
      }
    });
  });

  $(document).on(
    "keyup blur change mouseenter",
    "#requirementdetails",
    function () {
      var val = $(this).val();
      var charcount = val.length;
      var chartext = charcount + " / " + characterlimit + " remaining";

      if (charcount <= characterlimit) {
        $(".wordcount").html(chartext);
      } else {
        val = val.substr(0, characterlimit);
        var charcount = val.length;
        var chartext = charcount + " / " + characterlimit + " remaining";
        $(".wordcount").html(chartext);
        $("#requirementdetails").val(val);
      }
    }
  );

  $(".wordcount").html("0 / " + characterlimit + " remaining");
  $("#requirementdetails").attr("size", characterlimit);
  $("#requirementdetails").attr("max-length", characterlimit);

  $(document).on("click", ".resendotp", function () {
    showloader();

    $.ajax({
      url: resendotpurl,
      type: "POST",
      dataType: "json",
      data: {
        act: "resendotp",
      },
      success: function (data) {
        hideloader();

        if (data.status) {
          alertify.alert("OTP has been resent to your mobile number");
        } else {
          alertify.alert("Oops! Something went wrong!");
        }
      },
    });
  });

  /********************************* Seg Sub Dropdown ******************************************/
  var typingTimer;
  var doneTypingInterval = 500;

  $("#subject_textbox").keyup(function () {
    var thisval = $(this);

    clearTimeout(typingTimer);

    typingTimer = setTimeout(function () {
      var searchtxt = thisval.val().capitalize();

      if (searchtxt.length >= 2) {
        var feedUrl = segsubfeedurl;

        $.post(
          feedUrl,
          {
            searchtxt: searchtxt,
          },
          function (data) {
            var datalength = data.length;

            var segsubhtml = "";

            if (datalength) {
              for (i = 0; i < datalength; i++) {
                segsubhtml +=
                  '<li><a href="javascript:void(0);" data-segid="' +
                  data[i]["segmentid"] +
                  '" data-subid="' +
                  data[i]["subjectid"] +
                  '" data-name="' +
                  data[i]["entitytitle"] +
                  '">' +
                  data[i]["entitytitle"] +
                  "</a></li>";
              }
            }

            if (segsubhtml != "") {
              $("#autosuggestsegsub").html(segsubhtml);

              var isvis = $("#autosuggestsegsubparent").is(":visible");

              if (!isvis) {
                $("#autosuggestsegsubparent").slideDown(300, function () {
                  $("#autosuggestsegsubparent").mCustomScrollbar("destroy");

                  $("#autosuggestsegsubparent").mCustomScrollbar({
                    scrollButtons: {
                      enable: true,
                    },
                  });

                  setTimeout(function () {
                    $("#autosuggestsegsubparent").mCustomScrollbar("update");
                  }, 1000);
                });
              }

              $("#autosuggestsegsub li a").each(function () {
                var linktxt = $(this).text();

                linktxt = linktxt.replace(
                  searchtxt.toLowerCase(),
                  "<strong>" + searchtxt.toLowerCase() + "</strong>"
                );
                linktxt = linktxt.replace(
                  searchtxt,
                  "<strong>" + searchtxt + "</strong>"
                );

                $(this).html(linktxt);
              });
            }
          }
        );
      } else {
        $("#autosuggestsegsubparent").slideUp(300);
      }
    }, doneTypingInterval);
  });

  $(document).on("click", "#autosuggestsegsub li a", function () {
    segmentid = $(this).attr("data-segid");
    subjectid = $(this).attr("data-subid");

    console.log(segmentid + "~~" + subjectid);

    segsubtxt = $(this).attr("data-name");

    $("#subject_textbox").val(segsubtxt);

    $("#autosuggestsegsubparent").slideUp(300);

    var boardhtml = "";

    $.ajax({
      url: fetchboardurl,
      type: "POST",
      dataType: "json",
      data: {
        act: "fetchboards",
        segmentid: segmentid,
      },
      success: function (data) {
        if (data.length > 0) {
          data.forEach(function (item) {
            boardhtml +=
              '<li><input name="second_page" class="subject_radio board_radio" id="board_' +
              item.boardid +
              '" value="' +
              item.boardid +
              '" type="radio"><label for="board_' +
              item.boardid +
              '" class="subject_text">' +
              item.boardtitle +
              "</label></li>";
          });

          $(".boardlist").html(boardhtml);

          hasboardpostjob = true;
        } else {
          hasboardpostjob = false;
        }

        if (hasboardpostjob) stepcount++;
        stepinterval = Math.round(100 / stepcount);
      },
    });
  });

  $("#post_req_seg_sub_select").on("click", ".segsubject", function () {
    var locval = $(this).attr("data-id");
    var loctxt = $(this).attr("data-val");

    $("#post_req_seg_sub_select").find(".city_span").text(loctxt);

    var locValArr = locval.split("<#>");

    segmentid = locValArr[0];
    subjectid = locValArr[1];

    var loctxtArr = loctxt.split(" >> ");

    var loctxtfinal = loctxtArr[1] + " in " + loctxtArr[0];

    $("#hire_segmentsubject").val(loctxtfinal);

    $("#segmentid").val(segmentid);
    $("#subjectid").val(subjectid);

    $("#post_req_seg_sub_select").removeClass("errbrdr");
    $("#post_req_seg_sub_select").next().html("");

    checkjobpostedwithsegsubforinvitation(segmentid, subjectid);
  });

  $("#post_req_seg_sub_select").click(function (e) {
    $("ul.select_down").slideUp("fast");

    e.stopPropagation();

    var isvis = $(this).find("ul").is(":visible");

    if (!isvis) {
      $(this).find("ul").slideDown("fast");
    } else {
      $(this).find("ul").slideUp("fast");
    }
  });

  /********************************* Seg Sub Dropdown ******************************************/

  switch (enqtype) {
    case "postajob":
      stepcount = 5;
      stepinterval = Math.round(100 / stepcount);
      break;
  }

  //alert(stepinterval);

  determineprogressbar(finalstep);

  $('.otptypeholder li input[type="text"]').attr("maxlength", 1);
  $('.otptypeholder li input[type="text"]').addClass("numericonly");
  $('.otptypeholder li input[type="text"]').addClass("otpval");

  $(document).on("keyup blur", "#reg_mobile", function () {
    var mobile = $(this).val();
    var flag = 0;
    //alert(mobile);

    var flag = 0;

    if (mobile == "") {
      //alertify.alert("Enter your 10 digit mobile number");
      flag = 1;
    } else if (isNaN(mobile)) {
      //alertify.alert("Mobile number must be numeric");
      //flag = 1;
    } else if (mobile.length != maxlenmobile) {
      //alertify.alert("Mobile number must be of 10 digits");
      flag = 1;
    }

    /*var firstdigit = mobile.charAt(0);
        if (firstdigit == 0 && mobile != '') {
        	alertify.alert("Mobile number should be start without 0");
        	$("#reg_mobile").val();
        	flag = 1;
        }*/

    /*if (flag == 0) {
        	
        	$('.send_code').show();
        } else {
        	
        	$('.send_code').hide();
        }*/
  });

  $(document).on("click", ".send_code", function () {
    var mobile = $("#reg_mobile").val();
    var flag = 0;

    //alert(mobile);

    if (mobile == "") {
      alertify.alert("Enter your 10 digit mobile number");
      flag = 1;
    } else if (isNaN(mobile)) {
      alertify.alert("Mobile number must be numeric");
      flag = 1;
    } else if (mobile.length != maxlenmobile) {
      alertify.alert("Mobile number must be of " + maxlenmobile + " digits");
      flag = 1;
    }

    if (flag == 0) {
      showloader();

      $.ajax({
        url: sendotpurl,
        type: "POST",
        dataType: "json",
        data: {
          act: "sendotp",
          usermobile: mobile,
        },
        success: function (data) {
          hideloader();

          if (data.status) {
            console.log(data.value);
            $("#otp_messagetext").show();
            $("#notetext").hide();
            $("#otp_messagetext").html(
              "6 digit OTP has been sent to <strong>" +
                mobile +
                "</strong>. It may take several minutes to get OTP."
            );
            $(".otptypeholder").show();
            $(".resend_code").show();
            $(".send_code").hide();
          } else {
            if (data.message == "verified_member") {
              $(".send_code").hide();
              $("#notetext").hide();
              $("#reg_mobile").prop("readonly", true);
              $("#otp_messagetext").show();
              $("#otp_messagetext").html("<strong>Mobile Verified.</strong>");
              mobileverified = 1;
            }

            if (data.message == "exceed_daily_limit") {
              $(".send_code").hide();
              $("#reg_mobile").prop("readonly", true);
              $("#notetext").html(
                "<strong>You have exceeded your daily limit. Try again after 24 hours</strong>"
              );
              mobileverified = 0;
            }
            //alertify.alert("Oops! Something went wrong!");
          }
        },
      });
    }
  });

  $(document).on("click", ".resend_code", function () {
    var mobile = $("#reg_mobile").val();
    var flag = 0;

    //alert(mobile);

    if (mobile == "") {
      alertify.alert("Enter your 10 digit mobile number");
      flag = 1;
    } else if (isNaN(mobile)) {
      alertify.alert("Mobile number must be numeric");
      flag = 1;
    } else if (mobile.length != maxlenmobile) {
      alertify.alert("Mobile number must be of " + maxlenmobile + " digits");
      flag = 1;
    }

    if (flag == 0) {
      showloader();

      $.ajax({
        url: sendotpurl,
        type: "POST",
        dataType: "json",
        data: {
          act: "resend_otp",
          usermobile: mobile,
        },
        success: function (data) {
          hideloader();

          if (data.status) {
            console.log(data.value);
            $("#notetext").hide();
            $("#otp_messagetext").show();
            $("#otp_messagetext").html(
              "6 digit OTP has been sent to <strong>" +
                mobile +
                "</strong>. It may take several minutes to get OTP."
            );
            $(".otptypeholder").show();
            $(".resend_code").show();
          } else {
            if (data.message == "verified_member") {
              $(".send_code").hide();
              $("#reg_mobile").prop("readonly", true);
              $("#otp_messagetext").show();
              $("#otp_messagetext").html("<strong>Mobile Verified.</strong>");
              mobileverified = 1;
            }

            if (data.message == "exceed_daily_limit") {
              $(".otptypeholder").hide();
              $("#reg_mobile").prop("readonly", true);
              $("#otp_messagetext").hide();
              $("#notetext").show();
              $("#notetext").html(
                "<strong>You have exceeded your daily limit. Try again after 24 hours</strong>"
              );
              mobileverified = 0;
            }
            //alertify.alert("Oops! Something went wrong!");
          }
        },
      });
    }
  });

  $(document).on("keyup", '.otptypeholder li input[type="text"]', function () {
    $(this).removeClass("error_border");
    var val = $(this).val();
    var nextelement = $(this).next();
    var prevelement = $(this).prev();

    //alert($(this).parent().attr('class'));

    if (val.length == 1 && nextelement !== undefined && !isNaN(val)) {
      nextelement.focus();
    }
    if (val.length == 0 && prevelement !== undefined && !isNaN(val)) {
      prevelement.focus();
    }

    otpvalue = pickotpval();
    $("#otpvalue").val(otpvalue);

    var otpval = $("#otpvalue").val();
    var otplength = otpval.length;

    if (otplength == 6) {
      validateotp();
    }
  });
});

function pickotpval() {
  var otpval = "";

  $('.otptypeholder li input[type="text"]').each(function () {
    var val = $(this).val();
    otpval += val;
  });

  return otpval;
}

function validateotp() {
  var otpvalue = $("#otpvalue").val();
  var otpvaluelen = $("#otpvalue").val().length;
  var verifyotp = false;

  var mobile = $("#reg_mobile").val();

  if (otpvaluelen == 6) {
    verifyotp = true;
  } else {
    verifyotp = false;
  }

  if (verifyotp) {
    showloader();

    $.ajax({
      url: sendotpurl,
      type: "POST",
      dataType: "json",
      data: {
        act: "verify_otp",
        otpvalue: otpvalue,
        usermobile: mobile,
      },
      success: function (data) {
        hideloader();

        //alert(data);

        if (data.status) {
          $(".otptypeholder").hide();
          $(".mobile_verify").show();
          $(".send_code").hide();
          $("#reg_mobile").prop("readonly", true);

          $("#otp_messagetext").html("<strong>Mobile Verified.</strong>");
          mobileverified = 1;
        } else {
          if (data.message == "otp_verify_failed") {
            alertify.alert("Wrong OTP. Please Enter Correct OTP");
            $('.otptypeholder li input[type="text"]').addClass("error_border");
          }

          if (data.message == "verified_member") {
            $(".send_code").hide();
            $("#reg_mobile").prop("readonly", true);
            $("#otp_messagetext").show();
            $(".mobile_verify").show();
            $("#otp_messagetext").html("<strong>Mobile Verified.</strong>");
            $(".otptypeholder").hide();
            mobileverified = 1;
          }
        }
      },
    });
  }
}

function showloader() {
  $(".blurback").show();
  $(".universalloader").show();
}

function hideloader() {
  $(".blurback").hide();
  $(".universalloader").hide();
}

function triggercommunicate() {
  showloader();

  $.ajax({
    url: triggercommurl,
    type: "POST",
    dataType: "json",
    data: {
      act: "triggercommunicate",
      segmentid: segmentid,
      subjectid: subjectid,
      boardid: boardid,
      locid: locid,
      areaid: areaid,
      requirementdetails: requirementdetails,
      regstatus: regstatus,
      reg_name: reg_name,
      reg_email: reg_email,
      reg_mobile: reg_mobile,
      reg_pass: reg_pass,
      reg_con_pass: reg_con_pass,
      login_email: login_email,
      login_pass: login_pass,
      classid: classid,
      memberid: memberid,
      membertype: membertype,
      enqtype: enqtype,
      othertutorcontact: othertutorcontact,
      showcontact: showcontact,
      studyingatgrade: studyingatgrade,
      loc_pref: loc_pref,
      mobileverified: mobileverified,
    },
    success: function (data) {
      //alert(data.status);

      if (data.status == false) {
        alertify.alert("Oops. Something went wrong");
      }

      if (data.type == "new") {
        $(".formlebel_one").hide();

        //$('.formlebel_one[data-step="otpscreen"]').show();
        //    $('.formlebel_one[data-step="otpscreen"]').find('.other_information').show();

        $("#hideclass").hide();
        $("#hideclass2").hide();
        $("#hideclass3").hide();
        location.href = data.redurl;

        var resmsg = "";

        switch (data.enqtype) {
          case "postajob":
            resmsg = "Your requirement has been posted successfully";
            break;
          case "contact":
            resmsg =
              "Your requirement has been posted and invitation has been sent to the selected member.";
            break;
          case "requestcallback":
            resmsg = "Callback request has been sent to the selected member.";
            break;
          case "viewphone":
            resmsg = "Callback request has been sent to the selected member.";
            break;
          case "viewwhatsapp":
            resmsg = "Callback request has been sent to the selected member.";
            break;
          case "sendmessage":
            resmsg = "Message has been sent to the selected member.";
            break;
          case "courseenquiry":
            resmsg = "Course enquiry has been sent to the selected member.";
            break;
        }

        // $('.success_message_holder').find('p').html(resmsg);

        //$('.success_message_holder').find('a.finishbtn').html('Go to Myaccount');

        //$('.success_message_holder').find('a.finishbtn').attr('href',data.redurl);

        // $('.success_message_holder').show();

        //showloader();

        /* setTimeout(function(){

                     hideloader();

                     location.href = data.redurl;

                 },2000);*/

        $(".backbtn").hide();
      }

      hideloader();
    },
  });
}

function getLocation(locid) {
  var loctxtv = $("#" + locid).val();

  var areahtml = "";

  $.ajax({
    url: fetchareaurl,
    type: "POST",
    dataType: "json",
    data: {
      act: "fetchareas",
      locid: loctxtv,
    },
    success: function (data) {
      var locname = data.locname;
      var areas = data.areas;

      if (areas.length > 0) {
        areahtml = '<option value="">Select Area</option>';

        areas.forEach(function (item) {
          var str = item.areaname;
          str = str.toLowerCase().replace(/\b[a-z]/g, function (letter) {
            return letter.toUpperCase();
          });

          areahtml +=
            '<option value="' + item.areaid + '">' + str + "</option>";
        });

        $(".arealist").html(areahtml);
      }
    },
  });
}

function filterdropdown(element, what) {
  var valThis = $(element).val().toLowerCase();
  $("." + what + ">li").each(function () {
    var text = $(this).text().toLowerCase();
    text.indexOf(valThis) == 0 ? $(this).show() : $(this).hide();
  });
}

function getsubject(id, sbjname, thisval, sbjval) {
  $("li").removeClass("active");
  $("#subject").val(sbjname);
  $("#subject_initial").val(sbjname);
  var hasil = id.split("-");
  $("#subjectid").val(hasil[0]);
  $("#segmentid").val(hasil[1]);
  var selfhtml = $(thisval).html();
  $(thisval).parent().parent().prev().val(selfhtml);
  $("#chagesubj").html(sbjname);
  //$('#default').html('');
  $("#" + id).addClass("active");
  $(".theList").slideUp("fast");
}

(function ($) {
  $(window).load(function () {
    $(".matchsubject_scroll").mCustomScrollbar({
      scrollButtons: {
        enable: true,
      },
    });
  });
})(jQuery);

function isEmail(email) {
  return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(
    email
  );
}

String.prototype.capitalize = function () {
  return this.charAt(0).toUpperCase() + this.slice(1);
};

function determineprogressbar(finalstep) {
  //alert(finalstep);
  $(".processtext").html(finalstep + "%");
  $(".probar").css("width", finalstep + "%");
}

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : event.keyCode;

  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  } else if (/[^a-zA-Z0-9\-\/]/.test(charCode)) {
    return false;
  } else {
    return true;
  }
}
