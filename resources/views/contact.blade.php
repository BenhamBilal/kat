<x-site-layout>
    <h1>Contact</h1>
    <form action="verwerk.php" method="POST">

        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="onderwerp">Onderwerp</label>
        <input type="text" id="onderwerp" name="onderwerp">

        <label for="bericht">Bericht</label>
        <textarea id="bericht" name="bericht" required></textarea>

        <button type="submit">Verzenden</button>
    </form>
</x-site-layout>
