//test for getting url value from attr
    // var img1 = $('.test').attr("data-thumbnail");
    // console.log(img1);

    //test for iterating over child elements
    var langArray = [];
    $('.vodiapicker option').each(function () {
      var img = $(this).attr("data-thumbnail");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li><a href="'+ value +'"><img src="' + img + '" alt="" /><span>' + text + '</span></a></li>';
      langArray.push(item);
    })

    $('#a').html(langArray);

    //Set the button value to the first el of the array
    $('.btn-select').html(langArray[0]);
    $('.btn-select').attr('value', 'en');

    //change button stuff on click
    $('#a li').click(function () {
      var img = $(this).find('img').attr("src");
      var value = $(this).find('img').attr('value');
      var text = this.innerText;
      var item = '<li><a href="'+ value +'"><img src="' + img + '" alt="" /><span>' + text + '</span></a></li>';
      $('.btn-select').html(item);
      $('.btn-select').attr('value', value);
      $(".b").toggle();
      //console.log(value);
    });

    $(".btn-select").click(function () {
      $(".b").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang) {
      //find an item with value of sessionLang
      var langIndex = langArray.indexOf(sessionLang);
      $('.btn-select').html(langArray[langIndex]);
      $('.btn-select').attr('value', sessionLang);
    } else {
      var langIndex = langArray.indexOf('ch');
      // console.log(langIndex);
      $('.btn-select').html(langArray[langIndex]);
      //$('.btn-select').attr('value', 'en');
    }


    //test for getting url value from attr
    // var img1 = $('.test').attr("data-thumbnail");
    // console.log(img1);

    //test for iterating over child elements
    var langArray = [];
    $('.vodiapicker2 option').each(function () {
      var img = $(this).attr("data-thumbnail2");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li><a href="'+ value +'"><img src="' + img + '" alt="" /><span>' + text + '</span></a></li>';
      langArray.push(item);
    })

    $('#a2').html(langArray);

    //Set the button value to the first el of the array
    $('.btn-select2').html(langArray[0]);
    $('.btn-select2').attr('value', 'en');

    //change button stuff on click
    $('#a2 li').click(function () {
      var img = $(this).find('img').attr("src");
      var value = $(this).find('img').attr('value');
      var text = this.innerText;
      var item = '<li><a href="'+ value +'"><img src="' + img + '" alt="" /><span>' + text + '</span></a></li>';
      $('.btn-select2').html(item);
      $('.btn-select2').attr('value', value);
      $(".b2").toggle();
      //console.log(value);
    });

    $(".btn-select2").click(function () {
      $(".b2").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang) {
      //find an item with value of sessionLang
      var langIndex = langArray.indexOf(sessionLang);
      $('.btn-select2').html(langArray[langIndex]);
      $('.btn-select2').attr('value', sessionLang);
    } else {
      var langIndex = langArray.indexOf('ch');
      // console.log(langIndex);
      $('.btn-select2').html(langArray[langIndex]);
      //$('.btn-select').attr('value', 'en');
    }
