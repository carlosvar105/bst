//
// $( document ).ready(function(){
//   $.getJSON( "list.json", function( data ) {
//     var items = [];
//     $.each( data, function( key, val ) {
//       items.push( "<li id='" + key + "'>" + val + "</li>" );
//     });
//
//     $( "<ul/>", {
//       "class": "my-new-list",
//       html: items.join( "" )
//     }).appendTo( "body" );
//   });
//
// })

// A simple redirect when a close icon is clicked, this aldo can be achieved by an href on the icon (HTML)
function deletePerson(value) {
  console.log(value);
  document.getElementById(value).style.display = "none";
  window.location.replace("submitperson.php?person=".concat(value));
}
