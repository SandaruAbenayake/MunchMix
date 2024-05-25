function btnLoginAction(){
    var fname=document.getElementById("fname").value;
    var fpassword=document.getElementById("fpassword").value;
    console.log(fname)
    console.log(fpassword)
    if(fname=="sandaru" && fpassword=="123"){
        alert("correct")
    }
}

function addToCart(item){
    let cartItems = localStorage.getItem("cartItems");

    // Check if cartItems is null or not
    if (cartItems === null) {
        // If cartItems is null, initialize it as an empty array
        cartItems = [];
    } else {
        // If cartItems is not null, parse it from JSON to array
        cartItems = JSON.parse(cartItems);
    }
    item["qty"] = 1;
    console.log(item)

    // Push the new item to the cartItems array
    cartItems.push(item);

    // Store the updated cartItems array in localStorage
    localStorage.setItem("cartItems", JSON.stringify(cartItems));

    // Display a success message
    displayMessage("Item added to cart successfully");

    console.log(cartItems);
}

function displayMessage(message) {
    alert(message);

}

function refreshCart(){
    location.reload();
}



function removeItemFromCart(index){
    let items = JSON.parse(localStorage.getItem("cartItems"));
    if(items == null){
        return
    }
    else{
        items.splice(index, 1); // Remove the item at the specified index
        localStorage.setItem("cartItems", JSON.stringify(items)); // Store the updated array back to localStorage
        refreshCart();
        displayMessage("Item removed from cart successfully!");
    }

}
function displayMessage(message) { 
    alert(message);  
}
