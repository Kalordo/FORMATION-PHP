
    <form action="decrypt_password.php" method="POST">
        <label for="password">Mot de passe :</label><br>
        <input type="text" name="password" id="password" required><br><br>

        <label for="hash">Version chiffrée (hash) :</label><br>
        <input type="text" name="hash" id="hash" required><br><br>

        <button type="submit">Vérifier</button>
    </form>