<div class="divAccountAlign">
  <form method='post' action='produits.php'>
    <h2>Création d'un compte</h2>
    <p>Merci de renseigner les informations ci-dessous. Les champs marqués d'un * sont obligatoires</p>
    <table>
      <tr>
        <td class="label-align-right">
          <label for="mailClient">Adresse email*</label>
        </td>
        <td>
          <input
            name='mailClient'
            class='input_css'
            id='mailClient'
            type='mail'
            value= <?php $mailClient ?>
          >
          </input>
        </td>
      </tr>
      <tr>
        <td>
          <label for="mailClientVerification">Confirmer votre adresse email*</label>
        </td>
        <td>
          <input
            name='mailClientVerification'
            class='input_css'
            id='mailClientVerification'
            type='mail'
            value= <?php $mailClient ?>
          >
          </input>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="namePassword">Mot de passe*</label>
        </td>
        <td>
          <input name='namePassword' class='input_css' type='password' placeholder='Votre mot de passe' id='namePassword' required='required'>
          </input>

        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="namePasswordVerification">Confirmer votre mot de passe*</label>
        </td>
        <td>
          <input name='namePasswordVerification' class='input_css' type='password' id='namePasswordVerification' placeholder='Votre mot de passe' required='required'>
          </input>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <button name='submitAccount' class='button-submit' id='submitCompte' type='submit'>Mettre à jour</button>
        </td>
      </tr>
    </table>
  </form>
</div>
