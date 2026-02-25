
function showAddProductConfirm(){
    alert('Product Added Successfuly!');
}

function showMessageSubmitConfirm(){
    alert('Thank you for your message!');
}

function toggleProductForm(){
    const form = document.getElementById('product-form');

    document.getElementById('customer_table').style.display = "none";
    document.getElementById('delivery_table').style.display = "none";
    form.style.display = "block";
}
function toggleCustomerTable(){
    const table = document.getElementById('customer_table');

    if(table.style.display === "none"){
        document.getElementById('product-form').style.display = "none";
        document.getElementById('delivery_table').style.display = "none";
        table.style.display = "block";
    }
}
function toggleDeliveryTable(){
    const table2 = document.getElementById('delivery_table');

    if(table2.style.display === "none"){
        document.getElementById('product-form').style.display = "none";
        document.getElementById('customer_table').style.display = "none";
        table2.style.display = "block";
    }
}

//Delivery form
function openCreateDeliveryForm(){
    const deliveryForm =  document.getElementById('create-delivery-form');
    const deliveryTable = document.getElementById('delivery-user-table');
    const deliveryButtonForm = document.getElementById('delivery_table').querySelector('button[type="button"]');

    if(deliveryForm.style.display === 'none'){
        deliveryTable.style.display = "none";
        deliveryForm.style.display = "block";
        deliveryButtonForm.innerText = 'Open Delivery Table';
    }
    else if (deliveryTable.style.display === 'none' && deliveryForm.style.display === 'block') {
        deliveryForm.style.display = 'none';
        deliveryTable.style.display = 'block';
          deliveryButtonForm.innerText = 'Create Account for Delivery Man';
    }

}


//validating form
function validateForm(){
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm = document.getElementById('confirm-pas').value;

    if(!name || !email || !password || !confirm){
        alert('Please fill in all feilds!');
        return false;
    }
    if(password.length < 6){
        alert('Password must be at least 6 charachter');
        return false;
    }
    //confrim password
    if(password !== confirm){
        alert('Your password do not match!');
        return false;
    }
    
    alert('Registration successful!');
    return true;
}


/*header*/
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', ()=>{
        nav.classList.add('active');
    });
}
if(close){
    close.addEventListener('click', ()=>{
        nav.classList.remove('active');
    });
}

 

