// ARRAY ELI TAULUKKO

//Array voidaan luoda 2 eri tavalla, mollemat ok:

const nimet = ['rick',10,'daryl','maggie',false];
console.log('nimet-taulukko:',nimet);


//Vaihtoehtoinen taulukon luontitapa:
const numerot = new Array(1,2,3,4,5);
console.log(numerot);

//HAKU ARRAYSTA INDEKSIPAIKAN MUKAAN:

console.log(nimet[0]);
console.log(nimet[10]); //Tulostaa undefined

//INDEKSIPAIKAN HAKU TIETYN ARVON MUKAAN
console.log(nimet.indexOf('daryl'));

//HUOM! Array ei ole muuttuja, vaan objekti, joka
//pitää sisällään muuttujia.

nimet[1] = 'Zombie';
console.log(nimet);

nimet.push('Vika');     //Lisää loppuun
console.log(nimet);

nimet.pop();            //poisti viimeisen
console.log(nimet);

nimet.shift();          //Poistaa ensimmäisen
console.log(nimet);

nimet.unshift('Eka');   //lisää alkuun
console.log(nimet);

//splice(start, deleteCount, item1, item2, itemN);
nimet.splice(1,0,'TEST');   //lisää indeksipaikkaan 1;
console.log(nimet);

const luvut=[1,2,3,4,5];
luvut.splice(2,2);
console.log(luvut);