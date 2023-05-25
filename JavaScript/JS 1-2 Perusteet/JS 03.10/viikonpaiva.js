const today = new Date();
const day = today.getDay();
//console.log(day);               
                                //sunnuntai alkaa indeksista 0
                                //maanantaina tulee: 1

//HATJOITUS:
// tee array, jossa on kaikki viikonpäivät.
// Anna arraylle nimeksi weekdays
// laita ensimmäiseen indeksiin 'sunnuntai' jne.
// Luo muuttuja weekday, aseta arvoksi
// Weekdays-array indeksipaikassa day
// day-muuttuja (luotiin aiemmin)

//  Tulosta päivä -> tulisi alla 'maanantai'

const weekdays = ['sunnuntai','maanantai','tiistai','keskiviiko','torstai','perjantai','lauantai'];
const weekday = weekdays[day];
console.log(weekday);