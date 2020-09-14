$(document).ready(function() {

    $(document).on('click keyup ', 'input', function() {
        var id = ($(this).attr('id'));
        var clas = ($(this).attr('class'));
        pass(id, clas);
    });

    function pass(id, clas) {
        $("#" + id).on('input', function() {
            var label = "#" + id;
            var error = "#" + id + "err";

            if (clas.startsWith("num")) {
                num(label, error);
            } else if (clas.startsWith("str")) {
                str(label, error);
            } else if (clas.startsWith("dat")) {
                dat(label, error);
            } else if (clas.startsWith("ver")) {
                ver(label, error);
            } else if (clas.startsWith("has")) {
                hash(label, error);
            } else if (clas.startsWith("iso")) {
                iso(label, error);
            }
        });
    }

    //error calls function
    function num(label, error) {
        var data = $(label).val();
        var regx = /^[0-9]+$/;
        if (data.match(regx)) {

            success(label, error);
        } else if (data == '') {
            empty(label, error);

        } else {
            errors(label, error, 'Only Numeric Digits(0 to 9) Allowed!');
        }
        return string;
    }

    function ver(label, error) {
        var data = $(label).val();
        var regx = /^[0-9]+$/;
        var reg2 = /^(\d*\.)?\d+$/igm
        if (data.match(regx) || data.match(reg2)) {
            success(label, error);

        } else if (data == '') {

            empty(label, error);
        } else {
            errors(label, error, 'Only Numeric Digits(0 to 9) Allowed!');
        }
    }

    function str(label, error) {
        var data = $(label).val();
        var regx = /[[{a-zA-Z\d\s!(~=|";:'\-/_.,+@#%^&*$><}\])]/g;
        if (data.match(regx)) {
            success(label, error);

        } else if (data == '') {
            empty(label, error);

        } else {
            errors(label, error, 'type a valid string');
        }
    }

    function hash(label, error) {
        var data = $(label).val();
        var regx = /^[a-f0-9]{32}$/gm;
        if (data.match(regx)) {
            success(label, error);

        } else if (data == '') {
            empty(label, error);

        } else {
            errors(label, error, 'invalid MD5 hash ');
        }
    }

    function dat(label, error) {
        var data = $(label).val();
        var regx = /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/;
        if (data.match(regx)) {
            success(label, error);
        } else if (data == '') {
            empty(label, error);
        } else {
            errors(label, error, 'invalid date');
        }
    }

    function iso(label, error) {
        var data = $(label).val();
        var regx = /[[{a-zA-Z\d\s!(~=|";:'\-/_.,+@#%^&*$><}\])]/g;
        if (data.match(regx) && data.endsWith(".iso")) {
            success(label, error);

        } else if (data == '') {
            empty(label, error);

        } else {
            errors(label, error, 'invalid iso file');
        }
    }


    //default function
    function success(label, error) {
        $(label).addClass('is-valid').removeClass('is-invalid');
        $(error).fadeOut('slow');
        // newArray.pop(label);
        // if (arr.includes(label) === true) arr.pop(label);
        // // if (arr.indexOf(label) === false) {
        // //     arr.pop(label);
        // // }
        // console.log(arr);
    }

    function empty(label, error) {
        $(label).addClass('is-invalid').removeClass('is-valid');
        // $("input.cat").addClass("border-danger");
        $(error)
            .text('fileds are empty value required ')
            .css({ 'color': 'red', 'padding': '3px' })
            .fadeIn('fast');
        // if (arr.includes(label) === false) arr.push(label);
        // console.log(arr);
    }


    function errors(label, error, text) {
        $(label).addClass('is-invalid').removeClass('is-valid');
        $(error)
            .text(text)
            .css({ 'color': 'red', 'padding': '3px' })
            .fadeIn('fast');
        // if (arr.includes(label) === false) arr.push(label);
        // console.log(arr);
    }


    $("#clear").on("click", function() {
        document.getElementById("result").innerHTML = "";
    });

    function getJson() {
        try {
            return JSON.parse($('#result').val());
        } catch (ex) {
            alert('Wrong JSON Format: ' + ex);
        }
    }

    var editor = new JsonEditor('#json-display', getJson());
    $('#translate').on('click', function() {
        editor.load(getJson());
    });


    function validateForm() {
        var errorsf = true;
        var allowSubmit = true;
        $.each($('form input'), function(index, formField) {
            if ($(formField).val().trim().length == 0) {
                allowSubmit = false;
            }
//in this line error 
           // if ($(formField).className = "is-invalid") {
             //   errorsf = false;
            //}
//
        });

        if (allowSubmit == false) {
            alert('field is empty!');
        }
        if (errorsf == false) {
            alert("enter the valid data");
        }
        if ((allowSubmit == true) && (errorsf == true)) {
            obj = $('#my-profile').serializeJSON();
            var jsonString = JSON.stringify(obj);
            if (jsonString) {
                $("#result").text(jsonString);
            }
            $.ajax({
                    contentType: "application/json", // php://input
                    //contentType: "application/x-www-form-urlencoded; charset=UTF-8", // $_POST
                    dataType: "json",
                    method: "POST",
                    url: "validation/test.php",
                    data: jsonString
                })
                .done(function(data) {
                    var json = JSON.stringify(data);
                    alert("data send: successsfully :" + json);
                    console.log("test: ", json);
                })
                .fail(function(data) {
                    var json = JSON.stringify(data);
                    alert("Error:" + json);
                    console.log("Error: " + json);
                });
        }
        return allowSubmit;
    }

    $("#my-profile").on("submit", function(ev) {
        ev.preventDefault();
        validateForm();
    });

});