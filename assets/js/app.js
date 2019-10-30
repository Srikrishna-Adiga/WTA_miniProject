/*
Author       : Dreamguys
Template Name: SmartHR - Bootstrap Admin Template
Version      : 3.2
*/

$(document).ready(function() {
	
	// Variables declarations
	
	var $wrapper = $('.main-wrapper');
	var $pageWrapper = $('.page-wrapper');
	var $slimScrolls = $('.slimscroll');
	var $sidebarOverlay = $('.sidebar-overlay');
	
	// Sidebar
	
	var Sidemenu = function() {
		this.$menuItem = $('#sidebar-menu a');
	};
	
	function init() {
		var $this = Sidemenu;
		$('#sidebar-menu a').on('click', function(e) {
			if($(this).parent().hasClass('submenu')) {
				e.preventDefault();
			}
			if(!$(this).hasClass('subdrop')) {
				$('ul', $(this).parents('ul:first')).slideUp(350);
				$('a', $(this).parents('ul:first')).removeClass('subdrop');
				$(this).next('ul').slideDown(350);
				$(this).addClass('subdrop');
				$(".submenu .active").parent().parent().css('display','block');
			} else if($(this).hasClass('subdrop')) {
				$(this).removeClass('subdrop');
				$(this).next('ul').slideUp(350);
			}
		});
		$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
	}
	
	// Sidebar Initiate
	init();
	
	// Sidebar overlay
	
	function sidebar_overlay($target) {
		if($target.length) {
			$target.toggleClass('opened');
			$sidebarOverlay.toggleClass('opened');
			$('html').toggleClass('menu-opened');
			$sidebarOverlay.attr('data-reff', '#' + $target[0].id);
		}
	}
	
	// Mobile menu sidebar overlay
	
	$(document).on('click', '#mobile_btn', function() {
		var $target = $($(this).attr('href'));
		sidebar_overlay($target);
		$wrapper.toggleClass('slide-nav');
		$('#task_window').removeClass('opened');
		return false;
	});
	
	// Chat sidebar overlay
	
	$(document).on('click', '#task_chat', function() {
		var $target = $($(this).attr('href'));
		sidebar_overlay($target);
		return false;
	});
	
	// Sidebar overlay reset
	
	$sidebarOverlay.on('click', function() {
		var $target = $($(this).attr('data-reff'));
		if($target.length) {
			$target.removeClass('opened');
			$('html').removeClass('menu-opened');
			$(this).removeClass('opened');
			$wrapper.removeClass('slide-nav');
		}
		return false;
	});
	
	// Select 2
	
	if($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}
	
	// Modal Popup hide show

	if($('.modal').length > 0 ){
		var modalUniqueClass = ".modal";
		$('.modal').on('show.bs.modal', function(e) {
		  var $element = $(this);
		  var $uniques = $(modalUniqueClass + ':visible').not($(this));
		  if ($uniques.length) {
			$uniques.modal('hide');
			$uniques.one('hidden.bs.modal', function(e) {
			  $element.modal('show');
			});
			return false;
		  }
		});
	}
	
	// Floating Label

	if($('.floating').length > 0 ){
		$('.floating').on('focus blur', function (e) {
		$(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
		}).trigger('blur');
	}
	
	// Sidebar Slimscroll

	if($slimScrolls.length > 0) {
		$slimScrolls.slimScroll({
			height: 'auto',
			width: '100%',
			position: 'right',
			size: '7px',
			color: '#ccc',
			wheelStep: 10,
			touchScrollStep: 100
		});
		var wHeight = $(window).height() - 60;
		$slimScrolls.height(wHeight);
		$('.sidebar .slimScrollDiv').height(wHeight);
		$(window).resize(function() {
			var rHeight = $(window).height() - 60;
			$slimScrolls.height(rHeight);
			$('.sidebar .slimScrollDiv').height(rHeight);
		});
	}
	
	// Page Content Height

	var pHeight = $(window).height();
	$pageWrapper.css('min-height', pHeight);
	$(window).resize(function() {
		var prHeight = $(window).height();
		$pageWrapper.css('min-height', prHeight);
	});
	
	// Date Time Picker
	
	if($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY',
			icons: {
				up: "fa fa-angle-up",
				down: "fa fa-angle-down",
				next: 'fa fa-angle-right',
				previous: 'fa fa-angle-left'
			}
		});
	}
	
	// Datatable

	if($('.datatable').length > 0) {
		$('.datatable').DataTable({
			"bFilter": false,
		});
	}
	
	// Tooltip

	if($('[data-toggle="tooltip"]').length > 0) {
		$('[data-toggle="tooltip"]').tooltip();
	}
	
	// Email Inbox

	if($('.clickable-row').length > 0 ){
		$(".clickable-row").click(function() {
			window.location = $(this).data("href");
		});
	}

	// Check all email
	
	$(document).on('click', '#check_all', function() {
		$('.checkmail').click();
		return false;
	});
	if($('.checkmail').length > 0) {
		$('.checkmail').each(function() {
			$(this).on('click', function() {
				if($(this).closest('tr').hasClass('checked')) {
					$(this).closest('tr').removeClass('checked');
				} else {
					$(this).closest('tr').addClass('checked');
				}
			});
		});
	}
	
	// Mail important
	
	$(document).on('click', '.mail-important', function() {
		$(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
	});
	
	// Summernote
	
	if($('.summernote').length > 0) {
		$('.summernote').summernote({
			height: 200,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
			focus: false                 // set focus to editable area after initializing summernote
		});
	}
	
	// Task Complete
	
	$(document).on('click', '#task_complete', function() {
		$(this).toggleClass('task-completed');
		return false;
	});
	
	// Multiselect

	if($('#customleave_select').length > 0) {
		$('#customleave_select').multiselect();
	}
	if($('#edit_customleave_select').length > 0) {
		$('#edit_customleave_select').multiselect();
	}

	// Leave Settings button show
	
	$(document).on('click', '.leave-edit-btn', function() {
		$(this).removeClass('leave-edit-btn').addClass('btn btn-white leave-cancel-btn').text('Cancel');
		$(this).closest("div.leave-right").append('<button class="btn btn-primary leave-save-btn" type="submit">Save</button>');
		$(this).parent().parent().find("input").prop('disabled', false);
		return false;
	});
	$(document).on('click', '.leave-cancel-btn', function() {
		$(this).removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
		$(this).closest("div.leave-right").find(".leave-save-btn").remove();
		$(this).parent().parent().find("input").prop('disabled', true);
		return false;
	});
	
	$(document).on('change', '.leave-box .onoffswitch-checkbox', function() {
		var id = $(this).attr('id').split('_')[1];
		if ($(this).prop("checked") == true) {
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', false);
			$("#leave_"+id+" .leave-action .btn").prop('disabled', false);
		}
	    else {
			$("#leave_"+id+" .leave-action .btn").prop('disabled', true);	
			$("#leave_"+id+" .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
			$("#leave_"+id+" .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', true);
		}
	});
	
	$('.leave-box .onoffswitch-checkbox').each(function() {
		var id = $(this).attr('id').split('_')[1];
		if ($(this).prop("checked") == true) {
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', false);
			$("#leave_"+id+" .leave-action .btn").prop('disabled', false);
		}
	    else {
			$("#leave_"+id+" .leave-action .btn").prop('disabled', true);	
			$("#leave_"+id+" .leave-cancel-btn").parent().parent().find("input").prop('disabled', true);
			$("#leave_"+id+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove();
			$("#leave_"+id+" .leave-cancel-btn").removeClass('btn btn-white leave-cancel-btn').addClass('leave-edit-btn').text('Edit');
			$("#leave_"+id+" .leave-edit-btn").prop('disabled', true);
		}
	});
	
	// Placeholder Hide

	if ($('.otp-input, .zipcode-input input, .noborder-input input').length > 0) {
		$('.otp-input, .zipcode-input input, .noborder-input input').focus(function () {
			$(this).data('placeholder', $(this).attr('placeholder'))
				   .attr('placeholder', '');
		}).blur(function () {
			$(this).attr('placeholder', $(this).data('placeholder'));
		});
	}
	
	// OTP Input
	
	if ($('.otp-input').length > 0) {
		$(".otp-input").keyup(function(e) {
			if ((e.which >= 48 && e.which <= 57) || (e.which >= 96 && e.which <= 105)) {
				$(e.target).next('.otp-input').focus();
			} else if (e.which == 8) {
				$(e.target).prev('.otp-input').focus();
			}
		});
	}
	
	// Small Sidebar

	$(document).on('click', '#toggle_btn', function() {
		if($('body').hasClass('mini-sidebar')) {
			$('body').removeClass('mini-sidebar');
			$('.subdrop + ul').slideDown();
		} else {
			$('body').addClass('mini-sidebar');
			$('.subdrop + ul').slideUp();
		}
		return false;
	});
	$(document).on('mouseover', function(e) {
		e.stopPropagation();
		if($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
			var targ = $(e.target).closest('.sidebar').length;
			if(targ) {
				$('body').addClass('expand-menu');
				$('.subdrop + ul').slideDown();
			} else {
				$('body').removeClass('expand-menu');
				$('.subdrop + ul').slideUp();
			}
			return false;
		}
	});

});

// Loader

$(window).on ('load', function (){
	$('#loader').delay(100).fadeOut('slow');
	$('#loader-wrapper').delay(500).fadeOut('slow');
});

//Maximum length validation for number type fields

function maxNumber(valu,num)
{
    var inp = document.getElementById("leng"+num).getAttribute("maxLength");
    if (valu.length > inp) valu = valu.slice(0, inp);
    
    return valu;
}

//Function to copy First Name into Manager lookup list if the toggle is moved to YES
 function addManager()
{
    if(document.getElementById("togBtn").checked === true){
        var ddl = document.getElementById("managerName");
        var option = document.createElement("OPTION");
        option.innerHTML = document.getElementById("fname").value;
        ddl.options.add(option);
        }                                            
 }

//Function to copy local address to permanent address if toggle is moved to YES 

  function fillAddress()
 {
    var same_addr=document.getElementById("same_local").checked;
    var locaddr1 = document.getElementById("locaddline1").value;
    var locaddr2 = document.getElementById("locaddline2").value;
    var locaddr3 = document.getElementById("locaddline3").value;
    var locaddr4 = document.getElementById("locaddline4").value;
                                       
    if(same_addr)
    {
        document.getElementById("peraddline1").value = locaddr1;
        document.getElementById("peraddline1").readOnly = true;
        document.getElementById("peraddline2").value = locaddr2;
        document.getElementById("peraddline2").readOnly = true;
        document.getElementById("peraddline3").value = locaddr3;
        document.getElementById("peraddline3").disabled = true;
        document.getElementById("peraddline4").value = locaddr4;
        document.getElementById("peraddline4").readOnly = true;
    }
     else
     {
        document.getElementById("peraddline1").value = '';
        document.getElementById("peraddline1").readOnly = false;
        document.getElementById("peraddline2").value = '';
        document.getElementById("peraddline2").readOnly = false;
        document.getElementById("peraddline3").value = '';
        document.getElementById("peraddline3").disabled = false;
        document.getElementById("peraddline4").value = '';
        document.getElementById("peraddline4").readOnly = false;
      }
}
      

//Wizard Script

 var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
   
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
   addPeople();
      
    document.getElementById("regForm").submit();
    
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("mandatory");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

/* Function to add employee on to page after submit */

 function addPeople() {
     
     var dt = '';
     var formelement = document.getElementById("regForm");
     const formData = new FormData(formelement);
    var object = {};
formData.forEach(function(value, key){
    object[String(key)] = value;
});
     
var jsonData = JSON.stringify(object);
   



localStorage.setItem("emp",jsonData);
     mini();
 }
     
     function mini(){
var text = localStorage.getItem("emp");
var newHtml = '';
var container;
var tempContainer;
dt = JSON.parse(text);
    
         
 var htmlTemplate = `<div class="profile-widget">
								<div class="profile-img">
									<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt=""></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{0}</a></h4>
								<div class="small text-muted">{1}</div>
							</div>
						`
   
    newHtml = htmlTemplate.replace('{0}', dt.fname).replace('{1}', dt.designation);

    tempContainer = document.createElement('div');
      tempContainer.className="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3"
    tempContainer.innerHTML = newHtml;

    container = document.getElementById("empCards");
    container.appendChild(tempContainer);
     }
  
//Funtion to check login credentials

function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.corp_id.value == "PSBLR1X01" && form.inp_id.value == "admin@xyz.com" && form.pass_id.value == "admin")
  {
    window.open('index_admin.html')/*opens the target page while Id & password matches*/
  }

 else if(form.corp_id.value == "PSBLR1X02" && form.inp_id.value == "super@xyz.com" && form.pass_id.value == "super")
  {
    window.open('index_super.html')/*opens the target page while Id & password matches*/
  }
    
  else if(form.corp_id.value == "PSBLR1X03" && form.inp_id.value == "emp@xyz.com" && form.pass_id.value == "emp")
  {
    window.open('index_emp.html')/*opens the target page while Id & password matches*/
  }
    
    else
        alert("Invalid login details")

}

//Function to go to the top of the page in the wizard

function topFunction()
{
$('#add_employee').scrollTop(0);
}


//Function to swap images in the graph field
function switchImg1(val)
{
    
var map1 = {
    "pie" : "assets/img/pie4.jpg",
    "bar1" : "assets/img/EmpVsYrs2.jpg",
    "bar2" : "assets/img/DeptVsNumber2.jpg"
};
    document.getElementById("image").src=map1[val];
    
}

function switchImg3(val)
{
    
var map3 = {
    "days30" : "assets/img/days30a.jpg",
    "days90" : "assets/img/days90a.jpg",
    "year1" : "assets/img/year1a.jpg"
};
    document.getElementById("image3").src=map3[val];
    
}

//Function to check date of birth

function checkDOB() {
        var dateString = document.getElementById('id_dateOfBirth').value;
        var myDate = new Date(dateString);
        var current_datetime = new Date();
        var today1 = current_datetime.getDate() + "/" + "0" + (current_datetime.getMonth() + 1) + "/" + current_datetime.getFullYear() ;
     var x = document.getElementById("dob_id");
        if ( dateString > today1 ) { 
                x.style.visibility = "visible";
                }
        else {       
                x.style.visibility = "hidden";
             }    
        }


//Function to validate PAN Number

 function valPan()   {
                                                
 var panVal = document.getElementById('panNumber').value;
var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
var x = document.getElementById("panhide")
if(regpan.test(panVal)){
  
    x.style.visibility = "hidden";
} else {
     x.style.visibility = "visible";
 
}
}

$('#ex1').slider({
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});