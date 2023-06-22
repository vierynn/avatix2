function sum() {
    var seat = document.getElementById('seat');
    var people = document.getElementById('people');
    var price = document.getElementById('price');
    var result = document.getElementById('result');
    result.value = price.value*people.value;
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