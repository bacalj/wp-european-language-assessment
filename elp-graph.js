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

    //get the highest score for each category
    function highestScoreForCat(element){
      var catRawStrings = jQuery(element).find('b');
      var catSet = [];
      jQuery.each(catRawStrings, function(index, value){
        var scoreString = value.innerHTML;
        var score = scoreKey[scoreString];
        catSet.push(score);
      });
      var finalCatScore = Math.max.apply(Math, catSet);
      topScoresArray.push(finalCatScore);
    }

    //create array of the top scores
    eachCatSelectors.forEach(highestScoreForCat);

    //make width 0 for all until score gives them width
    jQuery('.elp-data-listening').width('0px');
    jQuery('.elp-data-reading').width('0px');
    jQuery('.elp-data-spokeninteraction').width('0px');
    jQuery('.elp-data-spokenproduction').width('0px');
    jQuery('.elp-data-writing').width('0px');

    //create pixel widths
    var listeningPixels = topScoresArray[0].toString() + 'px';
    var readingPixels = topScoresArray[1].toString() + 'px';
    var spokenInteractionPixels = topScoresArray[2].toString() + 'px';
    var spokenProductionPixels = topScoresArray[3].toString() + 'px';
    var writingPixels = topScoresArray[4].toString() + 'px';

    //apply the widths
    jQuery('.elp-data-listening').width(listeningPixels);
    jQuery('.elp-data-reading').width(readingPixels);
    jQuery('.elp-data-spokeninteraction').width(spokenInteractionPixels);
    jQuery('.elp-data-spokenproduction').width(spokenProductionPixels);
    jQuery('.elp-data-writing').width(writingPixels);
});
