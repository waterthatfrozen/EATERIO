function add_amt(){
    var amt_bx = document.getElementById("amount");
    var amt = amt_bx.value;
    if(amt<99){
        amt_bx.value++;
    }
}

function sub_amt(){
    var amt_bx = document.getElementById("amount");
    var amt = amt_bx.value;
    if(amt>1){
        amt_bx.value--;
    }
}