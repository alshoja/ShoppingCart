function add_number(div) {

    console.log(div);
    // var x = document.querySelectorAll("input.");
    var item_quantity = parseFloat(document.getElementById("item_quantity").value);
    var item_amount = parseFloat(document.getElementById("item_amount").value);
    var result = item_quantity * item_amount;
    document.querySelector(".buttonx").innerHTML = result;
    // document.getElementById("txtresult").value = result;
}

function urlParam() {
    items = [];
    var url_string = window.location.href;
    var url = new URL(url_string);
    var length = url.searchParams.get("loop_length");
    var loop_id = 1;
    var totalInit = 0;

    for (let index = 0; index < length; index++) {
        var item_id = url.searchParams.get("item_id_" + loop_id);
        var item_name = url.searchParams.get("googles_item_" + loop_id);
        var amount = url.searchParams.get("amount_" + loop_id);
        var quantity = url.searchParams.get("quantity_" + loop_id);
        totalInit = parseFloat(amount) * parseInt(quantity) + parseFloat(totalInit);
        loop_id++;
        items.push({
            'id': index,
            'amount': amount,
            'item_id': item_id,
            'item_name': item_name,
            'quantity': quantity
        })
    }
    console.log('with index', items)
    document.querySelector(".total").innerHTML = totalInit;
    document.getElementById("final_amount").value = totalInit;
}

function remove(data_id) {
    var id = data_id;

    for (var i = 0; i < items.length; i++) {
        if (items[i].id == id) {
            console.log('f* id is  ',i)
            items.splice(i, 1);
            break;
        }
    }
    // console.log('id from page', id)
    // const removed = items.splice(item, 1);
    // console.log('removed index', index)
    // console.log('removed', removed)
     console.log('current items', items)
    sumOfCart()
}

function plusButton(id, amount, quantity) {
    
    const newamount = parseFloat(amount)
    quantity = parseInt(quantity) + 1
    var newitem = {
        'id': id,
        'amount': newamount,
        'item_id': '',
        'item_name': '',
        'quantity': quantity
    }
    for (var i = 0; i < items.length; i++) {
        if (items[i].id == id) {
            console.log('f* id is  ',i)
            items.splice(i, 1, newitem)
            break;
        }
    }
 
    document.getElementById("plus" + id).value = quantity;
    document.getElementById("minus" + id).value = quantity;
    console.log('new array', items)
    sumOfCart()
}

function minusbutton(id, amount, quantity) {
    if (quantity != 1) {
        const newamount = parseFloat(amount)
        quantity = parseInt(quantity) - 1
        var newitem = {
            'id':id,
            'amount': newamount,
            'item_id': '',
            'item_name': '',
            'quantity': quantity
        }
        for (var i = 0; i < items.length; i++) {
            if (items[i].id == id) {
                console.log('f* id is  ',i)
                items.splice(i, 1, newitem)
                break;
            }
        }
        // items.splice(id, 1, newitem)
        document.getElementById("plus" + id).value = quantity;
        document.getElementById("minus" + id).value = quantity;
        sumOfCart()
        console.log('new array', items)
    }


}

function sumOfCart() {
    let currentAmount = 0
    for (let index = 0; index < items.length; index++) {
        const element = parseFloat(items[index]['amount']) * parseInt(items[index]['quantity']) + parseFloat(currentAmount);
        currentAmount = element
    }
    document.querySelector(".total").innerHTML = currentAmount
    console.log('current sum', currentAmount)
}
