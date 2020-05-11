if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
  document.getElementsByClassName('btn-primary')[0].addEventListener('click', addRow)
  createCookie('totalRows', 1, 10)
  document.getElementsByClassName('btn-success')[0].addEventListener('click', endInput)
  var rowInputs = document.getElementsByClassName('table-data')
  for (var i = 0; i < rowInputs.length; i++) {
      var input = rowInputs[i]
      input.addEventListener('change', newInput)
  }
}

var rows = 1

function newInput(event){
  updateInputRows()
}

function addRow(){
  rows++;
  var productRow = document.createElement('tr')
  productRow.classList.add('table-row')
  var tableItems = document.getElementsByClassName('table-body')[0]
  var productsRowContents = `
      <tr class="table-row">
        <td class="table-data"><input class="id-${rows}"></input></td>
        <td class="table-data"><input class="name-${rows}"></input></td>
        <td class="table-data"><input class="stock-${rows}"></input></td>
        <td class="table-data"><input class="price-${rows}"></input></td>
        <td class="table-data"><input class="cost-${rows}"></input></td>
      </tr>`
  productRow.innerHTML = productsRowContents
  tableItems.append(productRow)
  updateInputRows()
  createCookie('totalRows', rows, 10)
}
var rowInfo = []
function updateInputRows(){
  var id = "0";
  var name = "0";
  var stock = 0;
  var price = 0;
  var cost = 0;

  var tableBody = document.getElementsByClassName('table-body')[0]
  var tableCols = tableBody.getElementsByClassName('table-row')
  console.log(rows);
  for (var i = 0; i < rows; i++) {
    var tableRow = tableCols[i]
    id = tableRow.getElementsByClassName('id-'+(i+1))[0].value
    name = tableRow.getElementsByClassName('name-'+(i+1))[0].value
    stock = tableRow.getElementsByClassName('stock-'+(i+1))[0].value
    price = tableRow.getElementsByClassName('price-'+(i+1))[0].value
    cost = tableRow.getElementsByClassName('cost-'+(i+1))[0].value
    rowInfo[i] = id+"_"+name+"_"+stock+"_"+price+"_"+cost
  }
}

function endInput(){
  updateInputRows()
  for (var i = 0; i < rows; i++) {
    createCookie(i+"_rows", rowInfo[i], 10)
  }
}

function createCookie(name, info, days) {
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
  document.cookie = escape(name) + "=" + escape(info) + expires + "; path=/";
}
