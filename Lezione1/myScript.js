const cform = document.getElementById("idform");
const nome = document.getElementById('fname');
const cognome = document.getElementById('lname');

cform.onsubmit = function(e){
    if(nome.value === '' || cognome.value === ''){
        e.preventDefault();
        alert('Devi inserire sia nome che cognome');
    }
    console.clear();
    console.log(nome.value);
    console.log(cognome.value);
}