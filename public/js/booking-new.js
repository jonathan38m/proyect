/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/booking-new.js":
/*!*************************************!*\
  !*** ./resources/js/booking-new.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* ---------------------------------------PANEL 1 --------------------------- */

/*const app = new Vue({
    el: '#app',
    data: {
        tasks: [
            {
                description:  'prueba',
                pending: true
            },
            {
                description:  'prueba1',
                pending: true
            }
        ]
    }
});*/

/*
$('#locationsButton').click(function(){

    $('#collapseOne').collapse('toggle');

});

$('#collapseOne').on('hidden.bs.collapse', function () {
    $.ajax({
            type: "POST",
            url: '/validateLocationBooking',
            data: { locations: $('#locations').val() },
            success: function( response ) {
                    alert(response.message);
            },
            error: function(response){
                $('#collapseOne').collapse('toggle');
            }
        });
})*/
__webpack_require__(/*! ./booking */ "./resources/js/booking.js");

/***/ }),

/***/ "./resources/js/booking.js":
/*!*********************************!*\
  !*** ./resources/js/booking.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var kushkiIframe,
    kushkiInitilized = false;

function gReCaptchaExpireCallback() {
  destroyKushkiIframe();
}

function validationKushkiSubmit() {
  var validated = true,
      message = '';

  if (!$('#termsConditions').is(':checked')) {
    message = '<strong>Oh snap!</strong> You must agree our Terms & Conditions';
    validated = false;
  }

  var response = grecaptcha.getResponse();

  if (response.length == 0) {
    message = '<strong>Oh snap!</strong> You must verify that you are Human';
    validated = false;
  }

  if (validated) return true;
  $('#statusAlert').removeClass('alert-danger');
  $('#statusAlert').addClass('alert-danger');
  $('#statusAlertMessage').html(message);
  $('#validateFomoMessage').modal({
    show: true
  });
  return false;
}

function destroyKushkiIframe() {
  if (kushkiInitilized) {
    if (typeof kushkiIframe !== 'undefined' && kushkiIframe.length) {
      kushkiIframe.remove();
      $('#kushkiPaymentBoxAreaController').html('');
    }

    $('#kushkiPaymentBoxAreaControllerWrapper').removeClass('initialized');
  }

  kushkiInitilized = false;
}

function initKushkiIframe() {
  destroyKushkiIframe();

  if (validationKushkiSubmit()) {
    var grandTotal = $(".grand_total").val();
    var grandTotal = parseFloat(grandTotal);
    $('#kushkiPaymentBox').html('');

    if (isNaN(grandTotal)) {
      grandTotal = 0;
    }

    var kushki = new KushkiCheckout({
      form: "bookingForm",
      container: "kushkiPaymentBoxAreaController",
      // merchant_id: "10000003138429615486152330629475",
      merchant_id: "1012311609122834973215278043059",
      amount: "$" + grandTotal,
      is_subscription: false,
      currency: "USD",
      language: 'en'
    });
    kushkiIframe = $('iframe#' + kushki.id);
    $('#kushkiPaymentBoxAreaControllerWrapper').addClass('initialized');
    kushkiInitilized = true;
    console.log(kushki, kushkiIframe);
  }
}

$('.goForKushkiPayment').click(function (event) {
  event.preventDefault();
  initKushkiIframe();
});
$('#termsConditions').change(function () {
  destroyKushkiIframe();
});
$('#paymentButtonP,#cartButton').click(function () {
  destroyKushkiIframe();
});
var accommodationBoolean = false;

function validateInput(id) {
  var x = true;
  $("#" + id + " input").each(function () {
    if ($(this).attr('type') == 'radio' && $(this).attr('required') == 'required') {
      if (!$("input[name='" + $(this).attr('name') + "']:radio").is(':checked')) {
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap!</strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("#" + id)[0].scrollIntoView(false);
        x = false;
      }
    } else if ($(this).attr('type') == 'checkbox' && $(this).attr('required') == 'required') {
      if (!$("input[name='" + $(this).attr('name') + "']:checkbox").is(':checked')) {
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("#" + id)[0].scrollIntoView(false);
        x = false;
      }
    } else if ($(this).val() == "" || $(this).val() == null) {
      if ($(this).attr('required') == 'required') {
        x = false;
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("#" + id)[0].scrollIntoView(false);
      }
    } else if ($(this).attr('type') == 'email') {
      patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

      if ($(this).val().search(patron) != 0) {
        x = false;
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
      }
    }
  });
  return x;
}

function validateSelect(id) {
  var x = true;
  $("#" + id + " select").each(function () {
    if ($(this).val() == "" || $(this).val() == null) {
      if ($(this).attr('required') == 'required') {
        x = false;
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("#" + id)[0].scrollIntoView(false);
      }
    }
  });
  return x;
}

function validateTextArea(id) {
  var x = true;
  $("#" + id + " textarea").each(function () {
    if ($(this).val() == "" || $(this).val() == null) {
      if ($(this).attr('required') == 'required') {
        x = false;
        $('#statusAlert').removeClass('alert-danger');
        $('#statusAlert').addClass('alert-danger');
        $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
        $('#validateFomoMessage').modal({
          show: true
        });
        $(this).removeClass("fatal-error");
        $(this).addClass("fatal-error");
        $(this).focus();
        $("#" + id)[0].scrollIntoView(true);
      }
    }
  });
  return x;
}

function focusShow(panel, panelBody) {
  $('#' + panelBody).on('shown.bs.collapse', function () {
    $("#" + panel)[0].scrollIntoView(true);
  });
  $('#' + panelBody).collapse('show');
}
/* ------------------------------------------------------------ */


var courseCart = function courseCart() {
  // get course prices  
  var prices = getCoursesCheckBoxes(); // get number of weeks

  var no_weeks = getWeeksSelect(); // display course name and prices on courses cart

  getCoursesCheckBoxes(); // display number of weeks on courses cart

  getWeeksSelect(); // display options on courses cart

  getOptionsSelect(); // display courses subtotal on courses cart

  subTotal(prices, no_weeks); // get subtotal values in array format

  var subTotalArray = subTotal(prices, no_weeks); // display courses cost on checkout

  var coursesTotalCost = cTotalCost(subTotalArray);
  return coursesTotalCost;
};

$("#locationsButton").on("click", courseCart);
$("#courseButton").on("click", courseCart);
/* ---------------------------------------------------------- */

var getCoursesCheckBoxes = function getCoursesCheckBoxes() {
  var course = $('.courseSelect:checked');
  var amazon = $('#amazonJungle:checked').val();
  var indeginous = $('#indigenousCommunity:checked').val();
  var traveling = $('#travellingClassroom:checked').val();
  var galapagos = $('#galapagosIslands:checked').val();
  var packageProgram = $('#interactivePackage:checked').val();
  var optionsPrivate = $('#optionsPrivateCourses').val();
  var optionsCombinedCourse = $('#optionsCombinedCourse').val();
  var optionsSemi = $('#optionsSemiPrivate').val();
  var optionsGalapagos = $('#optionsGalapagosIslands').val();
  var optionsTraveling = $('#optionsTravellingClassroom').val();
  var optionsPackage = $('#optionsInteractivePackage').val();
  var courseString = '';
  course.each(function () {
    courseString += $(this).val() + "<br/>";
  });

  if (amazon != undefined) {
    courseString += amazon + "<br/>";
  }

  if (indeginous != undefined) {
    courseString += indeginous + "<br/>";
  }

  if (galapagos != undefined) {
    courseString += galapagos + "<br/>";
  }

  if (traveling != undefined) {
    courseString += traveling + "<br/>";
  }

  if (packageProgram != undefined) {
    courseString += packageProgram + "<br/>";
  }

  var courseArray = courseString.split("<br/>");
  $('.course').html(courseString);
  price = '';
  $.each(courseArray, function (index, value) {
    if (value == "Group Classes") {
      price += 139;
      price += "<br/>";
    }

    if (value == "Private Courses") {
      if (optionsPrivate == 1) {
        price += 219;
        price += "<br/>";
      }

      if (optionsPrivate == 2) {
        price += 269;
        price += "<br/>";
      }

      if (optionsPrivate == 3) {
        price += 319;
        price += "<br/>";
      }

      if (optionsPrivate == 4) {
        price += 369;
        price += "<br/>";
      }
    }

    if (value == "Combined Course") {
      if (optionsCombinedCourse == 1) {
        price += 239;
        price += "<br/>";
      }

      if (optionsCombinedCourse == 2) {
        price += 289;
        price += "<br/>";
      }
    }

    if (value == "Semi-Private") {
      if (optionsSemi == 1) {
        price += 159;
        price += "<br/>";
      }

      if (optionsSemi == 2) {
        price += 199;
        price += "<br/>";
      }

      if (optionsSemi == 3) {
        price += 239;
        price += "<br/>";
      }

      if (optionsSemi == 4) {
        price += 279;
        price += "<br/>";
      }
    }

    if (value == "Spanish for Medicine") {
      price += 269;
      price += "<br/>";
    }

    if (value == "DELE Exam Preparation") {
      price += 269;
      price += "<br/>";
    }

    if (value == "Spanish for Professionals") {
      price += 269;
      price += "<br/>";
    }

    if (value == "Amazon Jungle") {
      price += 999;
      price += "<br/>";
    }

    if (value == "Indigenous Community") {
      price += 699;
      price += "<br/>";
    }

    if (value == "Galapagos Islands") {
      if (optionsGalapagos == 1) {
        price += 1999;
        price += "<br/>";
      }

      if (optionsGalapagos == 2) {
        price += 3998;
        price += "<br/>";
      }

      if (optionsGalapagos == 3) {
        price += 5997;
        price += "<br/>";
      }

      if (optionsGalapagos == 4) {
        price += 7996;
        price += "<br/>";
      }
    }

    if (value == "Travelling Classroom") {
      if (optionsTraveling == 1) {
        price += 999;
        price += "<br/>";
      }

      if (optionsTraveling == 2) {
        price += 1699;
        price += "<br/>";
      }

      if (optionsTraveling == 3) {
        price += 1799;
        price += "<br/>";
      }

      if (optionsTraveling == 4) {
        price += 2299;
        price += "<br/>";
      }

      if (optionsTraveling == 5) {
        price += 2899;
        price += "<br/>";
      }

      if (optionsTraveling == 6) {
        price += 3699;
        price += "<br/>";
      }
    }

    if (value == "Interactive Package") {
      if (optionsPackage == 1) {
        price += 1499;
        price += "<br/>";
      }

      if (optionsPackage == 2) {
        price += 1999;
        price += "<br/>";
      }

      if (optionsPackage == 3) {
        price += 1459;
        price += "<br/>";
      }

      if (optionsPackage == 4) {
        price += 2099;
        price += "<br/>";
      }

      if (optionsPackage == 5) {
        price += 3318;
        price += "<br/>";
      }

      if (optionsPackage == 6) {
        price += 4569;
        price += "<br/>";
      }

      if (optionsPackage == 7) {
        price += 3318;
        price += "<br/>";
      }

      if (optionsPackage == 8) {
        price += 5134;
        price += "<br/>";
      }

      if (optionsPackage == 9) {
        price += 5999;
        price += "<br/>";
      }

      if (optionsPackage == 10) {
        price += 5028;
        price += "<br/>";
      }
    }
  });
  var priceArray = price.split("<br/>");
  $('.price').html(price);
  return priceArray;
};
/* ----------------------------------------------------------------WEEKS------------------------------------------------------------- */


var getWeeksSelect = function getWeeksSelect() {
  var weeks = $('.weeksClass option:selected');
  var amazonWeeks = $('#weeksAmazonJungle').val();
  var indeginousWeeks = $('#weeksIndigenousCommunity').val();
  var optionsGalapagos = $('#optionsGalapagosIslands').val();
  var optionsTraveling = $('#optionsTravellingClassroom').val();
  var optionsPackage = $('#optionsInteractivePackage').val();
  var prices = getCoursesCheckBoxes();
  var weeksString = "";
  weeks.each(function () {
    weeksString += $(this).val() + "<br/>";
  });

  if (amazonWeeks != "") {
    weeksString += amazonWeeks + "<br/>";
  }

  if (indeginousWeeks != "") weeksString += indeginousWeeks + "<br/>";
  if (optionsGalapagos != "") weeksString += "1<br/>";
  if (optionsTraveling != "") weeksString += "1<br/>";
  if (optionsPackage != "") weeksString += "1<br/>";
  var weekArray = weeksString.split("<br/>");
  var no_of_weeks = '';
  $.each(weekArray, function (index, value) {
    if (value != "") {
      no_of_weeks += value;
      no_of_weeks += "<br/>";
    }
  });
  $('.weeks').html(no_of_weeks);
  var ww = no_of_weeks.split("<br/>");
  return ww;
};
/* ------------------------------------------------------------OPTIONS----------------------------------------------------------------- */


var getOptionsSelect = function getOptionsSelect() {
  var amazonWeeks = $('#weeksAmazonJungle').val();
  var optionsIndigenous = $('#optionsIndigenousCommunity').val();
  var optionsGalapagos = $('#optionsGalapagosIslands').val();
  var optionsTraveling = $('#optionsTravellingClassroom').val();
  var optionsPackage = $('#optionsInteractivePackage').val();
  var optionsGroupClasses = $('#optionsGroupClasses').val();
  var optionsPrivateCourses = $('#optionsPrivateCourses').val();
  var optionsCombinedCourse = $('#optionsCombinedCourse').val();
  var optionsSemiPrivate = $('#optionsSemiPrivate').val();
  var optionsSpanishMedicine = $('#optionsSpanishMedicine').val();
  var optionsDeleExam = $('#optionsDeleExam').val();
  var optionsSpanishProfessionals = $('#optionsSpanishProfessionals').val();
  var optionsString = "";

  if (optionsGroupClasses != "") {
    if (optionsGroupClasses == 1) {
      optionsString += "20 hours/week<br/>";
    }
  }

  if (optionsPrivateCourses != "") {
    if (optionsPrivateCourses == 1) {
      optionsString += "20 hours/week<br/>";
    }

    if (optionsPrivateCourses == 2) {
      optionsString += "25 hours/week<br/>";
    }

    if (optionsPrivateCourses == 3) {
      optionsString += "30 hours/week<br/>";
    }

    if (optionsPrivateCourses == 4) {
      optionsString += "35 hours/week<br/>";
    }
  }

  if (optionsCombinedCourse != "") {
    if (optionsCombinedCourse == 1) {
      optionsString += "20+10 hours/week<br/>";
    }

    if (optionsCombinedCourse == 2) {
      optionsString += "20+15 hours/week<br/>";
    }
  }

  if (optionsSemiPrivate != "") {
    if (optionsSemiPrivate == 1) {
      optionsString += "20 hours/week<br/>";
    }

    if (optionsSemiPrivate == 2) {
      optionsString += "25 hours/week<br/>";
    }

    if (optionsSemiPrivate == 3) {
      optionsString += "30 hours/week<br/>";
    }

    if (optionsSemiPrivate == 4) {
      optionsString += "35 hours/week<br/>";
    }
  }

  if (optionsSpanishMedicine != "") {
    if (optionsSpanishMedicine == 1) {
      optionsString += "20 hours/week<br/>";
    }
  }

  if (optionsDeleExam != "") {
    if (optionsDeleExam == 1) {
      optionsString += "20 hours/week<br/>";
    }
  }

  if (optionsSpanishProfessionals != "") {
    if (optionsSpanishProfessionals == 1) {
      optionsString += "20 hours/week<br/>";
    }
  }

  if (amazonWeeks != "") {
    optionsString += "Amazon Jungle Spanish Program <br/>";
  }

  if (optionsIndigenous != "") {
    if (optionsIndigenous == 1) {
      optionsString += "Andean Indigenous Community<br/>";
    }

    if (optionsIndigenous == 2) {
      optionsString += "Shuar Indigenous Community<br/>";
    }
  }

  if (optionsGalapagos != "") {
    if (optionsGalapagos == 1) {
      optionsString += "7-Day Spanish Immersion<br/>";
    }

    if (optionsGalapagos == 2) {
      optionsString += "14-Day Discovering Galapagos<br/>";
    }

    if (optionsGalapagos == 3) {
      optionsString += "14-Day Exploring Galapagos<br/>";
    }

    if (optionsGalapagos == 4) {
      optionsString += "11-Day Enchanting Galapagos<br/>";
    }
  }

  if (optionsTraveling != "") {
    if (optionsTraveling == 1) {
      optionsString += "Andes Amazon 7-Days<br/>";
    }

    if (optionsTraveling == 2) {
      optionsString += "Andes Amazon 12-Days<br/>";
    }

    if (optionsTraveling == 3) {
      optionsString += "Walking through Andes 12-Days<br/>";
    }

    if (optionsTraveling == 4) {
      optionsString += "Experience Ecuador 16-Days<br/>";
    }

    if (optionsTraveling == 5) {
      optionsString += "Exploring Ecuador 19-Days<br/>";
    }

    if (optionsTraveling == 6) {
      optionsString += "Charles Darwin 15-Days<br/>";
    }
  }

  if (optionsPackage != "") {
    if (optionsPackage == 1) {
      optionsString += "Package 1<br/>";
    }

    if (optionsPackage == 2) {
      optionsString += "Package 2<br/>";
    }

    if (optionsPackage == 3) {
      optionsString += "Package 3<br/>";
    }

    if (optionsPackage == 4) {
      optionsString += "Package 4<br/>";
    }

    if (optionsPackage == 5) {
      optionsString += "Package 5<br/>";
    }

    if (optionsPackage == 6) {
      optionsString += "Package 6<br/>";
    }

    if (optionsPackage == 7) {
      optionsString += "Package 7<br/>";
    }

    if (optionsPackage == 8) {
      optionsString += "Package 8<br/>";
    }

    if (optionsPackage == 9) {
      optionsString += "Package 9<br/>";
    }

    if (optionsPackage == 10) {
      optionsString += "Package 10<br/>";
    }
  }

  var optionsArray = optionsString.split("<br/>");
  var options = '';
  $.each(optionsArray, function (index, value) {
    if (value != "") {
      options += value;
      options += "<br/>";
    }
  });
  $('.options').html(options);
};
/* ------------------------------------------------------- */


function subTotal(prices, no_weeks) {
  var subtotal = [];

  for (var i = 0; i <= prices.length; i++) {
    if (prices[i] != null) {
      var valu = prices[i] * no_weeks[i];
      subtotal[i] = valu;
    }
  }

  subtot = '';
  $.each(subtotal, function (index, value) {
    if (value != 0) {
      subtot += value;
      subtot += "<br/>";
    }
  });
  $('.subTotal').html(subtot);
  return subtotal;
}
/* --------------------------------------------------------------- */


function cTotalCost(subTotalArray) {
  var coursesTotalCost = 0;
  $.each(subTotalArray, function (index, value) {
    coursesTotalCost += value;
  });
  return coursesTotalCost;
}

;
/* --------------------------------------------------------------- */

var accommodationCart = function accommodationCart() {
  var a = $(".accommSelect:checked").val(); //1,2,3 name accommodation

  var meals = $("#mealDayFamily").val(); //2 or 3 in otavalo

  var baths = $("#bathroomFamily").val(); //private 1 / share 2

  var peoples = $("#howManyPeople").val(); // 1 o 2 

  var rooms = $("#typeRoom").val(); // 2 single 3 double 4 dormitory

  var from = $('#dateAccommodationFrom').val();
  var to = $('#dateAccommodationTo').val();
  desde = new Date(from + 'T00:00:00Z');
  hasta = new Date(to + 'T12:00:00Z');
  diasnoches = (hasta - desde) / 43200000;
  nights = (diasnoches - 1) / 2;
  if (a == 1) aa = "Host Family";
  if (a == 2) aa = "Student Residence with breakfast in Quito";

  if (a == 1 || a == 2) {
    if (peoples == "") peoples = 1;
    if (nights == 0) nights = 1;else if (nights < 0) nights = 0;
  }

  if (a == 3) {
    aa = "I wish to organize my own accommodation";
    peoples = 0;
    nights = 0;
  }

  $(".accommo").html(aa);
  $(".peoples").html(peoples);
  $(".nights").html(nights);

  if (a == 1 && meals == 3 && rooms == 2 && baths == 1) {
    price = 35;
  } else if (a == 1 && meals == 3 && rooms == 2 && baths == 2) {
    price = 30;
  } else if (a == 1 && meals == 2 && rooms == 2 && baths == 1) {
    price = 30;
  } else if (a == 1 && meals == 2 && rooms == 2 && baths == 2) {
    price = 25;
  } else if (a == 1 && meals == 0 && rooms == 2 && baths == 2) {
    price = 21;
  } else if (a == 1 && meals == 0 && rooms == 3 && baths == 2) {
    price = 17.50;
  } else if (a == 1 && meals == 2 && rooms == 3 && baths == 2) {
    price = 20;
  } else if (a == 1 && meals == 2 && rooms == 3 && baths == 1) {
    price = 25;
  } else if (a == 1 && meals == 3 && rooms == 3 && baths == 2) {
    price = 21.50;
  } else if (a == 1 && meals == 3 && rooms == 3 && baths == 1) {
    price = 30;
  } else if (a == 1 && (meals == "" || rooms == "" && baths == "")) {
    price = 21.50;
  } else if (a == 2 && rooms == 2) {
    price = 23;
  } else if (a == 2 && rooms == 3) {
    price = 19;
  } else if (a == 2 && rooms == 4) {
    price = 16;
  } else {
    price = 0;
  }

  $(".accomPrice").html(price);
  var accomCost = price * peoples * nights;
  $(".accomCost").html(accomCost);
  return accomCost;
};

$("#accommodationButton").on("click", accommodationCart);
/* --------------------------------------------------------- */

var grandTotalDisplay = function grandTotalDisplay() {
  var courseCheckoutCost = courseCart();
  var accommCheckoutCost = accommodationCart();
  var registration = parseInt("40");
  var c = parseInt(courseCheckoutCost);
  var a = parseFloat(accommCheckoutCost);

  if (isNaN(a)) {
    a = 0;
  }

  $(".coursesCost").html(c);
  $(".courses_cost").val(c);
  $(".accomCheckoutCost").html(a);
  $(".accommodation_cost").val(a);
  var grandTotal = c + a + registration;
  $(".grandTotal").html(grandTotal);
  $(".grand_total").val(grandTotal);
};

$("#billingInfoButton").on("click", grandTotalDisplay);
/* ---------------------------------------PANEL 1 --------------------------- */

$('#locationsButton').click(function () {
  if (validateInput('locations-B') && validateSelect('locations-B') && validateTextArea('locations-B')) {
    $('#locations-B').collapse('hide');

    if (accommodationBoolean) {
      focusShow('panel-2', 'course-B');
    } else {
      focusShow('panel-3', 'previousKnowledgeSpanish-B');
    }
  }
});
/* -------------------------------- PANEL 2 --------------------------- */

$('#courseButton').click(function () {
  if (validateInput('course-B') && validateSelect('course-B') && validateTextArea('course-B')) {
    $('#course-B').collapse('hide');
    focusShow('panel-3', 'previousKnowledgeSpanish-B');
  }
});
$('#courseButtonP').click(function () {
  $('#course-B').collapse('hide');
  focusShow('panel-1', 'locations-B');
});
/* -------------------------------- PANEL 3 ------------------------------------*/

$('#previousKnowledgeSpanishButton').click(function () {
  if (validateInput('previousKnowledgeSpanish-B') && validateSelect('previousKnowledgeSpanish-B') && validateTextArea('previousKnowledgeSpanish-B')) {
    $('#previousKnowledgeSpanish-B').collapse('hide');

    if (accommodationBoolean) {
      focusShow('panel-4', 'accommodation-B');
    } else {
      focusShow('panel-5', 'billingInfo-B');
    }
  }
});
$('#previousKnowledgeSpanishButtonP').click(function () {
  $('#previousKnowledgeSpanish-B').collapse('hide');

  if (accommodationBoolean) {
    focusShow('panel-2', 'course-B');
  } else {
    focusShow('panel-1', 'locations-B');
  }
});
/* -------------------------------- PANEL 4 ------------------------------------*/

$('#accommodationButton').click(function () {
  if (validateInput('accommodation-B') && validateSelect('accommodation-B') && validateTextArea('accommodation-B')) {
    $('#accommodation-B').collapse('hide');
    focusShow('panel-5', 'billingInfo-B');
  }
});
$('#accommodationButtonP').click(function () {
  $('#accommodation-B').collapse('hide');
  focusShow('panel-3', 'previousKnowledgeSpanish-B');
});
/* -------------------------------- PANEL 5 --------------------------------*/

$('#billingInfoButton').click(function () {
  if (validateInput('billingInfo-B') && validateSelect('billingInfo-B') && validateTextArea('billingInfo-B')) {
    $('#billingInfo-B').collapse('hide');
    focusShow('panel-6', 'airport-information-B');
  }
});
$('#billingInfoButtonP').click(function () {
  $('#billingInfo-B').collapse('hide'); // focusShow('panel-6', 'accommodation-B');

  if (accommodationBoolean) {
    focusShow('panel-4', 'accommodation-B');
  } else {
    focusShow('panel-3', 'previousKnowledgeSpanish-B');
  }
});
/* --------------------------------- PANEL 6 -------------------------------*/

$('#airport-informationButton').click(function () {
  if (validateInput('airport-information-B') && validateSelect('airport-information-B') && validateTextArea('airport-information-B')) {
    $('#airport-information-B').collapse('hide');
    focusShow('panel-7', 'cart-B');
  }
});
$('#airport-informationButtonP').click(function () {
  $('#airport-information-B').collapse('hide');
  focusShow('panel-5', 'billingInfo-B');
});
/* --------------------------------- PANEL 7 -------------------------------*/

$('#cartButton').click(function () {
  if (validateInput('cart-B') && validateSelect('cart-B') && validateTextArea('cart-B')) {
    $('#cart-B').collapse('hide');
    focusShow('panel-8', 'payment-B');
  }
});
$('#cartButtonP').click(function () {
  $('#cart-B').collapse('hide');
  focusShow('panel-6', 'airport-information-B');
});
/* --------------------------- PANEL 8 -----------------------------------------*/

$('#paymentButtonP').click(function () {
  $('#payment-B').collapse('hide');
  focusShow('panel-7', 'cart-B');
});
/* ----------------------------------------------------------------- */

$("input[name='accommodation']").click(function () {
  if ($(this).val() == 1 || $(this).val() == 2) {
    $("#accommodation1").slideDown();
    $("#accommodation2").slideDown();
    $("#accommodation3").slideUp();
    $(".threefour").hide();
    $('#nameHotel').val('');
    $('#addressAccommodation').val('');
    $('#phoneAccommodation').val('');
    $('#nameHotel').attr("disabled", "disabled");
    $('#addressAccommodation').attr("disabled", "disabled");
    $('#phoneAccommodation').attr("disabled", "disabled");
    $('#howManyPeople').removeAttr('disabled');
    $('#typeRoom').removeAttr('disabled');
    $('#bathroomFamily').removeAttr('disabled');
    $('#mealDayFamily').removeAttr('disabled');

    if ($(this).val() == 2) {
      $('#bathroomFamily').attr("disabled", "disabled");
      $('#mealDayFamily').attr("disabled", "disabled");
      $('#bathroomFamily').val('');
      $('#mealDayFamily').val('');
      $("#accommodation1").slideUp();
      $(".threefour").show();
    }
  } else if ($(this).val() == 3) {
    $("#accommodation1").slideUp();
    $("#accommodation2").slideUp();
    $("#accommodation3").slideDown();
    $('#nameHotel').removeAttr('disabled');
    $('#addressAccommodation').removeAttr('disabled');
    $('#phoneAccommodation').removeAttr('disabled');
    $('#howManyPeople').val('');
    $('#typeRoom').val('');
    $('#mealDayFamily').val('');
    $('#bathroomFamily').val('');
    $('#howManyPeople').attr("disabled", "disabled");
    $('#typeRoom').attr("disabled", "disabled");
    $('#mealDayFamily').attr("disabled", "disabled");
    $('#bathroomFamily').attr("disabled", "disabled");
  }
}); //  $(".payment2").slideUp();

$(".payment3").slideUp();
$("input[name='payment_method']").click(function () {
  if ($(this).val() == 1) {
    $(".payment1").slideDown();
    $(".payment2").slideUp();
    $(".payment3").slideUp();
    $(".payment4").slideUp();
    $("#placeOrderSubmitBtn").hide();
    $('#ccnum').attr("disabled", false);
    $('#cvc').attr("disabled", false);
    $('#expiry_month').attr("disabled", false);
    $('#expiry_year').attr("disabled", false);
  } else if ($(this).val() == 2) {
    $(".payment1").slideUp();
    $(".payment2").slideDown();
    $(".payment3").slideUp();
    $(".payment4").slideUp();
    $("#placeOrderSubmitBtn").show();
    $('#ccnum').attr("disabled", "disabled");
    $('#cvc').attr("disabled", "disabled");
    $('#expiry_month').attr("disabled", "disabled");
    $('#expiry_year').attr("disabled", "disabled");
  } else if ($(this).val() == 3) {
    $(".payment1").slideUp();
    $(".payment2").slideUp();
    $(".payment3").slideDown();
    $(".payment4").slideUp();
    $("#placeOrderSubmitBtn").show();
    $('#ccnum').attr("disabled", "disabled");
    $('#cvc').attr("disabled", "disabled");
    $('#expiry_month').attr("disabled", "disabled");
    $('#expiry_year').attr("disabled", "disabled");
  } else if ($(this).val() == 4) {
    $(".payment1").slideUp();
    $(".payment2").slideUp();
    $(".payment3").slideUp();
    $(".payment4").slideDown();
    $("#placeOrderSubmitBtn").show();
    $('#ccnum').attr("disabled", "disabled");
    $('#cvc').attr("disabled", "disabled");
    $('#expiry_month').attr("disabled", "disabled");
    $('#expiry_year').attr("disabled", "disabled");
  }
});
$('#quito').click(function () {
  if ($(this).is(':checked')) {
    $('#dateQuitoFrom').removeAttr('disabled');
    $('#dateQuitoFrom').attr("required", "required");
    $('#weekslocationsQuito').removeAttr('disabled');
    $('#weekslocationsQuito').attr("required", "required");
  } else {
    $('#dateQuitoFrom').attr("disabled", "disabled");
    $('#dateQuitoFrom').val('');
    $('#dateQuitoFrom').removeAttr("required");
    $('#weekslocationsQuito').attr("disabled", "disabled");
    $('#weekslocationsQuito').val('');
    $('#weekslocationsQuito').removeAttr("required");
  }
});
$('#otavalo').click(function () {
  if ($(this).is(':checked')) {
    $('#dateOtavaloFrom').removeAttr('disabled');
    $('#dateOtavaloFrom').attr("required", "required");
    $('#weekslocationsOtavalo').removeAttr('disabled');
    $('#weekslocationsOtavalo').attr("required", "required");
  } else {
    $('#dateOtavaloFrom').attr("disabled", "disabled");
    $('#dateOtavaloFrom').val('');
    $('#dateOtavaloFrom').removeAttr("required");
    $('#weekslocationsOtavalo').attr("disabled", "disabled");
    $('#weekslocationsOtavalo').val('');
    $('#weekslocationsOtavalo').removeAttr("required");
  }
});
$('#amazonJungle').click(function () {
  if ($(this).is(':checked')) {
    $('#dateAmazonJungleFrom').removeAttr('disabled');
    $('#dateAmazonJungleFrom').attr("required", "required");
    $('#weeksAmazonJungle').removeAttr('disabled');
    $('#weeksAmazonJungle').attr("required", "required");
  } else {
    $('#dateAmazonJungleFrom').attr("disabled", "disabled");
    $('#dateAmazonJungleFrom').val('');
    $('#dateAmazonJungleFrom').removeAttr("required");
    $('#weeksAmazonJungle').attr("disabled", "disabled");
    $('#weeksAmazonJungle').val('');
    $('#weeksAmazonJungle').removeAttr("required");
  }
});
$('#indigenousCommunity').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsIndigenousCommunity').removeAttr('disabled');
    $('#optionsIndigenousCommunity').attr("required", "required");
    $('#dateIndigenousCommunityFrom').removeAttr('disabled');
    $('#dateIndigenousCommunityFrom').attr("required", "required");
    $('#weeksIndigenousCommunity').removeAttr('disabled');
    $('#weeksIndigenousCommunity').attr("required", "required");
  } else {
    $('#optionsIndigenousCommunity').attr("disabled", "disabled");
    $('#optionsIndigenousCommunity').val('');
    $('#optionsIndigenousCommunity').removeAttr("required");
    $('#dateIndigenousCommunityFrom').attr("disabled", "disabled");
    $('#dateIndigenousCommunityFrom').val('');
    $('#dateIndigenousCommunityFrom').removeAttr("required");
    $('#weeksIndigenousCommunity').attr("disabled", "disabled");
    $('#weeksIndigenousCommunity').val('');
    $('#weeksIndigenousCommunity').removeAttr("required");
  }
});
$('#galapagosIslands').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsGalapagosIslands').removeAttr('disabled');
    $('#optionsGalapagosIslands').attr("required", "required");
    $('#dateGalapagosIslandsFrom').removeAttr('disabled');
    $('#dateGalapagosIslandsFrom').attr("required", "required");
  } else {
    $('#optionsGalapagosIslands').attr("disabled", "disabled");
    $('#optionsGalapagosIslands').val('');
    $('#optionsGalapagosIslands').removeAttr("required");
    $('#dateGalapagosIslandsFrom').attr("disabled", "disabled");
    $('#dateGalapagosIslandsFrom').val('');
    $('#dateGalapagosIslandsFrom').removeAttr("required");
  }
});
$('#travellingClassroom').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsTravellingClassroom').removeAttr('disabled');
    $('#optionsTravellingClassroom').attr("required", "required");
    $('#dateTravellingClassroomFrom').removeAttr('disabled');
    $('#dateTravellingClassroomFrom').attr("required", "required");
  } else {
    $('#optionsTravellingClassroom').attr("disabled", "disabled");
    $('#optionsTravellingClassroom').val('');
    $('#optionsTravellingClassroom').removeAttr("required");
    $('#dateTravellingClassroomFrom').attr("disabled", "disabled");
    $('#dateTravellingClassroomFrom').val('');
    $('#dateTravellingClassroomFrom').removeAttr("required");
  }
});
$('#interactivePackage').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsInteractivePackage').removeAttr('disabled');
    $('#optionsInteractivePackage').attr("required", "required");
    $('#dateInteractivePackageFrom').removeAttr('disabled');
    $('#dateInteractivePackageFrom').attr("required", "required");
  } else {
    $('#optionsInteractivePackage').attr("disabled", "disabled");
    $('#optionsInteractivePackage').val('');
    $('#optionsInteractivePackage').removeAttr("required");
    $('#dateInteractivePackageFrom').attr("disabled", "disabled");
    $('#dateInteractivePackageFrom').val('');
    $('#dateInteractivePackageFrom').removeAttr("required");
  }
});
$('#groupClasses').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsGroupClasses').removeAttr('disabled');
    $('#weeksGroupClasses').removeAttr('disabled');
  } else {
    $('#optionsGroupClasses').attr("disabled", "disabled");
    $('#optionsGroupClasses').val('');
    $('#weeksGroupClasses').attr("disabled", "disabled");
    $('#weeksGroupClasses').val('');
  }
});
$("#groupClasses").change(function () {
  if ($('#groupClasses').is(':checked')) {
    $('#optionsGroupClasses').attr("required", "required");
    $('#weeksGroupClasses').attr("required", "required");
  } else {
    $('#optionsGroupClasses').removeAttr("required");
    $('#weeksGroupClasses').removeAttr("required");
  }
});
$('#privateCourses').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsPrivateCourses').removeAttr('disabled');
    $('#weeksPrivateCourses').removeAttr('disabled');
  } else {
    $('#optionsPrivateCourses').attr("disabled", "disabled");
    $('#optionsPrivateCourses').val('');
    $('#weeksPrivateCourses').attr("disabled", "disabled");
    $('#weeksPrivateCourses').val('');
  }
});
$("#privateCourses").change(function () {
  if ($('#privateCourses').is(':checked')) {
    $('#optionsPrivateCourses').attr("required", "required");
    $('#weeksPrivateCourses').attr("required", "required");
  } else {
    $('#weeksPrivateCourses').removeAttr("required");
    $('#optionsPrivateCourses').removeAttr("required");
  }
});
$('#combinedCourse').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsCombinedCourse').removeAttr('disabled');
    $('#weeksCombinedCourse').removeAttr('disabled');
  } else {
    $('#optionsCombinedCourse').attr("disabled", "disabled");
    $('#optionsCombinedCourse').val('');
    $('#weeksCombinedCourse').attr("disabled", "disabled");
    $('#weeksCombinedCourse').val('');
  }
});
$("#combinedCourse").change(function () {
  if ($('#combinedCourse').is(':checked')) {
    $('#optionsCombinedCourse').attr("required", "required");
    $('#weeksCombinedCourse').attr("required", "required");
  } else {
    $('#optionsCombinedCourse').removeAttr("required");
    $('#weeksCombinedCourse').removeAttr("required");
  }
});
$('#semiPrivate').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsSemiPrivate').removeAttr('disabled');
    $('#weeksSemiPrivate').removeAttr('disabled');
  } else {
    $('#optionsSemiPrivate').attr("disabled", "disabled");
    $('#optionsSemiPrivate').val('');
    $('#weeksSemiPrivate').attr("disabled", "disabled");
    $('#weeksSemiPrivate').val('');
  }
});
$("#semiPrivate").change(function () {
  if ($('#semiPrivate').is(':checked')) {
    $('#weeksSemiPrivate').attr("required", "required");
    $('#optionsSemiPrivate').attr("required", "required");
  } else {
    $('#weeksSemiPrivate').removeAttr("required");
    $('#optionsSemiPrivate').removeAttr("required");
  }
});
$('#spanishMedicine').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsSpanishMedicine').removeAttr('disabled');
    $('#weeksSpanishMedicine').removeAttr('disabled');
  } else {
    $('#optionsSpanishMedicine').attr("disabled", "disabled");
    $('#optionsSpanishMedicine').val('');
    $('#weeksSpanishMedicine').attr("disabled", "disabled");
    $('#weeksSpanishMedicine').val('');
  }
});
$("#spanishMedicine").change(function () {
  if ($('#spanishMedicine').is(':checked')) {
    $('#optionsSpanishMedicine').attr("required", "required");
    $('#weeksSpanishMedicine').attr("required", "required");
  } else {
    $('#optionsSpanishMedicine').removeAttr("required");
    $('#weeksSpanishMedicine').removeAttr("required");
  }
});
$('#deleExam').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsDeleExam').removeAttr('disabled');
    $('#weeksDeleExam').removeAttr('disabled');
  } else {
    $('#optionsDeleExam').attr("disabled", "disabled");
    $('#optionsDeleExam').val('');
    $('#weeksDeleExam').attr("disabled", "disabled");
    $('#weeksDeleExam').val('');
  }
});
$("#deleExam").change(function () {
  if ($('#deleExam').is(':checked')) {
    $('#optionsDeleExam').attr("required", "required");
    $('#weeksDeleExam').attr("required", "required");
  } else {
    $('#optionsDeleExam').removeAttr("required");
    $('#weeksDeleExam').removeAttr("required");
  }
});
$('#spanishProfessionals').click(function () {
  if ($(this).is(':checked')) {
    $('#optionsSpanishProfessionals').removeAttr('disabled');
    $('#weeksSpanishProfessionals').removeAttr('disabled');
  } else {
    $('#optionsSpanishProfessionals').attr("disabled", "disabled");
    $('#optionsSpanishProfessionals').val('');
    $('#weeksSpanishProfessionals').attr("disabled", "disabled");
    $('#weeksSpanishProfessionals').val('');
  }
});
$("#spanishProfessionals").change(function () {
  if ($('#spanishProfessionals').is(':checked')) {
    $('#optionsSpanishProfessionals').attr("required", "required");
    $('#weeksSpanishProfessionals').attr("required", "required");
  } else {
    $('#optionsSpanishProfessionals').removeAttr("required");
    $('#weeksSpanishProfessionals').removeAttr("required");
  }
});

function formY() {
  $("#panel-2").slideDown();
  $("#panel-4").slideDown();
  accommodationBoolean = true;
}

function formN() {
  $("#panel-2").slideUp();
  $("#panel-4").slideUp();
  accommodationBoolean = false;
}

$(document).ready(function () {
  if ($('#quito').is(':checked') || $('#otavalo').is(':checked')) {
    formY();
  } else formN();
});
$("#quito").change(function () {
  if ($('#quito').is(':checked') || $('#otavalo').is(':checked')) {
    formY();
  } else formN();
});
$("#otavalo").change(function () {
  if ($('#otavalo').is(':checked') || $('#quito').is(':checked')) {
    formY();
  } else formN();
});
var forms = document.getElementsByTagName('form');
$("input").change(function () {
  if ($(this).val() != "" || $(this).val() != null) {
    $(this).removeClass("fatal-error");
  }
});
$("textarea").change(function () {
  if ($(this).val() != "" || $(this).val() != null) {
    $(this).removeClass("fatal-error");
  }
});
$("select").change(function () {
  if ($(this).val() != "" || $(this).val() != null) {
    $(this).removeClass("fatal-error");
  }
});

for (var i = 0; i < forms.length; i++) {
  forms[i].noValidate = true;
  forms[i].addEventListener('submit', function (event) {
    //Prevent submission if checkValidity on the form returns false.
    var response = grecaptcha.getResponse();

    if (response.length == 0) {
      event.preventDefault();
      $('#statusAlert').removeClass('alert-danger');
      $('#statusAlert').addClass('alert-danger');
      $('#statusAlertMessage').html('<strong>Oh snap! </strong> You must verify that you are Human');
      $('#validateFomoMessage').modal({
        show: true
      });
    }

    $("#" + $(this).attr('id') + " input").each(function () {
      if ($(this).attr('type') == 'radio' && $(this).attr('required') == 'required') {
        if (!$("input[name='" + $(this).attr('name') + "']:radio").is(':checked')) {
          event.preventDefault();
          $('#statusAlert').removeClass('alert-danger');
          $('#statusAlert').addClass('alert-danger');
          $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
          $('#validateFomoMessage').modal({
            show: true
          });
          $(this).removeClass("fatal-error");
          $(this).addClass("fatal-error");
          $(this).focus();
          $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
        }
      } else if ($(this).attr('type') == 'checkbox' && $(this).attr('required') == 'required') {
        if (!$("input[name='" + $(this).attr('name') + "']:checkbox").is(':checked')) {
          event.preventDefault();
          $('#statusAlert').removeClass('alert-danger');
          $('#statusAlert').addClass('alert-danger');
          $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
          $('#validateFomoMessage').modal({
            show: true
          });
          $(this).removeClass("fatal-error");
          $(this).addClass("fatal-error");
          $(this).focus();
          $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
        }
      } else if ($(this).val() == "" || $(this).val() == null) {
        if ($(this).attr('required') == 'required') {
          event.preventDefault();
          $('#statusAlert').removeClass('alert-danger');
          $('#statusAlert').addClass('alert-danger');
          $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
          $('#validateFomoMessage').modal({
            show: true
          });
          $(this).removeClass("fatal-error");
          $(this).addClass("fatal-error");
          $(this).focus();
          $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
        }
      }
    });
    $("#" + $(this).attr('id') + " textarea").each(function () {
      if ($(this).val() == "" || $(this).val() == null) {
        if ($(this).attr('required') == 'required') {
          event.preventDefault();
          $('#statusAlert').removeClass('alert-danger');
          $('#statusAlert').addClass('alert-danger');
          $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
          $('#validateFomoMessage').modal({
            show: true
          });
          $(this).removeClass("fatal-error");
          $(this).addClass("fatal-error");
          $(this).focus();
          $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
        }
      }
    });
    $("#" + $(this).attr('id') + " select").each(function () {
      if ($(this).val() == "" || $(this).val() == null) {
        if ($(this).attr('required') == 'required') {
          event.preventDefault();
          $('#statusAlert').removeClass('alert-danger');
          $('#statusAlert').addClass('alert-danger');
          $('#statusAlertMessage').html('<strong>Oh snap! </strong>' + $(this).attr('date-message'));
          $('#validateFomoMessage').modal({
            show: true
          });
          $(this).removeClass("fatal-error");
          $(this).addClass("fatal-error");
          $(this).focus();
          $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
        }
      }
    });
  }, false);
}

windows = $(window).width();

if (windows > 600) {
  $('.form_date').datetimepicker({
    language: 'en',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
  });
} else {
  $('.form_date input').removeAttr("readonly");
  $('.form_date span').each(function () {
    $(this).remove();
  });
  $('.form_date').removeClass();
}

function init() {
  document.getElementById("bookingForm").reset();
}

window.onload = init;

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/booking-new.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\ise-ingles\app\resources\js\booking-new.js */"./resources/js/booking-new.js");


/***/ })

/******/ });
//# sourceMappingURL=booking-new.js.map