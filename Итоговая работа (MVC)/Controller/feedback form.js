const submit = document.querySelector(".btn-submit");

submit.addEventListener("click", (e)=>{
    e.preventDefault();
    
    let name = document.querySelector(".name");
    let email = document.querySelector(".email");
    let message = document.querySelector(".message");

    let nameText = document.querySelector(".name--text");
    let emailText = document.querySelector(".email--text");
    let messageText = document.querySelector(".message--text");

    submit.value = "ОТПРАВИТЬ";
    nameText.innerHTML = "Имя пользователя:";
    emailText.innerHTML = "Почта:";
    messageText.innerHTML = "Сообщение:";
    
    let error = 0;

    if(!name.value){
        nameText.innerHTML = "Поле не должно быть пустым!";
        error++;
    }

    if(!email.value){
        emailText.innerHTML = "Поле не должно быть пустым!";
        error++;
    }
    else if(!(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/.test(email.value))){
        emailText.innerHTML = "Поле должно содержать email!";
        error++;
    }

    if(message.value.length > 10){
        messageText.innerHTML = "Количество символов должно быть не более десяти!";
        error++;
    }

    if(error == 0){
        submit.value = "СПАСИБО!";

        const form = document.querySelector(".form");

        fetch("./../model/email.php", {
            method: "POST",
            body: new FormData(form)
        });
    }
    else{
        return;
    }
});