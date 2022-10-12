// Loading button & text

const inputField = document.getElementById('username-input');
const btns = document.querySelectorAll('button');
const generatingRecs = document.querySelector('#generating');
let counter = 59;

btns.forEach((items)=>{
    items.addEventListener('click',(evt)=>{
        if (inputField.value) {

            // Counting down from 60
            generatingRecs.innerHTML = '<span class="bold">Creating playlists . . .</span><br>Survey starts in 60 seconds.';
            let timer = setInterval(function() {
                generatingRecs.innerHTML = '<span class="bold">Creating playlists . . .</span><br>Survey starts in ' + counter + ' seconds.';
                if (counter == 1) {
                    clearInterval(timer);
                }
                counter--;
            }, 1000);

            evt.target.classList.add('activeLoading');
            setTimeout(function() {evt.target.disabled = true;}, 0)
        }
    })
})


// Disabling radio buttons

function disableRadio(num) {
    let listen = document.getElementsByName('s' + num + '-listen');
    let popular = document.getElementsByName('s' + num + '-popular');
    for (let i = 0; i < listen.length; i++) {
         
        if (listen[i].value == 99) {
            listen[i].checked = true;
            popular[i].checked = true;

        } else {
            listen[i].disabled = true;
            popular[i].disabled = true;
            listen[i].checked = false;
            popular[i].checked = false;
        }
    }
}

function enableRadio(num) {
    let listen = document.getElementsByName('s' + num + '-listen');
    let popular = document.getElementsByName('s' + num + '-popular');
    for (let i = 0; i < listen.length; i++) {
        listen[i].disabled = false;
        popular[i].disabled = false;
    }
}