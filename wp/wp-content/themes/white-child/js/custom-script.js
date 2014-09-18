var $j = jQuery;

$j(document).ready(function() {

    //update button
    $j("#add-questionnaire_updateButton").click(function() {
    	updateNumberOfQuestions();
	});

	//submit button
    $j("#add-questionnaire_submitButton").click(function() {
    	alert("does nothing at the moment");
	});


    console.log('console log working');

});


//scripts for page-custom-questionnaire
function goToAddQuestionnaire(){
	location.href= 'add-questionnaire';
}

//scripts for page-add-questionnaire
function updateNumberOfQuestions(){
	var numberOfQuestions = $j("#numberOfQuestions").val();
	var questionHeader = 	"<tr>\
							<td>Question Number </td>\
							<td>Question Type	</td>\
							<td>Question 		</td>\
					</tr>\
					<td><hr></td><td><hr></td><td><hr></td>";
	var questionNumber = 1;
	var questionType = '<select>\
  					<option value="slider">Slider</option>\
  					<option value="radio">Radio</option>\
  					<option value="checkbox">Checkbox</option>\
				</select>';
	var question = "<form><input type='text'></form>";

	function newRow(questionNumber){
		return "<tr>\
							<td>" +"Q"+questionNumber	+	"</td>\
							<td>"+		questionType	+	"</td>\
							<td>"+  	question		+	"</td>\
						</tr>";
	}

	var table = questionHeader;
	console.log(numberOfQuestions);
	for (i=0; i<numberOfQuestions; i++){
		table = table + newRow(questionNumber);
		questionNumber++;
	}
	$j('#questions').html(table);
}




