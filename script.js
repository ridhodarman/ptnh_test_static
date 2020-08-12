let jumlah=[];
function check(id, hasil){
    if (hasil==true) {
        $( `#${id}` ).empty().html( `<h7 class="text-success">Betul</h7>` );
        jumlah[id] = true;
    }
    else {
        $( `#${id}` ).empty().html( `<h7 class="text-primary">Salah</h7>` );
        jumlah[id] = false;
    }
}