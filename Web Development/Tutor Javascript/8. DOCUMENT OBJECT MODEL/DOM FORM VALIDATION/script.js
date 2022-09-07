var username = document.querySelector('#username');
var login = document.querySelector('#login');
login.addEventListener('click', function(){
    alert('berhasil');
    if(username.value === "IAM USER"){
        alert('username benar');
    }
    else{
        alert('username salah');
    }
});