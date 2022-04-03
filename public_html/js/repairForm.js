$(function () {

    $('#repairForm , #registrationForm').on('submit', function (e) {
      var col = [];
      var name = [];
      var formName = $(this).attr('name')
      $(this).serializeArray().map(function(x){col.push( x.name ); name.push( x.value )})
      e.preventDefault();
      console.log(col);

      $.ajax({
        type: 'post',
        url: '/handleSubmit.php',
        data: {'column':col, 'value':name, 'form':formName},
        success: function(data) {
          // console.log(data);
          if (data == "success"){ 
            alert("success, Data Added");
            window.location = "../";
          } else {console.log(data); alert("Check Values, Properly OR Server is Down")}
      },
      });
    });

  });
  $(function () {

    $('#LoginForm').on('submit', function (e) {
      var col = [];
      var name = [];
      var formName = $(this).attr('name')
      $(this).serializeArray().map(function(x){col.push( x.name ); name.push( x.value )})
      e.preventDefault();
      console.log(col);

      $.ajax({
        type: 'get',
        url: '/handleSubmit.php',
        data: {'column':col, 'value':name, 'form':formName},
        success: function(data) {
          // console.log(data);
          if (data == "Exist"){ 
            alert("success");
            window.location = "../";
          } else {alert("Failed To Login");}
      },
      });
    });

  });

  $(function () {

    $('#LogoutBtn').click( function (e) {
      $.ajax({
        type: "POST",
        url: "handleSubmit.php",
        data: { logout: "True" }
      }).done(function( msg ) {
        alert( "Logout: " + msg );
        window.location = "../";
      });

    });
  })

// LoginForm
// registrationForm