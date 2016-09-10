<form method='post' action='produits.php'>
  <div class='divAccountContent'>
      <div id='divAccount'>
        <p>Veuillez renseigner les différents champs</p>
        <input name='nom' class='input_css' placeholder='Nom' required='required' value=$nom></input>
        <input name='prenom' class='input_css' placeholder='prénom' required='required' value=$prenom></input>
        <br/>
        <input
          name='mailClient'
          class='input_css'
          id='mailClient'
          type='mail'
          value=$mailClient
        ></input>

        <input name='namePassword' class='input_css' type='password' placeholder='Votre mot de passe' required='required'></input>
        <!--<input name='namePassword' class='input_css' type='password' placeholder='Retapez votre mot de passe' required='required'>-->
        <br/>
        <input name='adresse' class='input_css' id='adresse' placeholder='Adresse' required='required' value=$adresse></input>
        <br/>
        <input name='cp' class='input_css' id='code_postal' type='' placeholder='CP' required='required' value=$cp></input>

        <input name='ville' class='input_css' id='ville' placeholder='Ville' required='required'value=$ville></input>
        <br/>
        <input name='mobile_phone' class='input_css' id='mobile_phone' type='tel' placeholder='Portable' value=$tel></input>
        <input name='birthday' class='input_css' id='birthday' type='datetime' placeholder='Un petit cadeau ? Notez votre date anniversaire ;)' value=$birthdayDate ></input>
        <br/>
        <button name='submitAccount' class='input_css' id='submitCompte' type='submit'>Mettre à jour</button>


      </div>
  </div>
</form>
