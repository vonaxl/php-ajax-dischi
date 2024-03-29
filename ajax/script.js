// function random(elements) {
//   var inRnd = Math.floor(Math.random() * elements.length);
//   var elemRnd = elements[inRnd];
//   printData(elemRnd);
// }

function printData(elements) {
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
// function getData2() {
//   $.ajax({
//     url: "getRandomAd.php",
//     method: "GET",
//     success: function(data) {
//       console.log(data);
//       //   printData(data);
//       printData(data);
//     },
//     error: function(error) {
//       console.log("error", error);
//     }
//   });
// }

function init() {
  getData();
}

$(document).ready(init);
