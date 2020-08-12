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

function nilai () {
    let total = jumlah.length;
    let i = 0;
    let betul = 0;
    let salah = 0;
    while (i < total) {
        if (jumlah[i] == true) {
            betul = betul + 1;
        }
        else if (jumlah[i] == false) {
            salah = salah + 1;
        }
        i = i + 1;
    }
    swal(`betul: ${betul}, salah: ${salah}`)
}