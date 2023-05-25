//OBJEKT-LITERAL = "key-value pair"
//JavaScriptisse ei ole "Dictionaty-tyypiä", mutta voit ajatella
//Object literal-tyypin "dictionaryksi".


//JSON = JavaScript Object Notation

//id_1: 'orava'

// const person = {
//     firstName: 'Rick',
//     lastName: 'Grimes',
//     age:40,
//     hobbies: ['shooting zombies','patrolling'],
//     address: {
//         street: '40 main street',
//         city: 'King county',
//         state: 'Georgia',
//     }
// }

// console.log(person.address.street);         //tapa 1
// console.log(person.address['street']);      //tapa 2
// console.log(person['address']['street']);   //tapa 3

// //miten muuttaa object-literal (javascript-muodosta JSON-muotoon)
// const personToJSON = JSON.stringify(person);
// console.log(personToJSON);

// //Haetaan JSON-dataa ja muutetaan takaisin JS-object-literaaliksi:
// const JSONtoPerson = JSON.parse(personToJSON);
// console.log(JSONtoPerson);

//Array of object literals:
// const todos = [
//     {
//         id: 1,
//         task: 'opiskele javascriptia',
//         isCompleted : false,
//     },
//     {
//         id: 2,
//         task: 'Hammaslääkäri tiistaina 4.9',
//         isCompleted : true
//     }
// ];
// console.log(todos[1].task);         // tapa 1
// console.log(todos[1]['task']);      // tapa 2


//Lisää person:ille favoriteFoods, lisää  favoriteFoods:iin taulukko
//eli array, jossa on 3 eri suosikki ruokaa
//tulosta favoriteFoods, sekä ensimmäinen listattu suosikki ruoka

//muuta iäksi 43, muuta myös kadun nimi. Tulosta tämän jälkeen person.


const person = {
    firstName: 'Rick',
    lastName: 'Grimes',
    age:40,
    hobbies: ['shooting zombies','patrolling'],
    address: {
        street: '40 main street',
        city: 'King county',
        state: 'Georgia',
    },
    favoriteFoods: ['pizza','lasagne','pasta']
}

person.age = 43;
person.address.street = '33 new street';

console.log(person.favoriteFoods[0]);
//console.log(person);


//lisätään uusi property:
person.eyeColor = 'blue';
console.log(person);
delete person.eyeColor;
console.log(person);