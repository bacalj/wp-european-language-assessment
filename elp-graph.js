jQuery( document ).ready(function() {
    var topScoresArray = [];
    var scoreKey = {
      'A1' : 20,
      'A2' : 40,
      'B1' : 60,
      'B2' : 80,
      'C1' : 100,
      'C2' : 120
    };

    var eachCatSelectors = [
      '.cat-listening .elp-score',
      '.cat-reading .elp-score',
      '.cat-spokeninteraction .elp-score',
      '.cat-spokenproduction .elp-score',
      '.cat-writing .elp-score'
    ];

    function highestScoreForCat(element){
      var catRawStrings = jQuery(element).find('b');
      var catSet = [];
      jQuery.each(catRawStrings, function(index, value){
        var scoreString = value.innerHTML;
        var score = scoreKey[scoreString];
        catSet.push(score);
      });
      var finalCatScore = Math.max.apply(Math, catSet);
      //console.log(finalCatScore);
      topScoresArray.push(finalCatScore);
    }

    //create array of top scores
    eachCatSelectors.forEach(highestScoreForCat);
    //console.log(topScoresArray);

    var listeningPixels = topScoresArray[0].toString() + 'px';
    jQuery('.elp-data-listening').width(listeningPixels);

    var readingPixels = topScoresArray[1].toString() + 'px';
    jQuery('.elp-data-reading').width(readingPixels);

    var spokenInteractionPixels = topScoresArray[2].toString() + 'px';
    jQuery('.elp-data-spokeninteraction').width(spokenInteractionPixels);

    var spokenProductionPixels = topScoresArray[3].toString() + 'px';
    jQuery('.elp-data-spokenproduction').width(spokenProductionPixels);

    var writingPixels = topScoresArray[4].toString() + 'px';
    jQuery('.elp-data-writing').width(writingPixels);
});
