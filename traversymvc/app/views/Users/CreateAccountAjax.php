<?php require APPROOT . '/views/inc/header.php'; ?>

    <form method="post" action="createAccountAjax" id="ajaxAccount">
        <input type="text" name="username" id="user" placeholder="username">
        <input type="password" name="password" id="pass" placeholder="password">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="number" name="age" id="age" placeholder="age">
        <input type="submit" name="submit">
    </form>
    <script>
        document.getElementById('ajaxAccount').addEventListener('submit', postName);

        function postName(e) {
            e.preventDefault();

            let name = document.getElementById('user').value;
            let password = document.getElementById('pass').value;
            let email = document.getElementById('email').value;
            let age = document.getElementById('age').value;
            let params = "username=" + name + "&password=" + password + "&email=" + email + "&age=" + age +"&submit=submit";

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost/ReviewPhpMvc/Users/createAccountAjax', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                console.log(this.responseText);
            }

            xhr.send(params);
        }

    </script>

<?php require APPROOT . '/views/inc/footer.php'; ?>