const form = document.querySelector(".signup form"),
continueBtn = document.querySelector(".button input"),
errorBtn = document.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == 'success') {
                    location.href = "users.php";
                    redirect("users.php");
                } else {
                    errorBtn.textContent = data;
                    errorBtn.style.display = 'block';
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}