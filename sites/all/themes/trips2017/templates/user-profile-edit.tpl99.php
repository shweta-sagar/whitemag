<div id="user-edit-<?php print $user->uid; ?>" class="user-edit-form">
	<div class="user-edit-container" id="user-edit-container">
		<?php print render($form['form_id']); ?>
		<?php print render($form['form_build_id']); ?>
		<?php print render($form['form_token']); ?>
		<input type="input" id="ViewMode" class="currentedittab" name="ViewMode" value="" style="display: none;">
		
		<div class="useredittabcontainer treking_tab" id="useredittabcontainer">
		<div class="white-wrapper">
			<ul class="usereditlist nav nav-tabs"  role="tablist">
				<li id="accountinfo" class="useredittab accountinfo" onclick="clicktab('accountinfo');" role="presentation">
				Account
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
				</li>
				<li id="changeprofile" class="useredittab changeprofile" onclick="clicktab('changeprofile');"role="presentation">
				Contact
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                  </div>
				</li>
				<li id="changeadditionalprofile" class="useredittab changeadditionalprofile" onclick="clicktab('changeadditionalprofile');" role="presentation">
				Personal
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
				</li>
				<li id="changeotherinfo" class="useredittab changeotherinfo" onclick="clicktab('changeotherinfo');" role="presentation">
				Other
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
				</li>
				<li id="changepassword" class="useredittab changepassword" onclick="clicktab('changepassword');" role="presentation">
				Change Password
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
				</li>
				<li id="showalledit" class="useredittab showalledit" onclick="clicktab('showalledit');" role="presentation">
				Show All
				<div class="double_arrow">
                      <p class="arrow_one"></p>
                      <p class="arrow_two"></p>
                    </div>
				</li>
			</ul>
		</div>	
		</div>
		
		<div class="usereditborder" id="usereditborder">
			<div class="showalledit toggleelement"><h3>Account Information</h3></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['account']['name']); ?></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['field_full_name']); ?></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['field_middle_name']); ?></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['field_last_name']); ?></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['account']['mail']); ?></div>
			<div class="showalledit toggleelement"><hr></div>
			<div class="showalledit toggleelement"><h3>Change Password</h3></div>
			<div id="currpass" class="showalledit accountinfo changepassword toggleelement"><?php print render($form['account']['current_pass']); ?></div>
			<div class="showalledit changepassword toggleelement"><?php print render($form['account']['pass']); ?></div>
			<div class="showalledit toggleelement"><hr></div>
			<div class="showalledit toggleelement"><h3>Profile Information</h3></div>
			<div class="showalledit changeprofile toggleelement"><?php print render($form['field_gender']); ?></div>
			<div class="showalledit changeprofile toggleelement"><?php print render($form['field_address']); ?></div>
			<div class="showalledit toggleelement"><hr></div>
			<div class="showalledit toggleelement"><h3>Other Information</h3></div>
			<div class="showalledit changeotherinfo toggleelement"><?php print render($form['field_dietary_restriction']); ?></div>
			<div class="showalledit changeotherinfo toggleelement"><?php print render($form['field_dietary_info']); ?></div>
			<div class="showalledit changeotherinfo toggleelement"><?php print render($form['field_allergies']); ?></div>
			<div class="showalledit changeotherinfo toggleelement"><?php print render($form['field_dob']); ?></div>
			<div class="showalledit changeotherinfo toggleelement"><?php print render($form['']); ?></div>
			<div class="showalledit toggleelement"><hr></div>
			<div class="showalledit toggleelement"><h3>Additional Profile Information</h3></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['timezone']['timezone']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['signature_settings']['signature']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['picture']['picture_current']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['picture']['picture_upload']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['picture']['picture_delete']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['account']['status']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['account']['roles']); ?></div>
			<div class="showalledit changeadditionalprofile toggleelement"><?php print render($form['account']['notify']); ?></div>
			<div class="showalledit accountinfo toggleelement"><?php print render($form['field_terms_of_use']); ?></div>
		</div>
		
		<?php print render($form['actions']); ?>
	</div><!--end user-edit container-->
	
	<script type="text/javascript">
	  afterpageload();
	  function afterpageload() {
	    var themode=getmode();
		<?php
		  print('var prevMode =  \'');
		  print($_REQUEST['ViewMode']); 
		  print('\';');
		?>
		
		switch (themode) {
		  case "chpwd":
		    prevMode = '';
			break;
		  case "chpwdonly":
		    prevMode = '';
		    break;
		}
		
		
		switch (themode) {
		  case "chpwd":
		    break;
		  case "chpwdonly":
		    break;
		  default:
		    if (prevMode.length > 0) {
			  themode = prevMode;
			}
			break;
		}
		
		
		switch (themode) {
	      case "chpwd":
		    //select the Change Password tab
		    clicktab("changepassword");
			//Hide the selector tabs to clean up the interface
		    document.getElementById("useredittabcontainer").style.display = 'none';
			break;
		  case "chpwdonly":
		    //select the Change Password tab
		    clicktab("changepassword");
			//This is used for password reset, so hide the Current Password field.
			document.getElementById("currpass").style.display='none';
			//Hide the selector tabs to clean up the interface
		    document.getElementById("useredittabcontainer").style.display = 'none';
			break;
		  case "showchpwd":
		    //Select the Change Password tab.
		    clicktab("changepassword");
			break;
		  case "showprofile":
		    //Select the Profile tab
		    clicktab("changeprofile");
			break;
		  case "showaddlprofile":
		    //Select the Additional Profile Information tab
		    clicktab("changeadditionalprofile");
			break;
		  case "showall":
		    //Select the Show All tab
		    clicktab("showalledit");
			break;
		  case "showaccount":
		  default:
		    //Select the Account Information tab. This is the default behavior.
		    clicktab("accountinfo");
            break;
	    }
	  }
	  
	  function getmode() {
	    //Get the ?viewmode= argument, if any.
	    <?php
		  print('var returnmode = \'');
		  print($_GET["viewmode"]);
		  print('\';');
		?>
	    
	    if (returnmode.length==0) {
		  //If there is no ?viewmode= argument, check to see
		  //if this is a password reset
		  returnmode = ispasswordreset()
	    }
	    
	    return returnmode;
	  }
	  
	  function ispasswordreset() {
	    //Get the ?pass-reset-token= argument, if any.
	    <?php
		  print('var passreset = \'');
		  print($_GET["pass-reset-token"]);
		  print('\';');
		?>
		
		if (passreset.length==0) {
		  //This is not a password reset, so start up in the default (normal) tab
		  return "normal";
		}
		else
		{
		  //This is a password reset. Start up with the password fields only.
		  return "chpwdonly";
		}
	  }
	  
	  function clicktab(showclass) {
	    //Get all of the elements that have the 'toggleelement' class.
	    var items = document.getElementsByClassName('toggleelement');
		var elements = document.getElementsByClassName('useredittab');
		var i=0;
		//alert(elements[0].classList );
		var j=elements.length;
		var str;
	    while (j > 0) {
			str=elements[i].classList+"";
			if(str.includes("active")){
			elements[i].classList.remove("active");
			} 
			i++;
			j--;
		}	
		document.getElementById(showclass).classList.add("active");
		//Loop through each element, looking for the 'donothide' class.
		//This will allow some elements to be displayed in all modes.
		for (var iCtr = 0; iCtr < items.length; iCtr++){
		  if (!hasClass(items[iCtr], "donothide")) {
		    //This does not have the 'donothide' class. Keep processing.
		    if (hasClass(items[iCtr], showclass)) {
			  //This is marked with the selected class (variable showclass).
			  //Make sure it is visible.
			  items[iCtr].style.display = '';
	        }
	        else
            {
			  //This is not marked with the selected class. Hide it.
	          items[iCtr].style.display = 'none';
            }
          }
        }
		//Now that the elements are shown or hidden,
		//Indicate the current tab.
	    settabproperties(showclass);
		setParameter(showclass);
	  }
	
	function settabproperties(activetab) {
	  //Get all of the elements in the user edit menu/tab list.
	  var tabs = document.getElementsByClassName('useredittab');
	  
	  //Loop through, looking for the active tab, indicated by the variable activetab.
      for (var iCtr = 0; iCtr < tabs.length; iCtr++) {
	    if (hasClass(tabs[iCtr], activetab)) {
		  //This is the active tab.
	      //tabs[iCtr].style.backgroundColor='red';
		  //tabs[iCtr].style.color='white';
		  //tabs[iCtr].style.borderColor='red';
		  //tabs[iCtr].addClass("active");
	    }
	    else
        {
		  //This is an inactive tab.
		 // tabs[iCtr].removeClass("active");
	     // tabs[iCtr].style.backgroundColor='#eeeeee';
		 // tabs[iCtr].style.color='black';
		 // tabs[iCtr].style.borderColor='#bbbbbb';
        }
      }
	}
	
	function hasClass(element, cls) {
	  //Pad the className with spaces, and search for the class (cls).
	  //cls is also padded to ensure that any results found are not substrings
	  //of other classes.
	  return (' ' + element.className + ' ').search(' ' + cls + ' ') > -1;
    }
	
	function setParameter(currTab) {
	  var newViewmode = '';
	  switch (currTab) {
	    case "accountinfo":
		  newViewmode = 'showaccount';
		  break;
		case "changeprofile":
		  newViewmode = 'showprofile';
		  break;
		case "changeadditionalprofile":
		  newViewmode = 'showaddlprofile';
		  break;
		case "changepassword":
		  newViewmode = 'showchpwd';
		  break;
		case "showalledit":
		  newViewmode = 'showall';
		  break;
		default:
		  newViewmode = "default";
		  break;
	  }
	  document.getElementById('ViewMode').value=newViewmode;
	}
	</script>
</div><!--end user-edit-->
<style>
.page-user-edit .white-wrapper{width:100%!important}
.page-user-edit footer .white-wrapper{width:80%!important}
.usereditlist li{display:inline-block; cursor:pointer;}
#usereditborder {
    margin: 1em auto;
    display: table;
    font-size: 14px;
	width:80%;
}
#usereditborder label {
    display: block;
    margin: 0;
	text-align:left;
}
.description{display:none;}

#usereditborder .form-item, 
#usereditborder .form-actions,
#usereditborder .addressfield-container-inline,
#usereditborder .user-picture
{margin: 1em auto!important;
    display: table;
    max-width:350px;
   width:350px;	
}
#usereditborder input, #usereditborder textarea,
#usereditborder select
 {
    color: #585858;
    width: 100%;
    max-width: 350px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 2px;
	min-width: 350px;
}	
#user-profile-form input[type="submit"] {
    width: 100%;
    max-width: 350px;
    padding: 7px;
    background: #5d5d5d;
    border: 0;
    border-radius: 3px;
    color: #fff;
    text-decoration: none;
	margin: 1em auto!important;
    display: table;
}
div.form-item div.password-suggestions {
    width: 350px;
    background-color: #B4B4B4;
}	

#user-profile-form .form-item-picture-delete{display:none;}
#usereditborder .form-item.form-type-radio input[type="radio"]{float: left;width: 20px;min-width:20px;}
#usereditborder .form-item.form-type-radio label{float: left;width: 30px!important;}
.useredittabcontainer.treking_tab .nav-tabs > li{width:16.5%;padding: 10px 15px;}
</style>
