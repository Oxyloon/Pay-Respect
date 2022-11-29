<html>
    <h1>Pay Respect</h1>
    <p>Trouvez plein de jeux sur cet incroyable site qui n'est en fait qu'un prototype réalisé par les bg de BTS SNIR !</p>
        <div>
            <form action="pages/search.php" method="get">
                <p>Rechercher parmis tous nos jeux : <input type="text" name="game" />
                <input type="submit" value="OK">
            </form>

            <form action="pages/search.php" method="get">
                ou par genre :
                <select name="genre" id="genre-select">
                    <option value="">Choisir un genre</option>
                    <option value="fps">FPS</option>
                    <option value="horror">Horreur</option>
                    <option value="arcade">Arcade</option>
                    <option value="solo">Solo</option>
                    <option value="strat">Stratégie</option>
                    <option value="coop">Coop</option>
                </select>
                <input type="submit" value="OK">
            </form>
        </div>

        <p>-------------------------------------------------------------------------------</p>
</html>