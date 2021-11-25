$(function() {

  $('form').submit(function(event) {
    event.preventDefault();
    
    let query = $('input').val();
    let context = $('input[name="context"]:checked').val();
    
    $.get('/search?' + $.param({context: context, query: query}), function(data) {
      $('#results').empty();
      $('input[type="text"]').val('');
      $('input').focus();
      
      data.tracks.items.forEach(function(track, index) {
        let newEl = $('<p onClick="getFeatures(&apos;' + track.id + '&apos;)"></p>').text(track.name + '   -   ' + track.artists[0].name) ;
        $('#results').append(newEl);
      });
    });
  });

});
