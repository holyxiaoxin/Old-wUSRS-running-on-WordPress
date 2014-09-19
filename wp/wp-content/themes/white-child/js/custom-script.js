var $j = jQuery;

$j(document).ready(function() {

	//onclick handler for go to page-add-questionnaire url
	$j("#custom-questionnaire_createButton").click(function() {
    	goToAddQuestionnaire();
    	$j(this).blur();	//unfocus button
	});

    //onclick handler for update button
    $j("#add-questionnaire_updateOptionsButton").click(function() {
    	updateNumberOfQuestions();
    	$j(this).blur();	//unfocus button
	});

    // //onclick handler for change dropdown
    // $j(document).change($j(".add-questionnaire_questionType"),function(){
    // 	console.log($j(this).attr('data-questionNumber'));
    // });

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
	var questionHeader = 	"<tr>\
							<td>Question Number</td>\
							<td>Question Type</td>\
							<td>Question / Options</td>\
					</tr>\
					<td><hr></td><td><hr></td><td><hr></td>";
	var questionNumber = 1;
	function questionType(questionNumber){
		return '<select class="add-questionnaire_questionType" data-questionNumber="'+questionNumber+'">\
  							<option value="slider">Slider</option>\
  							<option value="radio">Radio</option>\
  							<option value="checkbox">Checkbox</option>\
						</select>';
	} 
	function question(questionNumber) {
		return "<form><input id='add-questionnaire_questionSlider"+questionNumber+"' type='text'></form>";
	}
	//dynamically changes the row string with the questionNumber provided
	function newRow(questionNumber){
		return "<tr class='add-questionnaire_question' \
					id='add-questionnaire_q" + 	questionNumber 	+		" '>\
					<td>"+"Q"+					questionNumber	+		"</td>\
					<td>"+						questionType(questionNumber)	+		"</td>\
					<td id='add-questionnaire_questionOptions"+questionNumber+"'>\
					"				+	question(questionNumber)		+		"</td>\
				</tr>";
	}

	var table = questionHeader;
	console.log(numberOfQuestions);
	//iteratively adds the new row, and changing the question number each time
	for (i=0; i<numberOfQuestions; i++){
		table = table + newRow(questionNumber);
		questionNumber++;
	}
	$j('#questions').html(table);	//updates the table with the new rows
	
	//adds the onchange handler after creating the rows
	$j(".add-questionnaire_questionType").change(function(){
		// console.log($j(this).attr('data-questionNumber'));
		var questionNumber=$j(this).attr('data-questionNumber');
		changeQuestionOptions(questionNumber);
	});
}

// function changeField($this){
// 	console.log('number'+$j($this).attr('data-questionNumber'));
// }

function changeQuestionOptions(questionNumber){
	console.log('the changed selector has this question number: '+questionNumber);
	$j('#add-questionnaire_questionSlider'+questionNumber).remove();
	$j('.add-questionnaire_radioField'+questionNumber).remove();
	$j('#add-questionnaire_radioField').clone().appendTo('#add-questionnaire_questionOptions'+questionNumber).removeClass('hidden').addClass('add-questionnaire_radioField'+questionNumber);
}



