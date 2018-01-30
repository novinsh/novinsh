$(document).ready(function(){
  (function() {
    var github_commits = "https://api.github.com/repos/novinsh/novinsh.github.io/commits"  
    $.getJSON( github_commits, {
      format: "json"
    })

    .done(function( data ) {
      var last_modify = new Date(data[0]['commit']['author']['date']);
      console.log(last_modify);
      // TODO: date format
      $("#last-update").text(last_modify);
    });
  })();

 });
