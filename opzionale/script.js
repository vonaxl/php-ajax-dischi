function printData(elements) {
  $("#box").empty();
  var template = $("#template").html();
  var compiled = Handlebars.compile(template);
  // var match = data;
  for (let i = 0; i < elements.length; i++) {
    var cd = elements[i];
    var compiledCd = compiled(cd);
    $("#box").append(compiledCd);
  }
}

function getData() {
  $.ajax({
    url: "getAllCd.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      printData(data);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}
function getData2(element) {
  $.ajax({
    url: "get1Cd.php",
    data: {
      author: element
    },
    method: "GET",
    success: function(data) {
      console.log(data);
      printData(data);
      // printAlbum(data);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}

function cercaBtnClick() {
  var input = $("#src").val();
  console.log(input);
  getData2(input);
  $("#src").val("");
}
function init() {
  getData();
  $("#cerca").on("click", cercaBtnClick);
}

$(document).ready(init);
