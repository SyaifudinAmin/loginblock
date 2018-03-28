function clicked(){
    var user = document.getElementById('username');
    var pass = document.getElementById('password');
    
    var username ='admin';
    var password ='12345';
    
    if(user.value == username){
        if(pass.value == password){
            window.alert("login succes sebagai "+ user.value);
        } else {
            window.alert("password salah!");
        }
            
    } else{
        window.alert("username belum terdaftar");
    }
    
}