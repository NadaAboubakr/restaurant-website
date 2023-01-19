

// Below Function Executes On Form Submit
function ValidationEvent() {
  // Storing Field Values In Variables
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  // Regular Expression For Email
  var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
  // Conditions
  if (username != '' && email != '' && password != '') {
    if (email.match(emailReg)) {
          if (password.length > 8) {
          alert("All type of validation has done on OnSubmit event.");
          return true;
          } else {
          alert("Password must be at least 8 characters long!");
          return false;
        }
    } else {
    alert("Invalid Email Address...!!!");
    return false;
    }

  } else {
  alert("All fields are required.....!");
  return false;
  }
  }
  function Validate(){
    var date = document.getElementById("date").value;
    var people = document.getElementById("people").value;
    var time = document.getElementById("time").value;

  }
  function inquiry(){
    var username_inquiry = document.getElementById("name-inquiry").value;
    var email_inquiry = document.getElementById("email-inquiry").value;
    var msg_inquiry = document.getElementById("comment-inquiry").value;

  }
  function gofb(){
    a= window.confirm("WE will happy of your visit to our facebook page.");
    if (a)
    window.location="https://www.facebook.com/profile.php?id=100088979765954&mibextid=LQQJ4d";
    }
    function goinsta(){
      a= window.confirm("we will be happy to visit our page on instagram? ");
    if (a)
    window.location="https://www.instagram.com/invites/contact/?i=18gqgxa0ld27&utm_content=q4dueqjhttp://www.instagram.com";
    }
    function gotwitt(){
    a= window.confirm("we will be happy to visit our page on twitter? ");
    if (a)
    window.location="https://twitter.com/henasrestaurant";}