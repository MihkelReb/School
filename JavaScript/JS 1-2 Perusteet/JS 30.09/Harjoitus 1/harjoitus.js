//Luo funktio, joka saa luvun parametrina.
//Funktio palautta yhtä isomman luvun.
//Kutsu funktiota ja aseta tulos muuttujaan.
//Tulosta muuttujan arvo konsoliin.

function summa(num) {
    return num + 1;
}

let num = summa(5)
    console.log(num)

//Helpompi tehtävä:
//Luo funktio joka saa yhden parametrin
//Funktio tulostaa konsoliin:
//'Sain parametrin: '{saatu_parametri}';
//kutsu funktiota.

let n2 = prompt('parametri on: ');

function sayHello2(n2) {
    console.log("Helppo: saatu parametri = " + n2);
}

sayHello2(n2)


//helpoin
//luo funktio sayHello(), joka ei saa parametreja.
//funktio tulostaa "Hello World".
//kutsu funktiota

function sayHello3() {
    console.log("Helpompi: Hello World");
}

sayHello3()