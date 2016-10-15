<div class="divAccountAlign">
  <form method='post' action='produits.php'>
    <h2>Création de mon compte</h2>
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
            required='required'
            value= <?php echo"$_SESSION[mailClient]" ?>
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
            required='required'
          >
          </input>
        </td>
      </tr>
      <tr id="mail-alert" class="hide-tr">
        <td class="label-align-right">
        </td>
        <td class="alert-td" >
          <p>Les mails saisis ne sont pas identiques</p>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="namePassword">Mot de passe*</label>
        </td>
        <td>
          <input
            name='namePassword'
            class='input_css'
            type='password'
            placeholder='Votre mot de passe'
            id='namePassword'
            required='required'
            maxlength=10>
          </input>

        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="namePasswordVerification">Confirmer votre mot de passe*</label>
        </td>
        <td>
          <input
            name='namePasswordVerification'
            class='input_css'
            type='password'
            id='namePasswordVerification'
            placeholder='Votre mot de passe'
            required='required'
            maxlength=10>
          </input>
        </td>
      </tr>
      <tr id="password-alert" class="hide-tr">
        <td></td>
        <td class="alert-td" >
          <p>Les mots de passe saisis ne sont pas identiques</p>
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
            <option value="Madame">Mademoiselle</option>
            <option value="Madame" selected="selected">Madame</option>
            <option value="Monsieur">Monsieur</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">
          <label for="nom">
            Nom*
          </label>
        </td>
        <td>
          <input
            name='nom'
            class='input_css'
            type='text'
            id=''
            placeholder=''
            required="required"
            value=<?php echo"$nom" ?>>
          </input>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Prénom*</td>
        <td>
          <input
            name='prenom'
            class='input_css'
            type='text'
            id=''
            placeholder=''
            maxlength=25
            required='required'
            value=<?php echo"$prenom" ?>>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">N° et rue*</td>
        <td>
          <input
            name='adresse'
            class='input_css'
            type='text'
            id=''
            placeholder=''
            maxlength=25
            required='required'
            value=<?php echo"$adresse" ?>>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Complément d'adresse</td>
        <td>
          <input
            name='complementAdresseClient'
            class='input_css'
            type='text'
            id=''
            placeholder=''
            maxlength=25
            value=<?php echo"$complementAdresse" ?>>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Code postal*</td>
        <td>
          <input
            name='cp'
            class='input_css'
            type='number'
            id=''
            placeholder=''
            required='required'
            maxlength=5
            value=<?php echo"$cp" ?>>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Ville*</td>
        <td>
          <input
            name='ville'
            class='input_css'
            type='text'
            id=''
            placeholder=''
            required='required'
            maxlength=25
            value=<?php echo"$ville" ?>>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Pays*</td>
        <td>
          <select class="button-submit" name="pays" id="">
            <option value="france" selected="selected">France</option>
            <option value="belgique">Belgique</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label-align-right">Téléphone portable</td>
        <td>
          <input
            name='mobile_phone'
            class='input_css'
            type='tel'
            id=''
            placeholder=''
            value=<?php echo"$tel" ?>>
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
        <td>
          <input
            name='birthday'
            class='input_css'
            type='date'
            id=''
            placeholder=''
            value=<?php echo"$birthdayDate" ?>>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="text-title-color">
          Restons en contact
        </td>
      </tr>
      <tr>
        <td colspan="2">Je souhaite recevoir la newsletter du site par mail*</td>

      </tr>
      <tr>
        <td></td>
        <td>
          <input
            type="radio"
            name="newsletter"
            value="oui"
            id="newsletter_oui"
            checked="checked"
          />
          <label for="newsletter_oui">
            OUI
          </label>
          <input
            type="radio"
            name="newsletter"
            value="non"
            id="newsletter_non"
          />
          <label for="newsletter_non">NON</label>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          Je souhaite profiter gratuitement du programme de fidélité*
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input
            type="radio"
            name="loyalty"
            value="oui"
            id="newsletter_oui"
            checked="checked"
          />
          <label for="newsletter_oui">
            OUI
          </label>
          <input
            type="radio"
            name="loyalty"
            value="non"
            id="newsletter_non"
          />
          <label for="newsletter_non">
            NON
          </label>
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <button
            name='submitAccount'
            class='button-submit'
            id='submitCompte'
            type='submit'
          >
            Je valide mon compte
          </button>
        </td>
      </tr>
    </table>
  </form>
</div>
