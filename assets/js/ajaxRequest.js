function AJAX_REQUEST(strAddress)
{
  /**document.getElementById("status").innerHTML = "Updating Ticker...."; */

  /** Object to handle XML Requests. */
  var ajax_http;

  try
  {
    /** Opera 8.0+, Firefox, Safari **/
    ajax_http = new XMLHttpRequest();

  } catch (e){

    /** Internet Explorer **/
    try{
      ajax_http = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {

      try{
        ajax_http = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        return false;
      }

    }
  }

  /** Asynchronous event on AJAX Completion. */
  ajax_http.onreadystatechange =
  function()
  {
    if(ajax_http.readyState != 4)
      return;


    if (ajax_http.status == 200)
    {
      document.getElementById("price").innerHTML = ajax_http.responseText;
      /** document.getElementById("status").innerHTML = "Waiting..."; */
    }
    else
      document.getElementById("status").innerHTML = "Failed to Update....";

  }

  ajax_http.open("GET", strAddress, true);
  ajax_http.send();
}

setInterval(function(){

AJAX_REQUEST("price.php");

}, 1000);
