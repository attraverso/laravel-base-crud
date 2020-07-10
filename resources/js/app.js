require('./bootstrap');
import $ from 'jquery';
// window.$ = window.jQuery = $;

$(document).ready(function(){
  // alert('hello');
  $firstnameCheck = $('#firstname-input').val();
  $lastnameCheck = $('#lastname-input').val();
  $studentIDCheck = $('#student-id-input').val();
  $emailCheck = $('#email-input').val();
})/* closing document.ready */