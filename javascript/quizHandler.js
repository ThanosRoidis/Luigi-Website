$(document).ready(runQuiz());



function runQuiz() {
	
	error_hidden = true;
	
	$("#quiz_no_select").hide();

	
	$("#quiz_submit").click(onSubmit);
	
	
	
	
	
	
	
	
	

}



function onSubmit(){
	
		
		
		choices = document.getElementsByName("choices");
		correct = -1;
		checked = -1;
   
		
		for(i=0 ; i < choices.length ; i++) {
			if(choices[i].id == "correct")
				correct = i;
				
			if(choices[i].checked)
				checked = i;
			
		}
		
		//window.alert("Choices: " + choices.length + "\nCorrect: " + correct + "\nChecked: " + checked);
		
		if(checked == -1) {
			if(error_hidden == true) {
				error_hidden= false;
				$("#quiz_no_select").show(1000).delay(3000).hide(1000,function () { error_hidden= true;});
			}
			
		}
		else 
		{
			for (var i = 0; i< choices.length;  i++){
				choices[i].disabled = true;
			}
			if (checked == correct){
				var audio = new Audio('sounds/coin.wav');
				audio.play();
			}else{
				$(".quiz_radio").eq(checked).css("background-color","lightcoral");
				var audio = new Audio('sounds/failSubmit.wav');
				audio.play();	
			}						
			
			$(".quiz_radio").eq(correct).css("background-color","lightgreen");
			nextQuiz(choices[checked]);
		}
		
		
		
	
	
	}

function nextQuiz(checked_radio) {

	cookies = document.cookie;
	
	if(cookies.indexOf("quiz_no") > -1) {
		quiz_no = getCookie("quiz_no");

	}
	else {
		quiz_no = 0;
	}

	quiz_no++;
	
	document.cookie = "quiz_no=" + quiz_no;
	
	
	setTimeout(reloadPage,2000,checked_radio);


}

function reloadPage(checked_radio){
	checked_radio.checked=false;	
	/*var radios = document.getElementsByName('choices');
	for (var i = 0; i< radios.length;  i++){
			radios[i].disabled = false;
	}*/	
	location.reload();
}



function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
