let budget=0, totalExpenses=0, balance=0;
let expTitle = [];
let expAmount = [];

document.getElementById('table').style.visibility = 'hidden';


function BugetManupulation(){
    budget = document.getElementById('budget-data').value;
    document.getElementById('budget').innerHTML = budget;
    balance = budget - totalExpenses;
    document.getElementById('balance').innerHTML = balance;

    document.getElementById('budget-data').value="";
}

function expManupulation(){
    let exptitledata = document.getElementById('expTitleData').value;
    let expamountdata = document.getElementById('expAmountData').value;
    expTitle.push(exptitledata);
    expAmount.push(expamountdata);
    totalExpenses +=  Number(expamountdata);
    balance = budget - totalExpenses;
    document.getElementById('balance').innerHTML = balance;
    document.getElementById('expense').innerHTML = totalExpenses;
    document.getElementById('expTitleData').value="";
    document.getElementById('expAmountData').value="";
    document.getElementById('table').style.visibility = 'visible';
    appendchilelist(exptitledata, expamountdata);
}


function appendchilelist(exptitledata, expamountdata){
    let tablerow = document.createElement("tr");
    let tabledata_sno = document.createElement("td");
    tabledata_sno.innerHTML = expTitle.length;
    let tabledata_title = document.createElement("td");
    tabledata_title.innerHTML = exptitledata;
    let tabledata_amount = document.createElement("td");
    tabledata_amount.innerHTML = expamountdata;
    tablerow.appendChild(tabledata_sno);
    tablerow.appendChild(tabledata_title);
    tablerow.appendChild(tabledata_amount);
    document.getElementById('table-body').appendChild(tablerow);
}