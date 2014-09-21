var $j = jQuery;
var customQuestionnaire = new Array();

$j(document).ready(function() {

	//onclick handler for go to page-add-questionnaire url
	$j("#custom-questionnaire_createButton").click(function() {
    	goToAddQuestionnaire();
    	$j(this).blur();	//unfocus button
	});

    //onclick handler for update number of questions button
    $j("#add-questionnaire_updateNumberOfQuestionsButton").click(function() {
    	updateNumberOfQuestions();
    	$j(this).blur();	//unfocus button
	});

    //onclick handler for question type dropdown
    $j("#add-questionnaire_questionType").change(function() {
    	var questionType = $j('#add-questionnaire_questionType').val();
    	changeQuestionType(questionType);
	});

	//onclick handler for question number dropdown
    $j("#add-questionnaire_questionNumber").change(function() {
    	var questionNumber = $j('#add-questionnaire_questionNumber').val();
    	console.log("updating screen");
    	updateScreen(questionNumber);
	});

	//onclick handler for update number options dropdown
    $j("#add-questionnaire_numberOfOptions").change(function() {
    	var numberOfOptions = $j(this).val();
    	updateNumberOfOptions(numberOfOptions);
	});

	//onclick handler for submit button
    $j("#add-questionnaire_nextButton").click(function() {
    	nextQuestion();
    	$j(this).blur();	//unfocus button
	});

	//onclick handler for submit button
    $j("#add-questionnaire_submitButton").click(function() {
    	alert("does nothing at the moment");
    	$j(this).blur();	//unfocus button
	});

    console.log('jQuery scripts loaded');

});

/***************************************/
/*scripts for page-custom-questionnaire*/
/***************************************/

function goToAddQuestionnaire(){
	location.href = 'add-questionnaire';
}


/************************************/
/*scripts for page-add-questionnaire*/
/************************************/
function updateNumberOfQuestions(){
	var numberOfQuestions = $j("#add-questionnaire_numberOfQuestions").val();
	console.log(numberOfQuestions);
	//if update field is vaid:
	if(numberOfQuestions == parseInt(numberOfQuestions) && parseInt(numberOfQuestions)>0){
		//shows question fields
		$j('#add-questionnaire_questions').removeClass('disappear');
		$j('.add-questionnaire_questionSlider').removeClass('disappear');
		//remembers the number of questions, and update the question number dropdown
		//if current question number > updated question number, jump back to last question number
		//need some logic to update the question as well
		customQuestionnaire['numberOfQuestions']=numberOfQuestions;
		$j('#add-questionnaire_questionNumber').html("");
		function optionRow(questionNumber){
			return "<option value="+questionNumber+">"+questionNumber+"</option>";
		}
		for(i=0;i<numberOfQuestions;i++){
			$j('#add-questionnaire_questionNumber').append(optionRow(i+1));
		}
	}else{
		//throws error
		alert("please use positive integers only");
	}
}

function updateScreen(questionNumber){
	console.log("beginning of updating");
	//clear question
	$j('#add-questionnaire_question').val("");
	//clear all the options
	updateNumberOfOptions(2);
	$j('#add-questionnaire_option1').val("");
	$j('#add-questionnaire_option2').val("");
	$j('#add-questionnaire_option3').val("");
	$j('#add-questionnaire_option4').val("");
	$j('#add-questionnaire_option5').val("");
	if(questionNumber<=customQuestionnaire['numberOfQuestions']){
		//clears the whole screen
		$j('.add-questionnaire_questionType').addClass('disappear');
		//updates the question number
		$j('#add-questionnaire_questionNumber').val(parseInt(questionNumber));
		//check if question was previously filled
		if(typeof customQuestionnaire['question'+questionNumber] != 'undefined'){
			//fills in question
			$j('#add-questionnaire_question').val(customQuestionnaire['question'+questionNumber]['question']);
			//fills in other fields
			switch(customQuestionnaire['question'+questionNumber]['questionType']){
				case "radio":{
					switch(customQuestionnaire['question'+questionNumber]['numberOfOptions']){
						case "5":
							$j('#add-questionnaire_option5').val(customQuestionnaire['question'+currentQuestionNumber]['option5']);
						case "4":
							$j('#add-questionnaire_option4').val(customQuestionnaire['question'+currentQuestionNumber]['option4']);
						case "3":
							$j('#add-questionnaire_option3').val(customQuestionnaire['question'+currentQuestionNumber]['option3']);
						case "2":
							$j('#add-questionnaire_option1').val(customQuestionnaire['question'+currentQuestionNumber]['option1']);
							$j('#add-questionnaire_option2').val(customQuestionnaire['question'+currentQuestionNumber]['option2']);
						default:
							//pring some error message
							break;
					}
					$j('.add-questionnaire_questionRadio').removeClass('disappear');
					break;
				}
				default:
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
			$j('.add-questionnaire_questionType').addClass('disappear');
			break;
		case "radio":
			$j('.add-questionnaire_questionType').addClass('disappear');
			$j('.add-questionnaire_questionRadio').removeClass('disappear');
			break;
	// 	case "checkbox":
	// 		break;
	// 	default:
	// 		//print some error message
	// 		break;
	}
}

function updateNumberOfOptions(numberOfOptions){
	$j('.add-questionnaire_optionRow5').addClass('disappear');
	if(numberOfOptions>2){
		$j('.add-questionnaire_optionRow'+numberOfOptions).removeClass('disappear');
	}
}

function nextQuestion(){
	var currentQuestionNumber = $j('#add-questionnaire_questionNumber').val();
	console.log("Current question number: "+currentQuestionNumber+", Question Type: "+questionType+", Question: "+question);

	//checks if next button is valid
	if (currentQuestionNumber<customQuestionnaire['numberOfQuestions']){
		//hide next button if next questions is last question
		if((parseInt(currentQuestionNumber)+1)==customQuestionnaire['numberOfQuestions']){
			$j('#add-questionnaire_nextButton').addClass('hidden');
		}
		var questionType = $j('#add-questionnaire_questionType').val();
		var question = $j('#add-questionnaire_question').val();
		customQuestionnaire['question'+currentQuestionNumber]={'questionType': questionType, 'question':question};
		switch(questionType){
			case "radio":{
				var numberOfOptions = $j('#add-questionnaire_numberOfOptions').val();
				customQuestionnaire['question'+currentQuestionNumber]['numberOfOptions'] = numberOfOptions;
				switch(numberOfOptions){
					case "5":
						var option5 = $j('#add-questionnaire_option5').val();
						customQuestionnaire['question'+currentQuestionNumber]['option5'] = option5;
					case "4":
						var option4 = $j('#add-questionnaire_option4').val();
						customQuestionnaire['question'+currentQuestionNumber]['option4'] = option4;
					case "3":
						var option3 = $j('#add-questionnaire_option3').val();
						customQuestionnaire['question'+currentQuestionNumber]['option3'] = option3;
					case "2":
						var option1 = $j('#add-questionnaire_option1').val();
						var option2 = $j('#add-questionnaire_option2').val();
						customQuestionnaire['question'+currentQuestionNumber]['option1'] = option1;
						customQuestionnaire['question'+currentQuestionNumber]['option2'] = option2;
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
		console.log(customQuestionnaire);

		//after saving the question, update the screen
		updateScreen(parseInt(currentQuestionNumber)+1);

		//adds back button if next question is 2, that could be navigated back to 1.
		if(currentQuestionNumber==1){
			$j('#add-questionnaire_backButton').removeClass('hidden');
		}
	}else{	//next button is triggered illegally
		//print some error message
	}
}
