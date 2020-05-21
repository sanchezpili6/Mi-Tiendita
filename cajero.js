if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    var txt;
    var person = prompt("Del 1 al 10, qué tan satisfecho estás con tu compra?", "10");
    if (person == null || person == "") {
      txt = "User cancelled the prompt.";
    } else {
      createCookie("encuesta", person, 10);
      txt = "Gracias por tu valoración";
    }
    document.getElementById("demo").innerHTML = txt;
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    console.log(cartItemNames.length);
    //document.cookie = cartItemNames.length+"=; expires Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    updateCartTotal()
}

function quantityChanged(event) {
  var input = event.target
  var cartItem = input.parentElement.parentElement
  var title = cartItem.getElementsByClassName('cart-item')[0].innerText
  if (isNaN(input.value) || input.value <= 0) {
      input.value = 1
  }
  updateCartTotal(title)
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    addItemToCart(title, price)
    updateCartTotal(title)
}

function addItemToCart(title, price) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('Este producto ya está en el carrito')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input name="${title}" class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

var products = []

function updateCartTotal(title) {
  var cartItemContainer = document.getElementsByClassName('cart-items')[0];
  var cartRows = cartItemContainer.getElementsByClassName('cart-row');
  var total = 0
  var found = false;
  var foundIndex = 0;
  var quantity = 0
  for (var i = 0; i < products.length; i++) {
    if (products[i] == title){
      found = true;
      foundIndex = i
      break;
    }
  }
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i]
    var priceElement = cartRow.getElementsByClassName('cart-price')[0]
    var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
    var price = parseFloat(priceElement.innerText.replace('$', ''))
    quantity = quantityElement.value
    total += (price * quantity);
  }
  if (found == false) {
    products.push(title)
    console.log("2" + products.length-1+"_"+quantity+"/"+title);
    createCookie(products.length-1, quantity+"_"+title, "10");
    console.log("new length: " + products.length);
    createCookie("length", products.length, "10");
  }
  else {
    var cartRow = cartRows[foundIndex]
    var priceElement = cartRow.getElementsByClassName('cart-price')[0]
    var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
    var price = parseFloat(priceElement.innerText.replace('$', ''))
    quantity = quantityElement.value
    createCookie(foundIndex, quantity+"_"+title, "10");
  }
  total = Math.round(total * 100) / 100
  document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}


function createCookie(name, quantity_product, days) {
  document.cookie = name+"=; expires Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = escape(name) + "=" + escape(quantity_product) + expires + "; path=/";
}
