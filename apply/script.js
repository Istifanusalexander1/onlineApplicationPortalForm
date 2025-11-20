const form = document.querySelector('#form');
const dialog = document.querySelector('#confirmDialog');
const yes = document.querySelector('.yes');
const no = document.querySelector('.no');

form.addEventListener("submit", function(event){
    event.preventDefault();
    dialog.showModal();
});

// ✅ FIX: function must be inside addEventListener
yes.addEventListener("click", function(){
    dialog.close();
    form.submit();
});
no.addEventListener("click", function(){
    dialog.close();
});
