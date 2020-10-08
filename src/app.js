const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){

  $.ajax(
    {
      "url" : "http://localhost/php-ajax-dischi/server.php",
      "method" : "GET",
      "success" : function(data) {
        render(data);
      },
      "error" : function(error) {
        alert("ERRORE!");
      }
    }
  );

  function render(data) {
    var source = $("#music_template").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < data.length; i++) {
      var context = {
        "poster" : data[i].poster,
        "title" : data[i].title,
        "author" : data[i].author,
        "year" : data[i].year,
      };

      var html = template(context);
      $(".main_container").append(html);
    }
  }

});
