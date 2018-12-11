window.onload = function() {

  function Real(name1) {
    this.name = name1;
    this.age = 15;
    this.hair = 'brown';
  }

  var ab = new Real('bob');
  console.log(ab.age);

  function $(id) {
    return document.getElementById(id);
  }

  //onClick of the add button
  //taggle class see-now on the dim element
  //and hidden on the login element.
  document.getElementById('add').onclick = function() {
      //document.getElementById('login').classList.toggle('hidden');

      // var elems = document.getElementsByClassName('dim');
      // for(var i = 0; i < elems.length; i++) {
      //   elems[i].classList.toggle('see-now');
      // }

      $('dim').classList.toggle('see-now');
      $('login-popup').classList.toggle('hidden');
      scroll.top;

  }



}
