<div class="divAccountAlign">
  <form method='post' action='produits.php'>
    <h2>Création d'un compte</h2>
    <p>Merci de renseigner les informations ci-dessous. Les champs marqués d'un * sont obligatoires</p>
    <table>
    <tr>
      <td class="text-title-color" colspan="2">
        Mes identifiants
      </td>
    </tr>
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
        <td class="label-align-right">
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
        <td colspan="2" class="text-title-color">
          Mes coordonnées personnelles
        </td>
      </tr>
    <!-- <table> -->
      <tr>
        <td class="label-align-right">Civilité</td>
        <td>
          <select class="button-submit" name="" id="">
            <option value="">Madame</option>
            <option value="">Monsieur</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="">
            Nom*
          </label>
        </td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
          </input>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Prénom*</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">N° et rue*</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Complément d'adresse</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Code postal*</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Ville*</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder=''>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Pays</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder='FRANCE'>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Téléphone fixe</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder='0223344556'>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Téléphone portable*</td>
        <td>
          <input name='' class='input_css' type='' id='' placeholder='0607080901'>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="text-title-color">
          Ma date d'anniversaire
        </td>
      </tr>
      <tr>
        <td colspan="2" class="">
          <p>
            Grâce à votre date d’anniversaire, Scrap Didi se fera un plaisir de vous souhaiter votre anniversaire et vous offrir un cadeau
          </p>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input name='' class='input_css' type='date' id='' placeholder='03/12/1988'></td>
      </tr>
      <tr>
        <td colspan="2" class="text-title-color">
          Restons en contact
        </td>
      </tr>
      <tr>
        <td colspan="2">Je souhaite recevoir la newsletter du site par mail</td>

      </tr>
      <tr>
        <td></td>
        <td>
          <input type="radio" name="newsletter" value="oui" id="newsletter_oui"/>
          <label for="newsletter_oui">OUI</label>
          <input type="radio" name="newsletter" value="non" id="newsletter_non"/>
          <label for="newsletter_non">NON</label>
        </td>
      </tr>
      <tr>
        <td colspan="2">Je souhaite profiter gratuitement du programme de fidélité*</td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="radio" name="loyalty" value="oui" id="newsletter_oui"/>
          <label for="newsletter_oui">OUI</label>
          <input type="radio" name="loyalty" value="non" id="newsletter_non"/>
          <label for="newsletter_non">NON</label>
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
