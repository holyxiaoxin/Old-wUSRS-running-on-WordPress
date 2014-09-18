var $j = jQuery;

$j(document).ready(function() {

    //onclick handler for update button
    $j("#add-questionnaire_updateButton").click(function() {
    	updateNumberOfQuestions();
	});

	//onclick handler for submit button
    $j("#add-questionnaire_submitButton").click(function() {
    	alert("does nothing at the moment");
	});
    console.log('console log working');

});

/***************************************/
/*scripts for page-custom-questionnaire*/
/***************************************/

function goToAddQuestionnaire(){
	location.href= 'add-questionnaire';
}


/************************************/
/*scripts for page-add-questionnaire*/
/************************************/
function updateNumberOfQuestions(){
	var numberOfQuestions = $j("#numberOfQuestions").val();
	var questionHeader = 	"<tr>\
							<td>Question Number</td>\
							<td>Question Type</td>\
							<td>Question / Options</td>\
					</tr>\
					<td><hr></td><td><hr></td><td><hr></td>";
	var questionNumber = 1;
	var questionType = '<select>\
  					<option value="slider">Slider</option>\
  					<option value="radio">Radio</option>\
  					<option value="checkbox">Checkbox</option>\
				</select>';
	var question = "<form><input type='text'></form>";
	//dynamically changes the row string with the questionNumber provided
	function newRow(questionNumber){
		return "<tr class='add-questionnaire_question' \
					id='add-questionnaire_q" + 	questionNumber 	+		" '>\
					<td>"+"Q"+					questionNumber	+		"</td>\
					<td>"+						questionType	+		"</td>\
					<td>"+  					question		+		"</td>\
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
	//adds a on change handler after creating the rows
	$j(".add-questionnaire_question").change(function(){
		console.log($j(this).attr('id'));
	});
}



