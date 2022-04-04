
  $('#dropBtn').on('change', function (e) {
    var optionSelected = $("option:selected", this).text();
    otherArray = ["Chromebook" , "OMEN by HP" ,"Pavilion " , "Envy" ];
    dellArray = ["Dell1" , "Dell2" , "Dell3" , "Dell4"   ];
    asusArray = ["Asus1" , "Asus2" ,"Asus3" ,"Asus4" ,"Asus5" ,"Asus6" ];
    console.log(optionSelected)
    if (optionSelected == "Dell"){
      $("#innerHtmlProduct").html(
      dellArray.map((e) => {
        return(
          "<div class='col-sm-3 laptop_view'>\
            <div class='card'>\
              <div class='card-body'>\
                <h5 class='card-title'>"+ e +" </h5>\
                <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>\
                <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>\
                <a href='/repair.php?p="+ e +"' class='btn btn-primary laptop_view_btn'>Go somewhere</a>\
              </div>\
            </div>\
          </div>"
        );
      })
      )
    }
    else if (optionSelected == "Asus"){
      $("#innerHtmlProduct").html(
      asusArray.map((e) => {
        return(
          "<div class='col-sm-3 laptop_view'>\
            <div class='card'>\
              <div class='card-body'>\
                <h5 class='card-title'>"+ e +" </h5>\
                <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>\
                <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>\
                <a href='/repair.php?p="+ e +"' class='btn btn-primary laptop_view_btn'>Go somewhere</a>\
              </div>\
            </div>\
          </div>"
        );
      })
      )

    }
    else if (optionSelected == "HP"){
      $("#innerHtmlProduct").html(
      otherArray.map((e) => {
        return(
          "<div class='col-sm-3 laptop_view'>\
            <div class='card'>\
              <div class='card-body'>\
                <h5 class='card-title'>"+ e +" </h5>\
                <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>\
                <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>\
                <a href='/repair.php?p="+ e +"' class='btn btn-primary laptop_view_btn'>Go somewhere</a>\
              </div>\
            </div>\
          </div>"
        );
      })
      )
      
    }
  });