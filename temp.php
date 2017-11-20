<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>

    <style media="screen">

      a{
        text-decoration: none;
      }

      .test{
        display: inline-block;
      }

      .test::after {
        content: '';
        display: block;
        margin: auto;
        width: 0;
        height: 2px;
        background: #000;
        transition: width .1s ease-in-out;
      }

      .test:hover::after {
        width: 100%;
        //transition: width .3s;
      }

      .ttt {
        border: 0;
        display: inline-block;
      }

      .ttt {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #000;
        transition: width 250ms ease all;
      }

      .ttt:hover::after {
        width: 100%;
      }



      .group        {
        position:relative;
        margin-bottom:45px;
      }
      input         {
        font-size:18px;
        padding:10px 10px 10px 5px;
        display:block;
        width:300px;
        border:none;
        border-bottom:1px solid #757575;
      }
      input:focus {
        outline:none;
      }
      label          {
        color:#999;
        font-size:18px;
        font-weight:normal;
        position:absolute;
        pointer-events:none;
        left:5px;
        top:10px;
        transition:0.2s ease all;
      }

      .bar  { position:relative; display:block; width:300px; }
      .bar:before, .bar:after   {
        content:'';
        height:2px;
        width:0;
        bottom:1px;
        position:absolute;
        background:#5264AE;
        transition:0.2s ease all;
      }
      .bar:before {
        left:50%;
      }
      .bar:after {
        right:50%;
      }

      /* active state */
      input:focus ~ .bar:before, input:focus ~ .bar:after {
        width:50%;
      }
      input:focus ~ label, input:valid ~ label {
        top:-20px;
        font-size:14px;
        color:#5264AE;
      }

    </style>

  </head>
  <body style="font-family: Arial;">

    hi this is a test <a class="test" href="#">HI THIS</a> too see. <br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br>
    <br>
    <div class="group">
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>




  </body>
</html>
