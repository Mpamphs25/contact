<?php require 'partials/header.php'; ?>

<body>
<!-- This example requires Tailwind CSS v3.0+ -->
<?php require 'partials/banner.php'; ?>
<div class="isolate bg-white">
  <div class="px-6 pt-6 lg:px-8">
    <?php require 'partials/nav.php'; ?>
  
  </div>
  <main>
    <div >
        <h1 class="primary-header"><?= $heading ?></h1>
        <form action='create-user' method="POST" class='register-form' >
        <!-- Todo required -->
          <fieldset>
            <label for='name' class="name">Onoma </label>
            <input type="text" id="name" name="name" placeholder="Your Name" >
            <?php if(isset($errors['name']) ): ?>
               <p class='error'> <?= $errors['name'] ?> </p>
              <?php endif; ?>
          </fieldset>
          <fieldset>
            <label for='lname' class="lname">Epwnymo </label>
            <input type="text" id="lname" name="lname" value='<?php $_POST['lname'] ??  ' ' ?>' placeholder="Your Last Name">
            <?php if(isset($errors['lname']) ): ?>
              <p class='error'> <?= $errors['lname'] ?>  </p>
              <?php endif; ?>
          </fieldset>
          <fieldset>
            <label for='tel' class="tel">Phone</label>
            <input type='tel'  id="tel" name="tel" min="10" max="13"    placeholder='Your Phone'>
            <?php if(isset($errors['tel']) ): ?>
              <p class='error'>  <?= $errors['tel'] ?>  </p>
              <?php endif; ?>
          </fieldset>
          <fieldset class='country'>
            <label for='country' class='country-style' >Pou meneis? </label>
            <select name='country' id='country'>
              <option value=""> &nbsp; &nbsp; Dialekse ena apo ta parakatw &nbsp; &nbsp; </option>
              <option value='athens'>Athens</option>
              <option value='thessalonikh'>Thessalonikh</option>
              <option value='patra'>Patra</option>
              <option value='allo'>Allo</option>
            </select>
            <?php if(isset($errors['country']) ): ?>
              <p class='error'>  <?= $errors['country'] ?> </p>
              <?php endif; ?>
          </fieldset>
          <fieldset class='interest'>
              <legend class='legend'>Endiaferese gia:</legend>
              <div>
              <div>
                <input type="radio" id="sxesh" name="interest" value="sxesh" checked>
                <label for="sxesh">Sxesh</label>
              </div>
              <div>
                <input type="radio" id="diazygio" name="interest" value="diazygio">
                <label for="diazygio">Diazygio</label>
              </div>
              <div>
                <input type="radio" id="mynhsh" name="interest" value="mynhsh">
                <label for="mynhsh">Mynhsh</label>
              </div>
              <div>
                <input type="radio" id="complicated" name="interest" value="complicated">
                <label for="complicated">Complicated</label>
              </div>
              <?php if(isset($errors['interest']) ): ?>
                <p>  <?= $errors['interest'] ?> </p>
              <?php endif; ?>
              </div>
          </fieldset>
          <fieldset>
            <label for="story" class="story">Pes mas gia sena:</label>
        
            <textarea id="story" name="story"
                   rows="5" cols="33">
                
              </textarea>
              <?php if(isset($errors['story']) ): ?>
              <p class="error">  <?= $errors['story'] ?> </p>
              <?php endif; ?>
          </fieldset>
          <button class='button-submit-unique' type="submit" name="submit">Submit</button>
        </form>
    </div>
   
  </main>
</div>
</body>
<?php require 'partials/footer.php'; ?>