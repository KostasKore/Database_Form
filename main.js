$(document).ready(function(){

  function A(){
    var select = document.getElementById('change').value;

    if (select == 'other')
    {
      document.getElementById('hidden').style.display = 'block';

    }
    else 
    {
      document.getElementById('hidden').style.display = 'none';
    }

  }//function



});
