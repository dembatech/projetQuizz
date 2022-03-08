<div class="containerFormRegistration">
    <form action="" method="POST" id="formRegister" enctype="multipart/form-data" >
        <input type="hidden" name="controller" value=securite>
        <input type="hidden" name="action" value=inscription>

            <!-- php -->

        <section class="loginForm">
            <h3>s'inscrire</h3>
            <!-- php -->
        </section>

        <div id="prenom">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom">
        </div>
       
        <div id="nom">
            <label for="nom">Nom</label>
            <input type="text" name="nom">
        </div>

        <div id="login">
            <label for="login">Login</label>
            <input type="text" name="login">
        </div>

        <div id="password">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>

        <div id="password2">
            <label for="password2">Veuillez confirmer le mot de passe</label>
            <input type="password" name="password2">
        </div>

        <div class="button">  
            <img src="" alt="avatar" id="output">
            <input type="file" name="avatar" id="avatar" accept="image/*">
            <label for="avatar" class="avatar">Choisir une image</label>
        </div>

        <div class="button">
            <input type="submit" name="inscription" value="S'inscrire"> 
        </div>
    </form>
    <div class="the_avatar">
        <img src="" alt="avatar">
    </div>
</div>