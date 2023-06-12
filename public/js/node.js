function sum() {
    var seat = document.getElementById('seat');
    var people = document.getElementById('people');
    var result = document.getElementById('result');
    if (seat.value == "vip")
    {
        result.value = people.value*3800000;
    }
    else if(seat.value=="platinum")
    {
        result.value = people.value*3400000;
    }
    else if(seat.value=="cat1")
    {
        result.value = people.value*2900000;
    }
    else if(seat.value=="cat2")
    {
        result.value = people.value*2600000;
    }
    else if(seat.value=="cat3")
    {
        result.value = people.value*2100000;
    }
    else if(seat.value=="cat4")
    {
        result.value = people.value*1350000;
    }
}

function admin() {
    var result = document.getElementById('result');
    var admin = document.getElementById('admin');
    admin.value = result.value*0.01;
}

function total() {
    var result = document.getElementById('result');
    var admin = document.getElementById('admin');
    var total = document.getElementById('total');
    total.value = parseInt(result.value)+parseInt(admin.value);
}

function purchase(){sum(); admin(); total();}