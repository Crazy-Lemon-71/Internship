const buttons = document.querySelectorAll(".nav_elem--buttonNumber");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        const menuNumber = button.textContent;

        const form = document.createElement("form");
        form.method = "POST";
        form.action = "./main.php";

        const input = document.createElement("input");
        input.type = "hidden";
        input.name = "menuNumber";
        input.value = menuNumber;

        form.appendChild(input);

        document.body.appendChild(form);
        form.submit();
    });
});

const buttonArrow = document.querySelector(".nav_elem--buttonArrow");

buttonArrow.addEventListener("click", () => {
    const form = document.createElement("form");
    form.method = "POST";
    form.action = "./main.php";

    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "menuNumber";
    input.value = "0";

    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
});