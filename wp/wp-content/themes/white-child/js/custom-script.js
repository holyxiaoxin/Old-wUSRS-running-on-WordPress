var $j = jQuery;
var customAssessment = {};

$j(document).ready(function() {
	//onclick handler for go to page-add-assessment url
	$j("#custom-assessment_createButton").click(function() {
    	goToAddAssessment();
    	$j(this).blur();	//unfocus button
	});

    //onclick handler for update number of questions button
    $j("#add-assessment_updateNumberOfQuestionsButton").click(function() {
    	updateNumberOfQuestionsAndTitle();
    	$j(this).blur();	//unfocus button
	});

    //onclick handler for question type dropdown
    $j("#add-assessment_questionType").change(function() {
    	var questionType = $j('#add-assessment_questionType').val();
    	changeQuestionType(questionType);
	});

	//onclick handler for question number dropdown
    $j("#add-assessment_questionNumber").on('focus', function () {
        saveCurrentQuestion();
	}).change(function() {
        // Do something with the previous value after the change
        var questionNumber = $j('#add-assessment_questionNumber').val();
        updateScreen(questionNumber);
	});

	//onclick handler for update number options dropdown
    $j("#add-assessment_numberOfOptions").change(function() {
    	var numberOfOptions = $j(this).val();
    	updateNumberOfOptions(numberOfOptions);
	});

    //onclick handler for back button
    $j("#add-assessment_backButton").click(function() {
    	previousQuestion();
    	$j(this).blur();	//unfocus button
	});

	//onclick handler for next button
    $j("#add-assessment_nextButton").click(function() {
    	nextQuestion();
    	$j(this).blur();	//unfocus button
	});

	//onclick handler for submit button
    $j("#add-assessment_submitButton").click(function() {
    	submitForm();
    	$j(this).blur();	//unfocus button
	});

    console.log('jQuery scripts loaded');

});

/***************************************/
/*scripts for page-custom-assessment*/
/***************************************/

function goToAddAssessment(){
	location.href = 'add-assessment';
}

/************************************/
/*scripts for page-add-assessment*/
/************************************/
function updateNumberOfQuestionsAndTitle(){
	var numberOfQuestions = $j('#add-assessment_numberOfQuestions').val();
	var title = $j('#add-assessment_title').val();
	console.log(numberOfQuestions);
	//if update field is vaid:
	if(numberOfQuestions == parseInt(numberOfQuestions) && parseInt(numberOfQuestions)>0 && title){
		//updates title
		customAssessment['title']=title;
		//updates number of questions
		//shows question fields
		$j('#add-assessment_questions').removeClass('disappear');
		$j('.add-assessment_questionSlider').removeClass('disappear');
		//remembers the number of questions, and update the question number dropdown
		//if current question number > updated question number, jump back to last question number
		//need some logic to update the question as well
		customAssessment['numberOfQuestions']=numberOfQuestions;
		//check if updated before:
		if(typeof customAssessment['questions'] != 'undefined'){	//updated before
			//save the question before clearing the screen
			saveCurrentQuestion();
			//after saving the question, update the screen to first question
			updateScreen(1);
			customAssessment['questions'] = customAssessment['questions'].slice(0,numberOfQuestions);
		}else{
			customAssessment['questions'] = new Array(numberOfQuestions);
		}
		$j('#add-assessment_questionNumber').html("");
		function optionRow(questionNumber){
			return "<option value="+questionNumber+">"+questionNumber+"</option>";
		}
		for(i=0;i<numberOfQuestions;i++){
			$j('#add-assessment_questionNumber').append(optionRow(i+1));
		}

	}else{
		//throws error
		if(!(numberOfQuestions == parseInt(numberOfQuestions) && parseInt(numberOfQuestions)>0)){
			alert("please use positive integers only");
		}
		if(!title){
			alert("title cannot be empty!");
		}
	}
}

function clearScreen(){
	//clear question
	$j('#add-assessment_question').val("");
	//reset question type to slider
	$j('#add-assessment_questionType').val("slider");
	//clear all the options
	updateNumberOfOptions(2);
	//reset the number of options
	$j('#add-assessment_numberOfOptions').val('2');
	//reset options field
	$j('#add-assessment_option1').val("");
	$j('#add-assessment_option2').val("");
	$j('#add-assessment_option3').val("");
	$j('#add-assessment_option4').val("");
	$j('#add-assessment_option5').val("");
}

//takes care of updating the UI, fills in the fields if it was filled previously
function updateScreen(questionNumber){
	console.log("beginning of updating");
	clearScreen();
	//takes care of rendering the proper UI
	//hide next button if last question, else shows it
	if(parseInt(questionNumber)==customAssessment["numberOfQuestions"]){
		$j('#add-assessment_nextButton').addClass('hidden');
	}else{
		$j('#add-assessment_nextButton').removeClass('hidden');
	}
	//hide back button if first question, else shows it
	if(parseInt(questionNumber)==1){
		$j('#add-assessment_backButton').addClass('hidden');
	}else{
		$j('#add-assessment_backButton').removeClass('hidden');
	}
	//check if question number is valid
	if(questionNumber<=customAssessment['numberOfQuestions']){
		//clears the whole screen
		$j('.add-assessment_questionType').addClass('disappear');
		//updates the question number
		$j('#add-assessment_questionNumber').val(parseInt(questionNumber));
		//check if question was previously filled
		if(typeof customAssessment['questions'][questionNumber-1] != 'undefined'){
			//fills in question
			$j('#add-assessment_question').val(customAssessment['questions'][questionNumber-1]['question']);
			//fills in question type
			$j('#add-assessment_questionType').val(customAssessment['questions'][questionNumber-1]['questionType']);
			//fills in other fields
			switch(customAssessment['questions'][questionNumber-1]['questionType']){
				case "radio":{
					switch(customAssessment['questions'][questionNumber-1]['numberOfOptions']){
						case "5":
							$j('#add-assessment_option5').val(customAssessment['questions'][questionNumber-1]['option5']);
						case "4":
							$j('#add-assessment_option4').val(customAssessment['questions'][questionNumber-1]['option4']);
						case "3":
							$j('#add-assessment_option3').val(customAssessment['questions'][questionNumber-1]['option3']);
						case "2":
							$j('#add-assessment_option1').val(customAssessment['questions'][questionNumber-1]['option1']);
							$j('#add-assessment_option2').val(customAssessment['questions'][questionNumber-1]['option2']);
						default:
							//pring some error message
							break;
					}
					//opens up the number of options previously remembered
					updateNumberOfOptions(customAssessment['questions'][questionNumber-1]['numberOfOptions']);
					$j('.add-assessment_questionRadio').removeClass('disappear');
					break;
				}
				default:
					//prints
					break;
			}
		}
	}else{
		//illegal trigger of update screen
		console.log("Illegal Trigger of Update screen.");
	}
}

function changeQuestionType(questionType){
	switch(questionType){
		case "slider":
			$j('.add-assessment_questionType').addClass('disappear');
			break;
		case "radio":
			$j('.add-assessment_questionType').addClass('disappear');
			$j('.add-assessment_questionRadio').removeClass('disappear');
			break;
	// 	case "checkbox":
	// 		break;
	// 	default:
	// 		//print some error message
	// 		break;
	}
}

function updateNumberOfOptions(numberOfOptions){
	$j('.add-assessment_optionRow5').addClass('disappear');
	if(numberOfOptions>2){
		$j('.add-assessment_optionRow'+numberOfOptions).removeClass('disappear');
	}
}

function saveCurrentQuestion(){
	var currentQuestionNumber = $j('#add-assessment_questionNumber').val();
	console.log("currentQuestionNumber is: "+currentQuestionNumber);
	var questionType = $j('#add-assessment_questionType').val();
	var question = $j('#add-assessment_question').val();
	customAssessment['questions'][currentQuestionNumber-1]={'questionType': questionType, 'question':question};
	switch(questionType){
		case "radio":{
			var numberOfOptions = $j('#add-assessment_numberOfOptions').val();
			customAssessment['questions'][currentQuestionNumber-1]['numberOfOptions'] = numberOfOptions;
			switch(numberOfOptions){
				case "5":
					var option5 = $j('#add-assessment_option5').val();
					customAssessment['questions'][currentQuestionNumber-1]['option5'] = option5;
				case "4":
					var option4 = $j('#add-assessment_option4').val();
					customAssessment['questions'][currentQuestionNumber-1]['option4'] = option4;
				case "3":
					var option3 = $j('#add-assessment_option3').val();
					customAssessment['questions'][currentQuestionNumber-1]['option3'] = option3;
				case "2":
					var option1 = $j('#add-assessment_option1').val();
					var option2 = $j('#add-assessment_option2').val();
					customAssessment['questions'][currentQuestionNumber-1]['option1'] = option1;
					customAssessment['questions'][currentQuestionNumber-1]['option2'] = option2;
					break;
				default:
					//print some error message
					break;
			}
			break;
		}
		default:
			//print some error message
			break;
	}
	console.log(customAssessment);
}

function nextQuestion(){
	var currentQuestionNumber = $j('#add-assessment_questionNumber').val();
	//checks if next button is valid
	if (parseInt(currentQuestionNumber)<customAssessment['numberOfQuestions']){
		//hide next button if next questions is last question
		if((parseInt(currentQuestionNumber)+1)==customAssessment['numberOfQuestions']){
			$j('#add-assessment_nextButton').addClass('hidden');
		}
		//save the question before clearing the screen
		saveCurrentQuestion();
		//after saving the question, update the screen
		updateScreen(parseInt(currentQuestionNumber)+1);
		//adds back button if next question is 2, that could be navigated back to 1.
		if(currentQuestionNumber==1){
			$j('#add-assessment_backButton').removeClass('hidden');
		}
	}else{	//next button is triggered illegally
		//print some error message
		console.log("ERROR: next button is triggered illegally");
	}
}

function previousQuestion(){
	var currentQuestionNumber = $j('#add-assessment_questionNumber').val();
	//checks if previous button is valid
	if (parseInt(currentQuestionNumber)>1){
		//hide back button if previous questions is first question
		if((parseInt(currentQuestionNumber)-1)==1){
			$j('#add-assessment_backButton').addClass('hidden');
		}
		//save the question before clearing the screen
		saveCurrentQuestion();
		//after saving the question, update the screen
		updateScreen(parseInt(currentQuestionNumber)-1);
	}else{	//back button is triggered illegally
		//print some error message
		console.log("ERROR: back button is triggered illegally");
	}
}

function submitForm(){
	//save the question before submitting
	saveCurrentQuestion();

	console.log("customAssessment: ");
	console.log(customAssessment);

	$j.post( "http://jiarong.me/painapp/api/post.php", {'tag':'set','data':customAssessment})
		.done( function( data ) {
	  		alert( "Data Saved: " + data );
		});
}




