// Journal Quiz - OA week 2013

// Load Quiz based on Hash
function loadQuiz(quizNum, fileCount){

	// alert(quizNum);	
	
	// left pane
	$("#left_pane").html('<img src="img/items/journal_'+quizNum+'.jpg"></img>');
	// right pane
	$("#right_pane").html('<img src="img/items/item_'+quizNum+'.jpg"></img>');

	// next quiz
	if (quizNum == (fileCount / 2)){
		$(".results").append('<h4><a href="./?quiz=1">Start Over...</a></h4>')	
	}
	else {
		$(".results").append('<h4><a href="./?quiz='+(parseInt(quizNum) + 1)+'">Next Quiz...</a></h4>')	
	}
	

	// bring the quiz!
	$("#quiz").animate({opacity:1}, 500)
	$("#footer").animate({opacity:1}, 500)

}


// Correct Answer
function correctAnswer(){	
	resizeResults();
	// hide comps
	$(".guess").fadeOut(500, function(){
		// reveal answer		
		$("#correctResults").show();	
	});
}


// Wrong Answer
function wrongAnswer(){
	resizeResults();
	// hide comps
	$(".guess").fadeOut(500, function(){
		// reveal answer		
		$("#wrongResults").show();	
	});
}

function resizeResults(){
	// get reconstitute height
	var gotoHeight = $(".guess").height();
	// set results
	$(".results").height(gotoHeight);
}