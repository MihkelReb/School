function klikkaa(num) {
    if(num==1) {
        alert(`ALERT!`);
    }
    else if(num==2) {
        console.log("Printing to Console");
    }
    else if(num==3) {
        window.location.reload();
    }
    else if(num==undefined) {
        console.log("no parameters")
    }
    else {
        console.log("something else")
    }
}

function test() {
    console.log("testing");
}

function parametrit(eka,toka) {
    alert(eka+toka);
}

function summa() {
    var x = document.querySelector('#yks').valueAsNumber;
    var y = document.querySelector('#kaks').valueAsNumber;
    console.log('Summa on ', x + y);
}