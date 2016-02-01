jQuery( document ).ready(function() {
    var topScoresArray = [];
    var scoreKey = {
      'A1' : 60,
      'A2' : 120,
      'B1' : 180,
      'B2' : 240,
      'C1' : 300,
      'C2' : 360
    };

    // function highestScoreForCat(element){
    //   catRawStrings = jQuery(element).find('b');
    //   catSet = [];
    //   jQuery.each(catRawStrings, function(i, v){
    //
    //   });
    // }


    //find, specifically, each highest of any nubmer of scores from each category
    var listeningScores = jQuery('.cat-listening .elp-score').find('b');
    var listeningSet = [];
    jQuery.each(listeningScores, function( index, value ) {
       var scoreString = value.innerHTML;
       var score = scoreKey[scoreString];
       listeningSet.push(score);
    });
    //console.log(listeningSet);
    var listeningScore = Math.max.apply(Math, listeningSet);
    console.log(listeningScore);
});
