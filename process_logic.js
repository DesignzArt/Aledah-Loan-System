/**************************************
 * process register form here
***************************************/
 $(document).ready(function(){
 			// $("#getpicupandtodb").click(function() {
 			// 	$.ajax({
				// 		url : "action",
				// 		method: "POST",
				// 		data : {category:1},
				// 		success : function(data) {
				// 					$("#get_category").html(data);
				// 				}
				// 	})
 			// });
										// $("#DAezkc").click(function(){ //process forget password for client
										// 	var forgotemail = $("#updateforgotemail").val();
										// 	var forpassword = $("#updateforgotpassword").val();
										// 		$.ajax({
										// 					url 	: "jqueryprocesslogic.php",
										// 					method	: "POST",
										// 					data	: {forgotpassword:1,userforemail:forgotemail,userforpass:forpassword},
										// 					success : function(data){	
										// 								$("#forgotpasswormsg").html(data);
										// 						     }
										// 				})
										// 	})
			// cat();
			// function cat(){ 
			// 		$.ajax({
			// 			url : "act",
			// 			method: "POST",
			// 			data : {category:1},
			// 			success : function(data){
			// 						$("#shwusergrps").html(data);
			// 					}
			// 		})
			// 	}

			// $("#procrteuser").click(function(event) {  //view.prous.pro.crte.user
			// 	event.preventDefault();
			// 		var usergroup = $("#usergroup").val();
			// 		var firstname = $("#firstname").val();
			// 		var lastname = $("#lastname").val();
			// 		var email = $("#email").val();
			// 		var phonenumber = $("#phonenumber").val();
			// 		var membershipno = $("#membershipno").val();
			// 		var password = $("#password").val();
			// 		var conpassword = $("#conpassword").val();
			// 		$.ajax({
			// 			url		: "login",
			// 			method	: "POST",
			// 			data	: {userlogin:1,userEmail:email,userPassword:pass},
			// 			success	: function(data){
			// 						window.location.href = "profile";
			// 					}
			// 		})
			// }) 
	getgrouploan();		
	product();
	loancustomerpayment();
	membergrpsavings();
	grploanpayment();

	$("body").delegate(".btnloanamount","click",function(event){  //delegate customer loan- list all customers   
					event.preventDefault();
			var loanlimit  = $("#loanlimit").val();
			var loanamount = $("#loanamount").val();
			var userID = $("#user_id").val();
				$.ajax({
					url 	: "act",
					method	: "POST",
					data	: {processloanamt:1,setuserID:userID,loanlimited:loanlimit,loanamounted:loanamount},
					success : function(data){	
								$("#displayloandetails").html(data);
						     }
				})
	});              

	$("body").delegate("#prodatereceiveditems","click",function(event) {//manage received items= date range selection,customer loan
			event.preventDefault();
			var refromdate = $("#refromdate").val();
			var retodate = $("#retodate").val();
			$.ajax({
				url		: "act",
				method	: "POST",
				data	: {receiveitemdaterange:1,refmdate:refromdate,retdate:retodate},
				success	: function(data){
							$("#receiveitemdateselection").html(data);
					}
			});
	});

	$("body").delegate("#prodatereceiveditems78","click",function(event) {//manage received items= date range selection,customer loan
			event.preventDefault();
			var refromdate = $("#refromdate").val();
			var retodate = $("#retodate").val();
			$.ajax({
				url		: "act",
				method	: "POST",
				data	: {receiveitemdaterange78:1,refmdate:refromdate,retdate:retodate},
				success	: function(data){
							$("#receiveitemdateselection78").html(data);
					}
			});
	});


	function product(){ ////////////////////////customer loan - list all customers      
			$.ajax({
				url : "act",
				method: "POST",
				data : {getproduct:1},
				success : function(data){
							$("#get_product").html(data);   
						}
			})
		}
	function getgrouploan(){ ////////////////////////customer group loan - list all groups      
			$.ajax({
				url : "act",
				method: "POST",
				data : {getgrouploan:1},
				success : function(data){
							$("#get_grouploan").html(data);   
						}
			})
		}
	function membergrpsavings(){ ////////////////////////member-group-savings - list all groups      
			$.ajax({
				url : "act",
				method: "POST",
				data : {membergrpsavings:1},
				success : function(data){
							$("#membergrpsavings").html(data);   
						}
			})
		}
	function grploanpayment(){ ////////////////////////group-loan-payment - list all groups      
			$.ajax({
				url : "act",
				method: "POST",
				data : {grploanpayment:1},
				success : function(data){
							$("#grploanpayment").html(data);   
						}
			})
		}
	function loancustomerpayment(){ /////////////////customer loan payment- list all customers      
			$.ajax({
				url : "act",
				method: "POST",
				data : {getloanproduct:1},
				success : function(data){
							$("#get_loanproduct").html(data);   
						}
			})
		}
	$("body").delegate(".category","click",function(event){  //delegate customer loan- list all customers    
					event.preventDefault();
					var cid = $(this).attr('custmid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {selected_Category:1,cat_id:cid}, 
							success : function(data){
									$("#guarantorinfo").html(data);
								}
					})

			})
	$("body").delegate(".setgrploan","click",function(event){  //delegate customer-group loan- list all customers    
					event.preventDefault();
					var cid = $(this).attr('grploanid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {setgrploan:1,grploan_id:cid}, 
							success : function(data){
									$("#setgrploan").html(data);
								}
					})

			})
	$("body").delegate(".setcustsavings","click",function(event){  //delegate customer-group loan- 
					event.preventDefault();						   // list all customer member savings
					var cid = $(this).attr('custsavingsid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {setcustsavings:1,custsavings_id:cid}, 
							success : function(data){
									$("#setcustsaving").html(data);
								}
					})

			})
	$("body").delegate(".membergrpsavings","click",function(event){  //delegate member-group-savings- list all customers    
					event.preventDefault();
					var cid = $(this).attr('membergrpsavingsid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {membergrpsavings1:1,grploan_id:cid}, 
							success : function(data){
									$("#dlmembergrpsavings").html(data);
								}
					})

			})
	$("body").delegate(".grploanpayment","click",function(event){  //delegate group-loan-payment- list all customers    
					event.preventDefault();
					var cid = $(this).attr('grploanpaymentid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {grploanpayment2:1,grploan_id:cid}, 
							success : function(data){
									$("#dlgrploanpayment").html(data);
								}
					})

			})
	$("body").delegate(".payloan","click",function(event){  //customer loan payment- list all customers     
					event.preventDefault();
					var cid = $(this).attr('payloanid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {selected_loanpayment:1,payloan_id:cid}, 
							success : function(data){
									$("#loanpayment").html(data);
								}
					})

			})
	$("body").delegate(".grploanpymnt","click",function(event){  //customer Group-loan payment- list all customers     
					event.preventDefault();
					var cid = $(this).attr('grploanpymntid');
					$.ajax({
							url 	: "act",
							method	: "POST",
							data 	: {selected_grploanpymnt:1,paygrploan_id:cid}, 
							success : function(data){
									$("#grouploanpayment").html(data);
								}
					})

			})
//////////////////////////////////////////////////////////////////////////////APPROVE INDIVIDUAL LOAN
	$("body").delegate(".approveloan","click",function(event){  
			event.preventDefault();
			var loanapproved = $(this).attr('loanapproved');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {loanapproved:1,dltborowerid_pid:loanapproved}, 
					success : function(data) {
							$("#get_loanapproved").html(data); 
						}
			});
	});

	////////////////////////////////////////////////////////////update loan approval code
	$("body").delegate("#confirmloancode","click",function(event) {  
			event.preventDefault();
				var entercodeloan = $("#entercodeloan").val();
			 	var hiloanapprovalcode = $("#hiloanapprovalcode").val();
			$.ajax({
					url 	: "act",
					method	: "POST",
					data	: {GETapprovalcode:1,sethiloanapprovalcode:hiloanapprovalcode,setentercodeloan:entercodeloan},
					success : function(data) {
							  $("#approvalcode").html(data);  
						    }
				});
	});
//////////////////////////////////////////////////////////////////////////////DECLINE INDIVIDUAL LOAN
	$("body").delegate(".declineloan","click",function(event){  
			event.preventDefault();
			var loandeclined = $(this).attr('loandeclined');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {loandeclined:1,loandeclined_pid:loandeclined}, 
					success : function(data) {
							$("#get_loandeclined").html(data); 
						}
			});
	});
	////////////////////////////////////////////////////////////update loan decline code
	$("body").delegate("#confirmloandeclinecode","click",function(event) {  
			event.preventDefault();
				var entercodedeclineloan = $("#entercodeloan").val();
			 	var hiloandeclinecode = $("#hiloandeclinecode").val();
			$.ajax({
					url 	: "act",
					method	: "POST",
					data	: {GETdeclinecode:1,sethiloandeclineecode:hiloandeclinecode,setenterdeccodeloan:entercodedeclineloan},
					success : function(data) {
							  $("#declinecode").html(data);  
						    }
				});
	});
    //-----------------------------------------------------------------------------------

//-----------------------------------------------------------------------------STT GROUP LOAN
////////////////////////////////////////////////////////////////////////APPROVE GROUP LOAN
	$("body").delegate(".approveloangroup","click",function(event){  
			event.preventDefault();
			var loanapprovedgroup = $(this).attr('loanapprovedgroup');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {loanapprovedgroup:1,dltborowerid_pidgroup:loanapprovedgroup}, 
					success : function(data) {
							$("#get_loanapprovedgroup").html(data); 
						}
			});
	});

	////////////////////////////////////////////////////////////update loan approval code
	$("body").delegate("#confirmloancodegroup","click",function(event) {  
			event.preventDefault();
				var entercodeloan = $("#entercodeloan").val();
			 	var hiloanapprovalcode = $("#hiloanapprovalcode").val();
			$.ajax({
					url 	: "act",
					method	: "POST",
					data	: {GETapprovalcodegroup:1,sethiloanapprovalcode:hiloanapprovalcode,setentercodeloan:entercodeloan},
					success : function(data) {
							  $("#approvalcodegroup").html(data);  
						    }
				});
	});
///////////////////////////////////////////////////////////////////////////DECLINE GROUP LOAN  sttt here
	$("body").delegate(".declineloangroup","click",function(event){  
			event.preventDefault();
			var loandeclinedgroup = $(this).attr('loandeclinedgroup');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {loandeclinedgroup:1,loandeclined_pidgroup:loandeclinedgroup}, 
					success : function(data) {
							$("#get_loandeclinedgroup").html(data); 
						}
			});
	});
	////////////////////////////////////////////////////////////update loan decline code
	$("body").delegate("#confirmloandeclinecodegroup","click",function(event) {  
			event.preventDefault();
				var entercodedeclineloan = $("#entercodeloan").val();
			 	var hiloandeclinecode = $("#hiloandeclinecode").val();
			$.ajax({
					url 	: "act",
					method	: "POST",
					data	: {GETdeclinecodegroup:1,sethiloandeclineecode:hiloandeclinecode,setenterdeccodeloan:entercodedeclineloan},
					success : function(data) {
							  $("#declinecodegroup").html(data);  
						    }
				});
	});
    //--------------------------------------------------END GROUP LOANS-


    //LOANS
    //view.procustomerloan.pro.crt.process customer loan
	$("#procustomerloan").click(function(){                      
			$.ajax({
					url 	: "procrtnewcustomerloan.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtnewcustomerloan").html(data);
						    }
				});
	});
	//view.progrouploan.pro.crt.process group loan
	$("#progrouploan").click(function(){                       
			$.ajax({
					url 	: "procrtnewgrouploan.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtnewgrouploan").html(data);
						    }
				});
	});
	//view.progrouploan.pro.crt.process customer loan payment
	$("#procustoloanpayment").click(function() {                       
			$.ajax({
					url 	: "procustomerloanpayment.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procustomerloanpayment").html(data);
						    }
				});
	});
	//view.progrouploan.pro.crt.process customer loan group payment
	$("#procustoloangrouppayment").click(function() {                       
			$.ajax({
					url 	: "procustomerloangrouppayment.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procustomerloangrouppayment").html(data);
						    }
				});
	});
	//-------------------------------------------------------------------------------------
	//view.dltgrp.dlt.member chame grps (delete chama groups)
	$("body").delegate(".dltchamagrps","click",function(event){     
		event.preventDefault();
		var deletegrpid = $(this).attr('chamagrpid');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {chamagrpid:1,dltgrp_pid:deletegrpid}, 
				success : function(data) {
						$("#get_dltchamagrp").html(data);
					}
		});
	});  
	$("body").delegate(".yesdltchamagroup","click",function(event) {  
			event.preventDefault();
			var yeschamagroup = $(this).attr('yeschamagroup');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {yeschamagroup:1,specificchamegrp:yeschamagroup}, 
				success : function(data) {
						$("#getyesficgroup").html(data);
					}
		});
	});
	//-------------------------------------------------------------------------------------
	//view.dltgrp.dlt.permission grps
	$("body").delegate(".deletegroups","click",function(event){   
		event.preventDefault();
		var deletegrpid = $(this).attr('deletegrpid');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {deletegrpid:1,dltgrp_pid:deletegrpid}, 
				success : function(data) {
						$("#get_deletegrp").html(data);
					}
		});
	});  
	$("body").delegate(".yesdltspecificgroup","click",function(event) {  
			event.preventDefault();
			var yesspecificgroup1 = $(this).attr('yesspecificgroup');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {yesspecificgroup:1,specificgrp:yesspecificgroup1}, 
				success : function(data) {
						$("#getyesficgroup").html(data);
					}
		});
	});
	//-------------------------------------------------------------------------------------
	//-------------------------------------------------------------------------------------
	//view.dltgrp.dlt.accounts
	$("body").delegate(".deleteaccounts","click",function(event){  
		event.preventDefault();
		var dltaccountid = $(this).attr('dltaccountid');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {dltaccountid:1,dltntid:dltaccountid}, 
				success : function(data) {
						$("#get_deleteaccount").html(data);
					}
		});
	});  
	$("body").delegate(".yesdltspecificaccount","click",function(event) {  
			event.preventDefault();
			var yesspecificaccount1 = $(this).attr('yesspecificaccount');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {yesspecificaccount:1,specificaccnt:yesspecificaccount1}, 
				success : function(data) {
						$("#getyesficaccnt").html(data);
					}
		});
	});
	//------------------------------------------------------------------------------------
	//view.dltuser.dlt.users/employees
	$("body").delegate(".deleteusers","click",function(event){  
			event.preventDefault();
			var dltusersid = $(this).attr('dltusersid');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {dltusersid:1,dltuseruser_pid:dltusersid}, 
					success : function(data) {
							$("#get_deleteuser").html(data);
						}
			});
	});
	$("body").delegate(".yesdltspecificemployee","click",function(event) {  
			event.preventDefault();
			var yesspecificemploy1 = $(this).attr('yesspecificemploy');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {yesspecificemploy:1,yesspcemploy:yesspecificemploy1}, 
				success : function(data) {
						$("#yesspecificemploy2").html(data);
					}
		});
	});
	//------------------------------------------------------------------------------------
	//view.dltuser.dlt.borrowers/customers
	$("body").delegate(".deleteborrower","click",function(event){  
			event.preventDefault();
			var dltborowerid = $(this).attr('dltborowerid');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {dltborowerid:1,dltborowerid_pid:dltborowerid}, 
					success : function(data) {
							$("#get_dltborowerid").html(data);
						}
			});
	});
	$("body").delegate(".yesdltspecificborower","click",function(event) {  
			event.preventDefault();
			var yesspecificborower1 = $(this).attr('yesspecificborower');
		$.ajax({
				url 	: "act",
				method	: "POST",
				data 	: {yesspecificborower:1,yesspcborower:yesspecificborower1}, 
				success : function(data) {
						$("#yesspecificborower2").html(data);
					}
		});
	});
	//------------------------------------------------------------------------------------

	//view.procrtguarantor.pro.crt.other expenses 
	$("#otherexpenseprocrt").click(function(){  
			$.ajax({
					url 	: "procrtotherexpense.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtotherexpenseprocrt").html(data);
						    }
				});
	});

	//view.prousercontacts.pro.user.contacts.viewprofile
	$("body").delegate(".viewusercontacts","click",function(event){
			event.preventDefault();
			var mngusercontacts = $(this).attr('mngusercontacts');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {get_mngusercontacts:1,mngusercontacts_userid:mngusercontacts}, 
					success : function(data){
							$("#get_mngusercontacts").html(data);
						}
			});
	});
	//view.procrtguarantor.pro.crt.guarantors 
	$("#guarantorprocrt").click(function(){  
			$.ajax({
					url 	: "procrtguarantor.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtguarantor").html(data);
						    }
				});
	});
	//view.procrtuser.pro.crt.borrower 
	$("#borrowerprocrt").click(function(){  
			$.ajax({
					url 	: "procrtborrower.php",  
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtuser").html(data);
						    }
				});
	});
	//view.promngborrowers.pro.mng.borrowers
	$("body").delegate(".viewdataborrowers","click",function(event) {  
			event.preventDefault();
			var viewborrowerid = $(this).attr('viewborrowerid');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {get_viewborrowerid:1,setviewborrowerid:viewborrowerid}, 
					success : function(data) {
							$("#get_usersidset").html(data);
						}
			});
	});
	//view.promngborrowers.pro.update.borrowers
	$("body").delegate("#updateborrowerprocrt","click",function(event) {  
			event.preventDefault();
			$.ajax({
					url 	: "proupdateborrower.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#updateborrowerpro").html(data);  
						    }
				});
	});
	//view.promngborrowers.pro.update.users/employees
	$("body").delegate("#updatecreatedemployee","click",function(event) {  
			event.preventDefault();
			$.ajax({
					url 	: "proupdateemployee.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#updateemployepro").html(data);  
						    }
				});
	});
	//view.promngusrs.pro.mng.users
	$("body").delegate(".viewdatausers","click",function(event){  
			event.preventDefault();
			var Emngusersid = $(this).attr('Emngusersid');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {get_Emngusersid:1,Emnguser_id:Emngusersid}, 
					success : function(data) {
							$("#get_usersidset").html(data);
						}
			});
	});
	//view.procrtuser.pro.crt.user
	$("#procrteuser").click(function(){  
			$.ajax({
					url 	: "procrtuser.php",
					method	: "POST",
					data 	: $("form").serialize(),
					success : function(data) {
								window.scrollTo(0,0);
							  $("#procrtuser").html(data);       
						    }
				});
	});
	//view.prodailylibaccess.pro.company-profile-infor
	$("#senddailyaccessfee").click(function() { 
		$.ajax({
				url 	: "prodailylibaccess.php",
				method	: "POST",
				data 	: $("form").serialize(),
				success : function(data) {
							window.scrollTo(0,0);
						 $("#dailyaccess_msg").html(data);
					    }
		});
	});
	//view.promnggrp.pro.mng.grps
	$("body").delegate(".viewdata","click",function(event){  
			event.preventDefault();
			var mnggrpid = $(this).attr('mnggrpid');
			$.ajax({
					url 	: "act",
					method	: "POST",
					data 	: {get_mnggrpid:1,mnggr_pid:mnggrpid}, 
					success : function(data){
							$("#get_mnggr").html(data);
						}
			});
	});
					//view.procrtegrp.pro.crte.permission groups  procrtmembergrps
				// $("body").delegate("#DAezmarketodd","click",function(event){  
				// 	event.preventDefault();
				// 	$.ajax({
				// 				url 	: "prousgrp.php", 
				// 				method	: "POST",
				// 				data 	: $("form").serialize(),
				// 				success : function(data){
				// 							window.scrollTo(0,0);
				// 						 $("#prousgrp").html(data);
				// 					    }
				// 		});
				// });
	$("#procrtmembergrps").click(function(){ //view.procrtemembergroups.pro.crte.membergroups 
			$.ajax({
						url 	: "prousgrp.php",
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
									window.scrollTo(0,0);
								 $("#procrtprodcate1").html(data);
							    }
				});
	});
	$("#procateprodu").click(function(){ //view.procrteprodaccount.pro.crte.savingsaccount 
			$.ajax({
						url 	: "procrtprodcate.php",
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
								 $("#procrtprodcate1").html(data);
							    }
				});
	});
	$("#prodepositaccount").click(function(){ //view.procrtedepositaccount.pro.crte.depositaccount 
			$.ajax({
						url 	: "procrtdepositaccount.php",
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
									window.scrollTo(0,0);
								 $("#procrtprodcate2").html(data);         
							    }
				});
	});
	$("#promembersavingsaccount").click(function(){ //view.procrtedepositaccount.pro.crte.membersavings 
			$.ajax({
						url 	: "procrtmembersavings.php",      
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
									window.scrollTo(0,0);
								 $("#prosavings").html(data);      
							    }
				});
	});
	$("#procrtgrpschedule").click(function(){ //view.procrtedepositaccount.pro.crte.membersavings 
			$.ajax({
						url 	: "progroupschedule.php",      
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
									window.scrollTo(0,0);
								 $("#progrpsschedule").html(data);      
							    }
				});
	});
	$("#prowithdrawalaccount").click(function(){ //view.procrtedepositaccount.pro.crte.withdrawalaccount 
			$.ajax({
						url 	: "procrtwithdrawalaccount.php",
						method	: "POST",
						data 	: $("form").serialize(),
						success : function(data) {
								 $("#procrtprodcate10").html(data);
							    }
				});
	});
	$("body").delegate(".viewdatacategories","click",function(event){  //view.promnggrp.pro.mng.accounts
				event.preventDefault();
				var mnggrpidcategory = $(this).attr('mnggrpidcategories');
				$.ajax({
						url 	: "act",
						method	: "POST",
						data 	: {get_mnggrpidcategories:1,mnggr_pidcategory:mnggrpidcategory}, 
						success : function(data){
								$("#get_mnggr").html(data);
							}
				});
		});
	$("#updtcategory").click(function(event){ //process update for company accounts
					event.preventDefault();
					var categoryname = $("#categoryname").val();
					var cat_available = $("#cat_available").val();
					var tags_1 = $("#tags_1").val();
					var cate_id = $("#cate_id").val();
						$.ajax({
									url 	: "act",
									method	: "POST",
			   data	: {updtcat:1,categorynameC:categoryname,cat_availablE:cat_available,tags_12:tags_1,cate_iD:cate_id},
									success : function(data){	
												$("#shwupdtcatemsg").html(data);
										    }
								})
					})




				
				$("body").delegate(".viewprodtvarit","click",function(event){  //view.promnggrp.pro.mng.productvariety
							event.preventDefault();
							var viewprodtvarit_id = $(this).attr('viewprodtvarit_id');
							$.ajax({
									url 	: "act",
									method	: "POST",
									data 	: {get_viewprodtvarit_id:1,vwprodtvarit_id:viewprodtvarit_id}, 
									success : function(data){
											$("#get_viewprodtvarit_id").html(data);
										}
							});
				});
				$("body").delegate(".viewproduct","click",function(event){  //view.promnggrp.pro.mng.products
							event.preventDefault();
							var mngproductpid = $(this).attr('viewprodctid');
							$.ajax({
									url 	: "act",
									method	: "POST",
									data 	: {get_productpid:1,mngpdctid:mngproductpid}, 
									success : function(data){
											$("#get_viewproduct").html(data);
										}
							});
				});
		
								

						

						$("#procrtcompprodt").click(function(){  //view.procrteprod.pro.crte.prod
								$.ajax({
											url 	: "procrtcompprodt.php",  
											method	: "POST",
											data 	: $("form").serialize(),
											success : function(data) {
														window.scrollTo(0,0);
													 $("#showprocrtcompprodt").html(data);
												    }
									});
						});

						$("#procrtcompprodvariety").click(function(){  //view.procrteprodvariety.pro.crte.prodvariety
								$.ajax({
											url 	: "procrtcompprodtvarit.php",  
											method	: "POST",
											data 	: $("form").serialize(),
											success : function(data) {
														window.scrollTo(0,0);
													 $("#showprocrtcompprodvariety").html(data);
												    }
									});
						});

		

										// $("#signinDAezkcWpvmhy").click(function(e){ //process user signin form dentails here
										// 		e.preventDefault();
										// 		var phonenumber  = $("#phonenumber").val();
										// 		var userpassword = $("#userpasswordd").val();
										// 			$.ajax({
										// 						url 	: "formsigninprocess.php",
										// 						method	: "POST",
										// 						data	: {processusersign:1,phoneNumber:phonenumber,userPassWordd:userpassword},
										// 						success : function(data){	
										// 									$("#displaypasswormsg").html(data);
										// 							     }
										// 			})
										// });
										// $("#reg_user_now").click(function(e){ //process user signin form dentails here
										// 		e.preventDefault();
										// 		window.location = "register";
										// 		// location.reload();
										// });
										// $(".btnupdateinfo").click(function(){ //process update infor for each client with a profile
										// 	var nameee 	= $("#updatename").val();
										// 	var mobileee 	= $("#updatenumber").val();
										// 	var emailee 	= $("#updateemail").val();
										// 	var passwordee = $("#updatepassword").val();
										// var useremailee 	= $("#getuseremail").val();
										// var useridee 		= $("#getuserid").val();
										// 		$.ajax({
										// 					url 	: "jqueryprocesslogic.php",
										// 					method	: "POST",
										// 					data	: {clientupdateinfo:1,userName:nameee,UserMobile:mobileee,Useremail:emailee,UserPassword:passwordee,getuserid:useridee,getuseremail:useremailee},
										// 					success : function(data){	
										// 								$("#get_inforupdatensuceess").html(data);
										// 						     }
										// 			})
										// })
										// $("#paymentpaystatus").click(function(){ //process admin payment status
										// 	var getpaymentstatus 	= $("#paymentstatus1").val();
										// 	var getourderidstatus 	= $("#getordersatatus").val();
										// 		$.ajax({
										// 					url 	: "jqueryprocesslogic.php",
										// 					method	: "POST",
										// 					data	: {receivepayment:1,getthepayment:getpaymentstatus,orderid:getourderidstatus},
										// 					success : function(data){	
										// 								$("#updatepaymentmsg").html(data);
										// 						     }
										// 		})
										// })
										// $("#orderpaystatus").click(function(){ //process admin order status
										// 	var getorderstatus 		= $("#order-status2").val();
										// 	var getpaymentdstatus 	= $("#getordersatatus").val();
										// 		$.ajax({
										// 					url 	: "jqueryprocesslogic.php",
										// 					method	: "POST",
										// 					data	: {receiveorder:1,gettheorder:getorderstatus,orderid:getpaymentdstatus},
										// 					success : function(data){	
										// 								$("#updateordermsg").html(data);
										// 						     }
										// 		})
										// })
});