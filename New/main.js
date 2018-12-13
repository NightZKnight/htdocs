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
  $('add').onclick = function() {

      $('dim').classList.toggle('see-now');
      $('login-popup').classList.toggle('hidden');
      scroll.top;

  }

  $('dim').onclick = function() {

    $('dim').classList.toggle('see-now');
    $('login-popup').classList.toggle('hidden');

  }



}
