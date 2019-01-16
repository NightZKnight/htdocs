window.onload = function() {

  function Real(name1, age1) {
    this.name = name1;
    this.age = age1;
    this.hair = 'brown';
  }

  var ab = new Real('bob', 27);
  console.log(ab.age);

  function $(id) {
    return document.getElementById(id);
  }

  //onClick of the add button
  //taggle class see-now on the dim element
  //and hidden on the login element.
  // $('add').onclick = function() {
  //
  //     $('dim').classList.toggle('see-now');
  //     $('login-popup').classList.toggle('hidden');
  //     scroll.top;
  //
  // }


}
