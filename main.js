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

   var avatar = document.getElementsByClassName('overlay')[0];
   var avatarUl = document.querySelector('.avatar ul');

   // toggles hide/show when avatar is clicked
   avatar.onclick = function() {
      document.querySelector('.avatar ul').classList.toggle('hide');
      document.querySelector('.avatar ul').classList.toggle('show');
   }

   // if user clicks away form dropdown this hides the dropdown
   window.onclick = function(e) {

      if (!e.target.parentElement.classList.contains('avatar')) {

         if (avatarUl.classList.contains('show')) {
            avatarUl.classList.toggle('hide');
            avatarUl.classList.toggle('show');
         }
      }


   }



}
