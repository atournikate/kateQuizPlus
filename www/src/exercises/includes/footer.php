    </body>
    <footer class="footer">
        <p>Created by Kate Ebensteiner, 2021</p>
        <?php 
        function showTime() {
            echo date("l") . ", " . date("d.F.Y") . " " . date("G:i");
        }
        showTime();
        ?>
    <footer>
</html>