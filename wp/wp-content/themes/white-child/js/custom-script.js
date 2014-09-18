var $j = jQuery;

$j(document).ready(function() {

    //update button
    $j("#updateNumberOfQuestions").click(function() {
    	updateNumberOfQuestions();
	});

    console.log('console log working');

});


//scripts for page-custom-questionnaire
function goToAddQuestionnaire(){
	location.href= 'add-questionnaire';
}


//scripts for page-add-questionnaire
function updateNumberOfQuestions(){
	alert('updated');
	$j('#question').text($j('#numberOfFields').val());
}




