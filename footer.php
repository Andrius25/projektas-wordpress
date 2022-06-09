<div class="footerconteiner">
            <div class="conteiner3">
                <div class="flex">
                    <div class="list">
                        <h2>Informacija:</h2>
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'footer',
                                    'container' => '',
                                    'theme_location' => 'footer',                                    
                                )
                            );
                        ?>
                           
                    </div>
                    <div class="socials">
                        <h2>Susisiekite su mumis:</h2>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-google"></a>
                    </div>
                </div>
            </div>           
        </div>

    
    <div id="prisijungti" class="modal1">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h1>Prisijungti</h1> <br>
            </div>
            <div class="modal-body">
                <form>                
                    <label for="name" class="username">Vartotojo vardas</label><br>
                    <input type="text" id="name"><br>
                    <label for="slap" class="password">Slaptažodis</label><br>
                    <input type="text" id="slap"><br>
                </form>
            </div>
            <div class="modal-footer">
                <br> <button class="prisijungimas">Prisijungti</button>
            </div>
        </div>
    </div>

    <div id="registruotis" class="modal2">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h1>Registracija</h1><br>
            </div>
            <div class="modal-body">
                <form>                
                    <label for="user" class="username">Vartotojo vardas</label><br>
                    <input type="text" id="user"><br>
                    <label for="slap" class="password">Slaptažodis</label><br>
                    <input type="text"  id="slap"><br>
                    <label for="email" class="email">Elektroninis paštas</label><br>
                    <input type="email" id="email"><br>
                    <label for="name" class="name">Vardas</label><br>
                    <input type="text" id="name"><br>
                    <label for="lname" class="lastname">Pavardė</label><br>
                    <input type="text" id="lname"><br>
                </form>
            </div>
            <div class="modal-footer">
               <br> <button class="registracija">Registruotis</button>
            </div>
        </div>
    </div>

<?php
wp_footer()
?>
</body>
</html>