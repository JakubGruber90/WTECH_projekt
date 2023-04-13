<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear shop</title>
    <link rel="stylesheet" href="{{ asset('storage/css/create_product.css') }}">
</head>
<body>
    <!--Hlavička stránky-->
    @include('header')

    <div class="spacer">
        &nbsp;
    </div>

    <!-- VYTVORENIE PRODUKTU -->
    <div class="canvas">
      <h1>Upravenie produktu</h1>
      <section class="all_input">
        <!-- meno,popis,cena -->
        <section class="input_section">
          <form>
            <br>
            <input type="text" placeholder="ID produktu" id="id"><br>
            <br>
            <input type="text" placeholder="Nazov produktu" id="name"><br>
            <br>
            <textarea type="text" rows="3" placeholder="Popis produktu" id="description" class="description"></textarea><br>
          </form>
        </section>
        <!-- kategoria,material,znacka,farba -->
        <section class="input_section">
            <form>
              <br>
              <input type="number" placeholder="Cena produktu" id="price"><br>
              <br>
              <input type="text" placeholder="Kategória produktu" id="category"><br>
              <br>
              <input type="text" placeholder="Materiál produktu" id="material"><br>
              <br>
              <input type="text" placeholder="Značka produktu" id="brand"><br>
              <br>
          </form>
        </section>
        <!-- velkosti,obrazky -->
        <section class="input_section">
            <form>
              <br>
              <input type="text" placeholder="Farba produktu" id="color" class="color"><br>
              <br>
              <span class="files_label">Nahrať veľkosti</span>
              <br>
              <input type="file" id="sizes" class="input_files" multiple="multiple" accept="text/csv">
              <br>
              <span class="files_label">Nahrať obrázky</span>
              <br>
              <input type="file" id="images" class="input_files" multiple="multiple" accept=".jpg, .png">
          </form>
        </section>
      </section>
      <!-- potvrdenie vytvorenia -->
      <button id="confirm_button" class="confirm_button">Upraviť produkt</button>
    </div>

    <!--Nožička stránky-->
    @include('footer')
</body>
</html>